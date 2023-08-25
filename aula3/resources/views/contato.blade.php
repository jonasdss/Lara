<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1> Contatos existentes </h1>
    

        <form method="post" action="/contato">
        {{ csrf_field() }}
            <input type="text" name="txNome" />
            <input type="text" name="txEmail" />
            <input type="text" name="txAssunto" />
            <input type="text" name="txMensagem" />

            <input type="submit" value="Salvar" />
        </form>
    
        
    @foreach($contatos as $c)

        <h1>{{$c -> idContato}}</h1>
        <p>{{$c -> nome}}</p>
        <p>{{$c -> email}}</p>

    @endforeach

</body>
</html>