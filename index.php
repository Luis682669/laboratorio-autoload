<?php
require_once __DIR__ . '/vendor/autoload.php';

use Luis\LaboratorioAutoload\Usuario;

$user = new Usuario("Luis");
echo $user->saludar();
