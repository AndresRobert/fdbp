<?php
$path = $_SERVER['SERVER_NAME'];
$ver = '?v=1.2.0';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Control de Contratos</title>
<link href="https://<?= $path ?>/src/invoice.css<?= $ver ?>" rel="stylesheet">
<script src="https://<?= $path ?>/src/invoice.js<?= $ver ?>"></script>
<script> Auth.checkStatus() </script>