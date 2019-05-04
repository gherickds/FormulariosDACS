<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Home</title>

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="albunslist.php">Álbuns</a>
    	<ul class="nav nav-pills nav-fill">
          <li class="nav-item">
            <a class="nav-link active" href="musicaslist.php">Voltar para suas músicas</a>
          </li>
        </ul>
	</nav>


    <?php

    include_once('conn.php');
        //$conn = mysqli_connect("localhost","bob","bob","dacsdata"); 
        $query = "SELECT * FROM albuns";
        $result = mysqli_query($conn,$query);
    ?>

    <div class="card">
        <div class="card-body">
            <a href="formalbum.php" class="btn btn-outline-success btn-lg">Criar álbum</a>
        </div>
        <div class="card text-center">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Álbum</th>
                        <th scope="col">Descrição</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = $result->fetch_row()){
                    ?>
	                    <tr>
	                        <td><?=$row[0]?></td>
	                        <td><?=$row[1]?></td>
	                        <td><?=$row[2]?></td>
	                        <td><!--<a href="formclientes.php?id=<?=$row[0]?>"  class="btn btn-primary">Alterar</a> -->
	                            <a href="apagaalbum.php?id=<?=$row[0]?>" class="btn btn-outline-danger">X</a></td>

	                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
	
    <!-- BIBLIOTECAS BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>