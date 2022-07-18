

<main>
    <section>
      <a href="index.php">
        <button class="btn btn-success">Voltar</button>
      </a>  
    </section>

    <h2 class="mt-3">Excluir vaga</h2>
    <form method="post">
        <div class="form-group">
           <p>Deseja excluir permanentemente a vaga ?</p>
           <strong><?=$obvaga->titulo?></strong>
        </div>

    
        <div class="form-group">
           <a href="index.php"><button type="button" class="btn btn-success">Cancelar</button></a> 
           <button type="submit" class="btn btn-danger" name="deletar">Deletar</button>
        </div>
    </form>
</main>