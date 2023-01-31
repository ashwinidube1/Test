<?php $firstname = isset($_POST['firstname'] : $_POST['firstname'] : null; $lastname = isset($_POST['lastname'] : $_POST['lastname'] : null; $email = isset($_POST['email'] : $_POST['email'] : null;
$db = new mysqli("localhost", "username", "password", "database"); if ($db->errno) die("Error opening database: " . $db->error());
$query = 'INSERT INTO users (firstname, lastname, email) VALUES (?, ?, ?)'; $result = $db->prepare($query); $result->bind_param('sss', $firstname, $lastname, $email); $result->execute(); free($result); ?>
