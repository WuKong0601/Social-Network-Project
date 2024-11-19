<?php
require_once "core/init.php";
if (!loggedIn()) {
    Redirect::to('login');
}

$user_id = $_SESSION['user_id'];
require "shared/header.php";
?>

<?php require_once "shared/global.header.php"; 

?>
<script src="public/js/common.js"></script>