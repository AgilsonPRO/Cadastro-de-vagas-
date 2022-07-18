

<?php 
require __DIR__.'/vendor/autoload.php';


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


if(isset($_POST['deletar'])){
   $obvaga->deletar();

   header('location: index.php?status=success');
   exit;
}
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';
?>