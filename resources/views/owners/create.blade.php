<!DOCTYPE html>
<meta charset="utf-8">
<head>
    <title>出店者登録｜出店表</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery-3.5.0.min.js')}}"></script>
</head>
<body>
    <h1 class="h1-title">出店者登録</h1>
    <div class="">
        <input type="text" placeholder="名前"><br>
        <input type="text" placeholder="なまえ"><br>
        <input type="text">年
        <input type="text">月
        <input type="text">日<br>
        <input type="text">歳<br>
        <select name="address">
            <option value="選択肢1">北海道</option>
            <option value="選択肢2">大阪</option>
        <select><br>
        <input type="radio" name="sex" value="1" checked="checked">男
        <input type="radio" name="sex" value="2">女<br>
        <input type="text" placeholder="電話番号">
        <input type="submit">
    </div>

</body>