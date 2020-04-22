<!DOCTYPE html>
<meta charset="utf-8">
<head>
    <title>露店出店表｜出店表</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <h1>出店者一覧</h1>
    <div>
        @foreach ($owners as $owner)
            {{$owner->owner_name_kanji}}
            {{$owner->owner_name_kana}}
            {{$owner->owner_birth}}
            {{$owner->owner_age}}
            {{$owner->owner_address}}
            {{$owner->owner_sex}}
            {{$owner->owner_tell}}
        @endforeach
    </div>
</body>