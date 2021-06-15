<?php
require 'db_delete_agent.php';
$idClient = $_GET['id'];
$sql = 'SELECT * FROM client WHERE idClient=:idClient';
$statement = $connection->prepare($sql);
$statement->execute([':idClient' => $idClient ]);
$person = $statement->fetch(PDO::FETCH_OBJ);

