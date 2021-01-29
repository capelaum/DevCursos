<?php

namespace App\Repositorio;

use App\Uteis\Conexao;

abstract class RepositorioBase 
{
  protected Conexao $conexao;

  public function __construct(Conexao $conexao)
  {
    $this->conexao = $conexao;
  }

  protected function select(string $tabela)
  {
    $sql = "SELECT * FROM $tabela";
    $resultado = $this->conexao->query($sql);

    return $resultado->fetchAll(\PDO::FETCH_ASSOC);
  }
}