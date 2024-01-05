<!DOCTYPE html>
<html>
<head>
    <title>Lista Teste Henrique Silva</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <h1>Lista de Produtos</h1>
    
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome do Produto</th>
                <th>Categoria</th>
                <th>Preço Unitário</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produto as $row)
            <tr>
                <th scope="row">{{$row->codigo}}</th>
                <td>{{$row->nome}}</td>
                <td>{{$row->categoria}}</td>
                <td>{{$row->preco_unit}}</td>
                <td>{{$row->descricao}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>