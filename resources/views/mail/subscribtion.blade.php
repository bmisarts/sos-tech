<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        .center {
            text-align: center;
            background-color: #5b438;
        }
        h2, b {
            color: #5b438;
        }
        body {
            margin: 5%;
            background-color: #babab;
            color: black;
            text-align: left;
        }
    </style>
</head>    
</body>
    <body>
        <div class="card pd-10">
            <h2 class="card-header bg1 center text-white">{{ $datas->subject }}</h2>
        </div>
        <div class="card-body pd-10 bg-light">
            Merci pour votre inscription a notre new letter <br> <br>
            <p>Vous pouvez vous desincrire a tout moment en utilisant<a href="{{$datas->unsub}}"> ce lien </a> <br>
            Connectez vous a notre site en utilisant les parametres suivants:</p>  <br>
            <p><b>email:</b>  {{ $datas->email }}</p>
            <p><b>password:</b>  {{ $datas->password }}</p> <br>

            <p>Si vous n'avez pas souscrit a notre new letter, veuillez nous en informer immédiatement en répondant à <a href="mailto:gilleskemgoum@gmail.com"> cet adresse email.</a></p>  <br>

            <p><b class="fg1 text-center">{{ config('app.name', 'Laravel') }} </b> Vous remercie</p>
        </div>
    </body>
</html>