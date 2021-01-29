<?php

require_once "vendor/autoload.php";

use App\Repositorio\Curso;
use App\Uteis\Conexao;

try {
  $configBancoDados = require 'config/bd.php';
  $conexao = new Conexao($configBancoDados);

  $cursoRepositorio = new Curso($conexao);
  $cursos = $cursoRepositorio->todos();
} catch (\PDOException $e) {
  echo $e->getMessage();
  exit;
}

require_once "exibicao/principal.php";

