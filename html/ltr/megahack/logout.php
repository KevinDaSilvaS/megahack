<?php
session_start();
session_destroy();
header('Location: solicitacao.php');
exit();
?>