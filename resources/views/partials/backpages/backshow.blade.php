<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Title: {{$backShow->title}}</h5>
          <h5 class="card-title">Text: {{$backShow->text}}</h5>
          <h5 class="card-title">Title2: {{$backShow->title2}}</h5>
        </div>
      </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>