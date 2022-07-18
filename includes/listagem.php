


<?php

$mensagem ='';
if(isset($_GET['status'])){
  switch ($_GET['status']){
    case 'success':
      $mensagem = '<div class="alert alert-success">Ação executada</div>';
      break;  
    case 'error';
    $mensagem ='<div class="alert alert-danger">Ação não executada</div>' ;
    break; 
  }
}

 $result ='';
 foreach($vagas as $vaga){
  $result .='<tr>
            <td>'.$vaga->id.'</td>
            <td>'.$vaga->titulo.'</td>
            <td>'.$vaga->descricao.'</td>
            <td>'.($vaga->ativo == 's' ? 'ATIVO' : 'INATIVO').'</td>
            <td>'.date('d/m/Y à\s H:i:s', strtotime($vaga->data)).'</td>
            <td>
              <a href="editar.php?id='.$vaga->id.'">
              <button type="button" class="btn btn-primary">ALTERAR</button><a/>
              <a href="excluir.php?id='.$vaga->id.'">
              <button type="button" class="btn btn-danger">DELETAR</button><a/>
            </td>
            </tr>';
 }
 $result =strlen($result) ? $result :'<tr>
      <td colspan="6" class="text-center">
      Nenhuma vaga cadastrada</td>
 </tr>';
 
?>
<main>

<?=$mensagem?>
    <section>
      <a href="cadastrar.php">
        <button class="btn btn-success"> Nova Vaga</button>
      </a>  
    </section>

    <section>
      <table class="table bg-light mt-3">
        <thead>
          <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Data</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?=$result; ?>
        </tbody>
      </table>
    </section>
</main>