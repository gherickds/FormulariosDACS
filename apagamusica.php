<?php

	include_once('conn.php');

	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$result = "DELETE FROM musicas WHERE id_musica = '$id'";
	$result_user = mysqli_query($conn, $result);
if(mysqli_affected_rows($conn)){
	header("Location: musicaslist.php");
}
?>