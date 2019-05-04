<?php

include_once("conn.php");

$musica = filter_input(INPUT_POST, 'musica', FILTER_SANITIZE_STRING);
$autoria = filter_input(INPUT_POST, 'autoria', FILTER_SANITIZE_STRING);
$album = filter_input(INPUT_POST, 'select_album');
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

	$result = "INSERT INTO musicas (id_album, nome_musica, autoria) VALUES ('$album','$musica', '$autoria')";
	$result_user = mysqli_query($conn, $result);


$newURL = "musicaslist.php"; 
    header('Location: '.$newURL);


if(mysqli_affected_rows($conn)){
	header("Location: musicaslist.php");
}
?>