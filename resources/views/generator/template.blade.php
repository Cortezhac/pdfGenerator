<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .w-full{
            width: 100%;
        }

        .container{
            width: 90%;
            margin: 0 auto;
        }

        .header {
            padding: 10px;
        }

        table {
            border-spacing: 0px;
        }

        thead {
            background-color: #b1afaf;
            color: white;
            border-style: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div>
            <h3>Lista usuarios</h3>
        </div>
        <div>
            <table class="w-full">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Entrada</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ( $info as $f )
                        <tr>
                            <td>{{$f->id}}</td>
                            <td>{{$f->name}}</td>
                            <td>{{$f->email}}</td>
                            <td>{{$f->created_at}}</td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>