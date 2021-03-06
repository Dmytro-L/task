<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/setting.php';

$id = trim(filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT));
$first_name = trim(filter_var($_POST['first_name'], FILTER_SANITIZE_STRING));
$last_name = trim(filter_var($_POST['last_name'], FILTER_SANITIZE_STRING));
$status = trim(filter_var($_POST['status'], FILTER_SANITIZE_NUMBER_INT));
$role = trim(filter_var($_POST['role'], FILTER_SANITIZE_NUMBER_INT));

$sql = 'SELECT * FROM `users` WHERE `id` = :id';
$query = $pdo->prepare($sql);
$query->execute(['id' => $id]);
$user = $query->fetch(PDO::FETCH_OBJ);

$error = [];

if (empty($id)) {
    $error = 'id empty';
} else if (!$user->id == $id) {
    $error = 'This id not property for
    this user';
} else if ($first_name == null || $last_name == null) {
    $error = 'Enter first name or last name';
} else if (strlen($first_name) <= 5) {
    $error = 'Enter the first name must be more than five characters';
} else if (strlen($last_name) <= 5) {
    $error = 'Enter the last name must be more than five characters';
} else if ($role == 0) {
    $error = 'Enter role';
}

if ($error != []) {
    echo $error;
    exit();
}

$sql = 'UPDATE `users` SET `first_name` = :first_name, `last_name` = :last_name, `status` = :status, `role` = :role WHERE `id` =:id';
$query = $pdo->prepare($sql);
$query->execute(['id' => $id, 'first_name' => $first_name, 'last_name' => $last_name, 'status' => $status, 'role' => $role]);
$user = $query->fetch(PDO::FETCH_OBJ);

echo 'UPDATE';