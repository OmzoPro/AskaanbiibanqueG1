<?php
require 'db_delete_agent.php';
$idClient = $_GET['id'];
$sql = 'DELETE FROM client WHERE idClient=:idClient';
$statement = $connection->prepare($sql);
if ($statement->execute([':idClient' => $idClient])) {
  header("location: {$_SERVER['HTTP_REFERER']}");
}
?>