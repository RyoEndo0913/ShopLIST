<!DOCTYPE html>

<head>    
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <title>出店表</title>
</head>
<body>
<h1>出店者詳細</h1>
    <div class="mt-10">
        <table>
            <tr>
                <th>名前（ふりがな）</th>
                <th>支部名</th>
                <th>生年月日（年齢）</th>
                <th>性別</th>
                <th>電話番号</th>
            </tr>
            <tr>
                <td>
                    {{$owners->owner_name_kanji}}
                    {{$owners->owner_name_kana}}）
                </td>
                <td>{{$owners->affiliation_branch_name}}</td>
                <td>{{$owners->birth_day}}
                    {{$owners->unit_age}}
                </td>
                <td>{{$owners->owner_sex}}</td>
                <td><a href="tel:{{$owners->owner_tell}}">{{$owners->owner_tell}}</a></td>
            </tr>
        </table>
        <a class="btn pt-10" href="{{ route('owners.index') }}">戻る</a>
    </div>
</body>