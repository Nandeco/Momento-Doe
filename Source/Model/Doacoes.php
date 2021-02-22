<?php
namespace Source\Model;

use Source\Database\Connect;

class Doacoes
{
    public $id_doacao;
    public $desc_doacao;
    public $url_foto_doacao;
    public $id_doacao;
    public $id_doacao;
    public $id_doacao;
    public $id_doacao;

    public function buscarDados()
    {
        $query = Connect::getInstance()->query("SELECT * FROM doacao
         ");
        $res = $query->fetchAll();
        return $res;
    }

    public function cadastrarDoacao($desc_doacao, $url_foto_doacao)
    {
        
    }
}