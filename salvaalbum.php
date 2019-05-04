<?php

include_once("conn.php");

$nome = filter_input(INPUT_POST, 'album', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'desc_album', FILTER_SANITIZE_STRING);

$result = "INSERT INTO albuns (nome, descricao) VALUES ('$nome', '$descricao')";
$result_user = mysqli_query($conn, $result);

$newURL = "albunslist.php"; 
    header('Location: '.$newURL);

?>