<?php
require 'db_delete_agent.php';
$idAgent = $_GET['id'];
$sql = 'DELETE FROM agence WHERE idAgence=:idAgent';
$statement = $connection->prepare($sql);
if ($statement->execute([':idAgent' => $idAgent])) {
  header("location: {$_SERVER['HTTP_REFERER']}");
}
?>