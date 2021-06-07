<?php
require 'database.php';
$idAgent = $_GET['id'];
$sql = 'DELETE FROM agent WHERE idAgent=:idAgent';
$statement = $connection->prepare($sql);
if ($statement->execute([':idAgent' => $idAgent])) {
  header("Location: /");
}
?>