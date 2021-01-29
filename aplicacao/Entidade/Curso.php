<?php

namespace App\Entidade;

class Curso 
{
    private string $nome;
    private string $versaoFerramenta;
    private int $cargaHoraria;
    private bool $status;

    /**
     *  Array to array of objects
     */ 
    static function fromArray(array $dados)
    {
        $curso = new Curso();
        $curso->nome = $dados['nome'];
        $curso->versaoFerramenta = $dados['versao_ferramenta'];
        $curso->cargaHoraria = $dados['carga_horaria'];
        $curso->status = $dados['status'];

        return $curso;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;
        return;
    }

    /**
     * Get the value of versaoFerramenta
     */ 
    public function getVersaoFerramenta()
    {
        return $this->versaoFerramenta;
    }

    /**
     * Set the value of versaoFerramenta
     *
     * @return  self
     */ 
    public function setVersaoFerramenta($versaoFerramenta)
    {
        $this->versaoFerramenta = $versaoFerramenta;
        return $this;
    }

    /**
     * Get the value of cargaHoraria
     */ 
    public function getCargaHoraria()
    {
        return $this->cargaHoraria;
    }

    /**
     * Set the value of cargaHoraria
     *
     * @return  self
     */ 
    public function setCargaHoraria($cargaHoraria)
    {
        $this->cargaHoraria = $cargaHoraria;
        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
}