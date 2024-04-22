<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>


        body{

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

        }

        .addTask{

            border:2px solid hotpink;
            color: white;
            width: 200px;
            text-align: center;
            padding: 20px;
            background-color: hotpink;
            margin:30px 60px;

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

<div class="addTask">

    <a href="{{route("task.taskGet")}}">Görev Ekle</a>

</div>



<div class="container outside">

    <div class="todoList">

        <table class="table">

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

{{--                <tr>--}}

{{--                    @foreach($data as $datum)--}}

{{--                        <td>$datum</td>--}}

{{--                    @endforeach--}}

{{--                        <td><a href="{{route("task.remove",$data->id)}}">Sil</a></td>--}}


{{--                </tr>--}}


            </tbody>


        </table>


    </div>


</div>


</body>
</html>
