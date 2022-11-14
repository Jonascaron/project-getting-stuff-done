<?php
$id = $_POST['id'];
switch ($_POST['select']) {
    case 'Projects':
        require("all_projects_overzetten.php");
        break;
    case 'Waiting_For':
        require("waiting_for_overzetten.php");
        break;
}