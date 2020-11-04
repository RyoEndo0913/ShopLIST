<!DOCTYPE html>
<meta charset="utf-8">
<head>
    <title>出店表</title>
</head>
<body>
    <h1>出店者一覧</h1>
    <div>
        <button>登録</button>
        <button>削除</button>
        <br>
            <div>
                @foreach($owners as $owner)
                    {{-- <input type="checkbox"> --}}
                    <p>名前(ふりがな)
                        {{$owner->owner_name_kanji}}
                        {{$owner->owner_name_kana}}
                    </p>
                    <p>生年月日
                        {{$owner->owner_birth}}
                        {{$owner->unit_age}}
                    </p>
                    <p>性別
                        {{$owner->owner_sex}}
                    </p>
                    <p>住所
                        {{$owner->owner_address}}
                    </p>
                    <p>電話番号
                        {{$owner->owner_tell}}<br>
                    </p>
                @endforeach
            </div>
</body>