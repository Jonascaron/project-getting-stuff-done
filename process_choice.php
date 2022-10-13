<?php
$id = $_POST['id'];
switch ($_POST['select']) {
    case 'Projects':
        header("location: projects_overzetten.php");
        break;
    case 'Waiting_For':
        header("location: waiting_for_overzetten.php");
        break;
    default:
        header("location: inbox.php");
        break;
}