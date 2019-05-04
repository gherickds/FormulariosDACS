<?php
SESSION_START();
	include_once('conn.php');

	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$result = "DELETE FROM albuns WHERE id_album = '$id'";
	$result_user = mysqli_query($conn, $result);

if(mysqli_affected_rows($conn)){
	header("Location: albunslist.php");
}
?>