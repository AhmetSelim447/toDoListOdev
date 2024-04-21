<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>

        body{

            background-color: #CB6363;

        }

        .outside{

            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .register{

            border: 2px solid aquamarine;

        }

        .register form{

            margin: 20px;

        }

        form div input::placeholder{

            vertical-align: center !important;

        }

        form div{

            padding-top: 25px !important;
            border-radius: 30px !important;

        }

        .btnn{

            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btnn button{

            border: none;
            border-radius: 30px;
            padding:10px 25px;
            color: #CB6363;

        }

        .btnn button:hover{

            color: aquamarine;

        }

    </style>


</head>
<body>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $hatalar)

                        <li>{{$hatalar}}</li>

            @endforeach
        </ul>
    @endif


    <div class="container outside">

        <div class="register">

            <form action="{{route("home.registerPost")}}" method="post">

                @csrf

                <div>

                    <input type="text" class="form-control" placeholder="Adınızı giriniz" name="name">

                </div>

                <div>

                    <input type="text" class="form-control" placeholder="Soyadınızı giriniz" name="surname">

                </div>

                <div>

                    <input type="text" class="form-control" placeholder="telefon giriniz" name="phone">

                </div>

                <div>

                    <input type="email" class="form-control" placeholder="Email giriniz" name="email">

                </div>

                <div>

                    <input type="password" class="form-control" placeholder="Şifre giriniz" name="password">

                </div>

                <div class="btnn">

                    <button type="submit" class="bg-white">Kaydol</button>

                </div>

            </form>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
