<!DOCTYPE html>

<head>    
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <title>出店表</title>
</head>
<body>
    <h1>出店者一覧</h1>
    <button class="btn">登録</button>
        <div class="mt-10">
            {{-- <input type="checkbox"> --}}
            <table>
                <tr>
                    <th>名前（ふりがな）</th>
                    <th>生年月日（年齢）</th>
                    <th>性別</th>
                    <th>電話番号</th>
                </tr>
                @foreach($owners as $owner)
                <tr>
                    <td>{{$owner->owner_name_kanji}}
                        （{{$owner->owner_name_kana}}）
                    </td>
                    <td>{{$owner->birth_day}}
                        {{$owner->unit_age}}
                    </td>
                    <td>{{$owner->owner_sex}}</td>
                    <td><a href="tel:{{$owner->owner_tell}}">{{$owner->owner_tell}}</a></td>
                </tr>
                @endforeach
            </table>
        </div>
</body>