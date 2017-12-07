<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Vue table</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app" class="container-fluid">
        <my-table />
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
