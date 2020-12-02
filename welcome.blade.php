<!DOCTYPE html>
<html>
<head>
    <title>projeto laravel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <title>prejeto laravel</title>
    <hr />
        <form action="/enviar" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="from-group">
        <label for="nome">código do produto</label>
        <input type="text" id="codigo" name="codigo" class="form-control" placeholder="codigo do produto"> 
    </div>
    <div class="container">
        <label for="nome">nome do produto</label>
        <input type="text" id="nome" name="nome" class="form-control" placeholder="nome do produto"> 
    </div>
     <div class="container">
        <label for="nome">categoria</label>
        <input type="text" id="categoria" name="categoria" class="form-control" placeholder="categoria"> 
    </div>
     <div class="container">
        <label for="nome">preço unitario</label>
        <input type="text" id="preço" name="preço" class="form-control" placeholder="preço unitario"> 
    </div> 
    <div class="container">
        <label for="nome">descrição</label>
        <textarea type="text" id="descrição" name="descrição" class="form-control" placeholder="descrição">escreva uma descrição </textarea> 
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
</form>
</div>
</body>
</html> 