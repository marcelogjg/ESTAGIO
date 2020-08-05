<html>

<head>
    <style>
        table {
            border: 1px solid #606060;
            border-spacing: 0px;
            margin-left: auto;
            margin-right: auto;
        }

        th {
            border: 1px solid #606060;
            padding: 10px;
        }
    </style>
</head>

<body>
<a href="/admin/client/form-cadastrar">CADASTRAR</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        @foreach ($clients as $client)
        <tbody>
            <tr>
                <td>
                    {{$client->id}}
                    {{$client->name}}
                    {{$client->email}}
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</body>

</html>