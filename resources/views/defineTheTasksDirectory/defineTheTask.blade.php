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

            background-color: yellow;

        }

        .outside{

            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .getTask{

            border: 2px solid #007bff;

        }

        .getTask form div{

            padding: 20px;

        }

        .getTask form div input{

            width: 300px;
            padding: 15px;
            border-radius: 30px;

        }

        .button{

            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;


        }

        .btn{

            border:2px solid black !important;
            border-radius: 20px;
            background-color: #03b0d4;
            border: none!important;
            background-color: #5f61e6 !important;

        }

        .textarea{

            resize:none;

        }

        .btn:hover{

            color: red;

        }

    </style>

</head>
<body>

<div class="container outside">

    <div class="getTask">

        <form action="{{route("task.taskPost")}}" method="post">

            @csrf

            <div class="title">

                <input type="text" name="title" class="form-control" placeholder="Görev başlığı giriniz">

            </div>

            <div class="content">

                <textarea name="contentt" placeholder="Görev içeriği giriniz" class="form-control textarea" id="content" cols="36" rows="5"></textarea>

            </div>

            <div class="status">

                <input type="number" name="status" class="form-control" placeholder="Lütfen öncelik belirtin" min="0" max="3">

            </div>

            <div class="deadline">

                <input type="date" name="deadline" class="form-control">

            </div>

            <div class="category">

                <select class="form-control" name = "select">

                    @foreach($categories as $category )

                        <option value="{{$category->id}}" >{{$category->name}}</option>

                    @endforeach

                </select>

            </div>

            <div class="button">

                <button type="submit" class="btn">Kaydet</button>

            </div>

        </form>

        <div class="btn btn-success w-100 d-flex justify-content-center align-items-center">

            <a class="text-white" href="{{route("task.todoList")}}">Liste</a>

        </div>


    </div>


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>


