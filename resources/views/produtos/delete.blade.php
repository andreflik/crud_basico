<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exclusão de Produto</title>
</head>
<body>
    <form action="{{ route('excluir_produto', ['id' => $produto->id]) }}" method="post">
        @csrf
        <label for="">Deseja realmente excluir este produto ?</label> <br />
        <input type="text" name="nome" value="{{$produto->nome}}"> <br />
        <button>Excluir</button>
    </form>
</body>
</html>