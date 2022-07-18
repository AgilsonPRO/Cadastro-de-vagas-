

<?php 
require __DIR__.'/vendor/autoload.php';

define ('TITLE','Editar vaga');

use App\Entity\vaga;


if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
   header('location: index.php?status=error2');
   exit;
}

$obvaga = Vaga::getVaga($_GET['id']);

if(!$obvaga instanceof Vaga){
   header('location: index.php?status=error1');
   exit;
}

if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){
   
   $obvaga->titulo = $_POST['titulo'];
   $obvaga->descricao = $_POST['descricao'];
   $obvaga->ativo = $_POST['ativo'];
   $obvaga->atualizar();
  
   var_dump($obVaga);

   header('location: index.php?status=success');
   exit;
}
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';
?>