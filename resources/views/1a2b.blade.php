<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="container" style="background:black">
        
        <div class="align-items-center p-5">
            <div class="col-8 bg-white mt-5 m-auto " style="height:700px; border-radius:5%;">
                <form class="p-5 row" action="" method="post" >
                    <input id="answer" name="answer" type="hidden" value="{{$answer}}">
                    <input  type="text" style="width:70%" maxlength="4" id="number" name="number">
                    <button class="btn btn-primary"  type="submit">送出</button>
                    <button class="btn btn-warning"  type="reset">重置</button>
                    @csrf
                </form>
                <table class="bg-gray-300 justify-content-center  " style="width:60%; ">
                    <tr class="bg-gray-300 justify-content-center " style="width:60%" >
                        <td >
                            {{$answer}}
                        </td>
                        <td>
                            123
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>
