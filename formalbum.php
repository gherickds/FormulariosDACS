<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Criar álbum</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="formalbum.php">Crie seus álbuns</a>
		<ul class="nav nav-pills nav-fill">
	      <li class="nav-item">
	      </li>
	    </ul>
	</nav>
	<br>

	<form method="POST" action="salvaalbum.php">
	<div class="card">
		<div class="card-body">
		<label>Nome do álbum</label>
		<input type="text" class="form-control" name="album" placeholder="Informe o nome do álbum">
		</div>
		<div class="card-body">
		<label>Descrição</label>
		<input type="text" class="form-control" name="desc_album" placeholder="Informe uma descrição para o álbum">
		</div>
	</div>
	<div class="card-body">
		<input type="submit" name="btnAddAlbum" class="btn btn-outline-success" value="Criar álbum">
		<a href="albunslist.php" class="btn btn-outline-danger">Cancelar</a>
	</div>

	</form>

</body>
</html>