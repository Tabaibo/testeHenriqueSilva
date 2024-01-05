<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Inserir produtos informáticos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css">

    <script type="text/javascript" src="javascript.js"></script>
</head>

<body>
    <h1> Inserir dados</h1>

    <form action="/enviar" method="POST">
        @csrf <!-- {{csrf_field()}}-->
        <br>Código do Produto: <input name="codigo" type="text">
        <br> Nome do Produto: <input name="nome" type="text">
        <br> Categoria: <input name="categoria" type="text">
        <br> Preço Unitário: <input name="preco_unit" type="text">
        <br> Descrição: <input name="descricao" type="text">
        <br>
        <input name="limpar" type="reset" value="Limpar">
        <input name="gravar" type="submit" value="Gravar">
    </form>

</body>

</html>