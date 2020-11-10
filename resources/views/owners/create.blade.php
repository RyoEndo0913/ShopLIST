<!DOCTYPE html>

<head>    
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <title>出店表</title>
</head>
<body>
<h1>出店者登録</h1>
    <div class="mt-10">
        <table>
            <tr>
                <th>名前（ふりがな）</th>
                <th>支部名</th>
                <th>生年月日（年齢）</th>
                <th>性別</th>
                <th>電話番号</th>
            </tr>
            <input> 
            {{-- @foreach($owners as $owner)
                <tr>
                    <td>
                        <a href="{{ route('owners.show', $owner->id) }}">
                            {{$owner->owner_name_kanji}}
                            （{{$owner->owner_name_kana}}）
                        </a>
                    </td>
                    <td>{{$owner->affiliation_branch_name}}</td>
                    <td>{{$owner->birth_day}}
                        {{$owner->unit_age}}
                    </td>
                    <td>{{$owner->owner_sex}}</td>
                    <td><a href="tel:{{$owner->owner_tell}}">{{$owner->owner_tell}}</a></td>
                </tr>
            @endforeach --}}
        </table>
    </div>
</body>