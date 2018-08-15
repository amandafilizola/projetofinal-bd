<?php
session_start();
session_destroy();
echo "<script> alert('Voce foi deslogado com sucesso');
window.location.href='index.php';</script>";
?>