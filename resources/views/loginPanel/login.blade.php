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

        .loginn{

            border:2px solid aquamarine;

        }

        form div{

            padding: 20px;

        }

        form div input{

            border:none;
            width: 100%;
            padding: 12px;
            border-radius: 12px 15px;

        }

        form div input:focus{

            border:aquamarine;

        }

        .buttonn{

            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btnn{

            border: none;
            border-radius: 15px;
            padding: 5px;
            color: #CB6363;

        }

        .btnn:hover{

            background-color: white;
            color: red;

        }

        .errors{

            background-color: #7fe0f6;
            padding: 30px;
            color: #a626a4;
            font-size:17px;
            font-weight: bold;

        }

    </style>

</head>

<body>
    @if(isset($error))

            <div class="container pt-lg-5">

                <div class="errors">

                        <ul>

                            <li>{{$error}}</li>

                        </ul>

                </div>

            </div>
   @endif
    <div class="container outside">

        <div class="loginn">

            <form action="{{route("home.loginPost")}}" method="post">

                @csrf

                <div class="email">

                    <input type="email" class="" placeholder="email giriniz" name="email">

                </div>

                <div class="password">

                    <input type="password" class="" placeholder="şifre giriniz" name="password">

                </div>

                <div class="buttonn">

                    <button type="submit" class="btnn">Oturum Aç</button>

                </div>

            </form>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
