

<?php 
require __DIR__.'/vendor/autoload.php';

use \App\Entity\vaga;

$vagas = Vaga::getVagas();

// chamando os os arquivos que compoem a pagina
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';
?>