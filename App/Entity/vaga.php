<?php
namespace App\Entity;
use App\db\database;
use \PDO;

class Vaga{

    public $id;
    public $titulo;
    public $descricao;
    public $ativo;
    public $data;

    //função para cadastrar uma nova vaga no banco
    public function cadastrar(){
        $this->data = date('Y-m-d H:i:s');
        $obDatabase = new Database('vagas');
        $this->id = $obDatabase->insert([
            'titulo' =>$this->titulo,
            'descricao'=>$this->descricao,
            'ativo'  =>$this->ativo,
            'data' =>$this->data
        ]);
            return true;
    }
    //função para atualizar os dados no banco
    public function atualizar(){
        return(new Database('vagas'))->update('id =' .$this->id,['titulo' =>$this->titulo,
        'descricao'=>$this->descricao,
        'ativo'  =>$this->ativo,
        'data' =>$this->data
    ]);  
    }
    //função para excluir os dados no banco
    public static function getVagas($where = null,$order = null,$limit = null){
        return(new Database('vagas'))->select($where,$order,$limit)
        ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public static function getVaga($id){
        return(new Database('vagas'))->select(' id='.$id)
        ->fetchObject(self::class);
    }
    //função de excluir dados no banco
    public function deletar(){
        return(new Database('vagas'))->delete('id = '.$this->id);
    }
}
?>