<?php
require 'db_delete_agent.php';
$idAgent = $_GET['id'];
$sql = 'SELECT * FROM agent WHERE idAgent=:idAgent';
$statement = $connection->prepare($sql);
$statement->execute([':idAgent' => $idAgent ]);
$person = $statement->fetch(PDO::FETCH_OBJ);

