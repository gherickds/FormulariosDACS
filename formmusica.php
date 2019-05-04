<!-- CONEXÃO AO BANCO DE DADOS PELO ARQUIVO CONN.PHP -->
<?php
	include_once("conn.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Adicionar música</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<ul class="nav nav-pills nav-fill">
	      <li class="nav-item">
	      	    <a class="navbar-brand" href="formmusica.php">Adicione suas músicas</a>
	      </li>
	    </ul>
	</nav>
	<br>

	<form method="POST" action="salvamusica.php">
	<div class="card">
		<div class="card-body">
				<label>Nome da música</label>
				<input type="text" class="form-control" name="musica" placeholder="Informe o nome da música">
		</div>
		<div class="card-body">
			<label>Autoria</label>
			<input type="text" class="form-control" name="autoria" placeholder="Informe o nome do autor/banda">
		</div>
		<!-- SELECT EM LOOP, NÃO PARA ATÉ CHEGAR AO FIM DOS REGISTROS -->
		<div class="card-body">
		<label>
		  	Selecione um álbum
		</label>
		<select name="select_album">
			<option>Selecione</option>
			<?php
				$result_albuns = "SELECT * FROM albuns";
				$result_select_albuns = mysqli_query($conn, $result_albuns);
				while($row_albuns = mysqli_fetch_assoc($result_select_albuns)){ ?>
					<option value="<?php echo $row_albuns['id_album']; ?>"><?php echo $row_albuns['nome']; ?></option> <?php
				}
			?>
		</select><br><br>
		</div>
	</div>
		<div class="card-body">
			<input type="submit" name="btnAddMusica" class="btn btn-outline-success" value="Adicionar">
			<a href="musicaslist.php" class="btn btn-outline-danger">Cancelar</a>
		</div>
	</form>

</body>
</html>