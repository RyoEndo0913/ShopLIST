<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class weatherCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:weatherforecast';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // 都市名、apiキー、エンドポイント設定
        $cityName    = 'Osaka,JP';
        $baseUrl     = 'http://api.openweathermap.org/data/2.5/weather';
        $apikey      = '022d084bdfbd34bad86d2dc7e80406b8';
        $apiEndPoint = $baseUrl.'?q='.$cityName.'&appid='.$apikey.'&lang=ja';

        // 初期化
        $ch = curl_init();

        // オプション設定
        curl_setopt($ch, CURLOPT_URL, $apiEndPoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        // 実行
        $responce = curl_exec($ch);

        // json形式を配列形式へ戻す
        $weather_responces = json_decode($responce, true);

        // 切断
        curl_close($ch);

        // 現在の天気を変数に入れる
        $current_weather   = $weather_responces['weather'][0]['main'];

        // 送信先、送信元、題名を設定
        $mail_message = '';
        $header       = 'From: 4889.re@gmail.com';
        $mail_address = 'animal_7387@yahoo.co.jp';
        $mail_subject = '【今日の天気】';

        // APIレスポンスの結果によって本文の条件分岐
        switch ($current_weather) {
            case 'Thunderstorm':
                $mail_message = '今日は雷雨やで。　外出はやめといたほうがいいで。';
                break;

            case 'Drizzle':
                $mail_message = '今日はミスト雨やで。　ミスト雨はうざい。';
                break;

            case 'Rain':
                $mail_message = '今日は雨やで。　傘忘れんなよ。';
                break;

            case 'Snow':
                $mail_message = '今日は雪やで。　電車止まるぞ。';
                break;

            case 'Atmosphere':
                $mail_message = '今日は霧やで。　なんも見えへんかもな。';
                break;

            case 'Clear':
                $mail_message = '今日は晴れやで。　外で何する？';
                break;

            case 'Clouds':
                $mail_message = '今日は曇りやで。　憂鬱やな。';
                break;
        }

        // メール送信する
        if($mail_message) {
            mb_send_mail($mail_address, $mail_subject, $mail_message, $header);
        }
    }
}
