<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">

<style>
body{
	background-color: #3498db;
}

.caixa{
	
	width: 400px; 
	padding: 15px; 
	background-color: #00000077; 
	color: white; 
	border-radius: 10px; 
	font-family: 'Comfortaa', cursive;
	
}

</style>

</head>

<body>
<div class="container">

<div class="mx-auto caixa">
<center><h1>Cadastro de Vendas do Seu Zé</h1></center>

<form method="post" action="cadastroProduto.php">

<div class="form-group">
<input class="form-control" name="nomeProduto" type="text" placeholder="Nome do produto" />
</div>

<div class="form-group">
<input class="form-control" name="valor" type="text" placeholder="Valor" />
</div>

<div class="form-group">
<input class="form-control" name="quantidade" type="number" placeholder="Quantidade"/>
</div>

<div class="form-group">
<input type="submit" value="Cadastrar" class="btn btn-primary btn-block"/>
<input type="reset" value="Limpar" class="btn btn-danger btn-block" />
</div>
</div>

</form>
</div>
</body>

</html>