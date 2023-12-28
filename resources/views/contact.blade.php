@extends('layout.app')
@section('appContents')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        .card-group{
            display: flex;
            flex-direction: row;
            width:35em;
            height:25em;
            margin:30px auto;
            background: transparent;
    border:2px solid rgba(255,255,255,.2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0,0,0,.2);
    color:black;
        }
        .card{
            margin: 2px;
            padding: 2px;
            width: 50%;
        }
        .card-img-top{
            border-radius: 15px;
            width:184px;
            height: 11em;
            margin:15px 41px;
        }
        .card-title{
            text-align: center;
            font-size: 25px;
        }
        .card-text{
            line-height: 1.5;
            margin:15px 20px;
            text-align: center;
        }
        .btn{
            text-decoration: none;
            margin:auto;
            padding:5px;
            background-color: rgba(52, 48, 48, 0.856);
            color:white;
            border:2px solid black;
            margin:2px 79px;
            border-radius: 10px;
            padding: 10px 20px;
        }
        .heading{
            text-align: center;
            margin: 10px auto;
        }

    </style>
</head>
<body>
    <h1 class="heading">Social Media Handlers of Virat Kohli</h1>
    <div class="card-group">
        <div class="card">
          <img src="/images/insta.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Insta Account</h5>
            <p class="card-text">This is the instagram account of virat kohli, click the link below to visit.</p>
            <a href="https://www.instagram.com/virat.kohli" target="_blank" class="btn">Instagram</a>
          </div>
        </div>
        <div class="card">
          <img src="/images/twitter.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Twitter Account</h5>
            <p class="card-text">This is the Twitter account of virat kohli, click the link below to visit.</p>
            <a href="https://twitter.com/imVkohli" target="_blank" class="btn">Twitter</a>
          </div>

        </div>
      </div>
</body>
</html>
@endsection
