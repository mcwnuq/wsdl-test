<?php

namespace App\ElektronicznyNadawca;

class getListaZgodEZwrotowResponse
{

    /**
     * @var oczekujeNaZgodeEZwrotType $lista
     */
    protected $lista = null;

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param oczekujeNaZgodeEZwrotType $lista
     * @param errorType $error
     */
    public function __construct($lista, $error)
    {
      $this->lista = $lista;
      $this->error = $error;
    }

    /**
     * @return oczekujeNaZgodeEZwrotType
     */
    public function getLista()
    {
      return $this->lista;
    }

    /**
     * @param oczekujeNaZgodeEZwrotType $lista
     * @return \App\ElektronicznyNadawca\getListaZgodEZwrotowResponse
     */
    public function setLista($lista)
    {
      $this->lista = $lista;
      return $this;
    }

    /**
     * @return errorType
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param errorType $error
     * @return \App\ElektronicznyNadawca\getListaZgodEZwrotowResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
