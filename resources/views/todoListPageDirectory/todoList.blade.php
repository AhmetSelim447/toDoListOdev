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

            background-color: #7fe0f6;
            padding: 0px;
            margin: 0px;

        }

        .outside{

            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: start;

        }

        .todoList{

            border: 3px solid #CB6363;
            width: 1200px;


        }

        table{

            border-radius: 30px !important;

        }

        .addTask{

            border:2px solid hotpink;
            color: white;
            width: 200px;
            text-align: center;
            padding: 20px;
            background-color: hotpink;
            margin:30px 60px;
            border-radius: 30px;

        }

        .addTask a{

            text-decoration: none;
            font-size: 20px;
            color: white;
            font-weight: bold;

        }

        .addTask a:hover{

            color: black;

        }


    </style>


</head>
<body>



    <div class="d-flex justify-content-center align-items-center">


        <div class="addTask w-20">

            <a href="{{route("task.taskGet")}}">Görev Ekle</a>

        </div>


        <div class="container outside w-70 pt-lg-5">


            <div class="todoList">

                <table class="table w-100">

                    <thead>

                        <tr>

                            <th>Title</th>
                            <th>Content</th>
                            <th>Status</th>
                            <th>Deadline</th>
                            <th>Remove</th>


                        </tr>

                    </thead>

                    <tbody>



                                @foreach($tasks as $datum)

                                    <tr>
                                        <td>{{$datum->title}}</td>
                                        <td>{{$datum->content}}</td>
                                        <td>{{$datum->status}}</td>
                                        <td>{{$datum->deadline}}</td>
                                        <td><a class="btn btn-success" href="{{route("task.remove",$datum->id)}}">Sil</a></td>
                                    </tr>

                                @endforeach




                    </tbody>


                </table>

            </div>
        </div>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>
