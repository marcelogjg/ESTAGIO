<html>

<body>
    <h1>EDITAR CLIENTE</h1>
    <form method="post" action="{{ "/admin/client/{$client->id}/editar" }}">
        <!-- <input type="hidden" name="_token" value="$crsfToken" -->
        {!! csrf_field() !!}
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{$client->name}}">

        <br><br><br>

        <label for="email">Email: </label>
        <input type="text" name="email" id="email" value="{{$client->email}}"> Email: </input>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>