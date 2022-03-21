<!-- php -S localhost:8000. -->
<!DOCTYPE html>
<html lang="en">
<head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                 <link rel="stylesheet" href="style.css">
</head>
<body> 
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="textoNavbar">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="cadastrar.php">Cadastrar</a>
    </li>
    <li class="nav-item">

           

     <div class="container">
			<br />
			<br />
			<br />
			<h2 align="center">Table</h2><br />
			<div class="form-group">
				<div class="input-group">
                <form action="insert.php" method="POST" enctype="multipart/form-data">
             <input class="form-control form-control-lg"  name="descricao" type="text" id="" placeholder="Descrição" >
             <input class="form-control form-control-lg" name="solucao" type="text"  id="" placeholder="Solução">
             <label for="">Image:</label>
             <input type="file" name="image" id="1" > <br>
             <input type="submit" name="upload" class = 'btn btn-danger m-2' value="Salvar"> <br> <br>
				</div>
			</div>

     </html>