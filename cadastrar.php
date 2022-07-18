

<?php 
require __DIR__.'/vendor/autoload.php';

define ('TITLE','Cadastrar vaga');

use App\Entity\vaga;

if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){
   $obvaga = new Vaga;
   $obvaga->titulo = $_POST['titulo'];
   $obvaga->descricao = $_POST['descricao'];
   $obvaga->ativo = $_POST['ativo'];
   $obvaga->cadastrar();

   header('location: index.php?status=success');
   exit;
}
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';
?>