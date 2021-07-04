<?php $this->load->view('partes/cabecalho-painel-colaborador'); ?>
<?php $this->load->view('partes/nav-painel-colaborador'); ?>

 
  <!-- Page Content -->
  <div class="container"><br><br><br>
    
    <div class="row">
      <div class="col-md-12 py-6 mb-8">
        <h2>Pesquisas disponiveis</h2>
        <hr>
        <p>Essas são todas as pesquisas disponiveis para você responder. Faça um estudante feliz!</p>
      </div>
    </div>

    <div class="row">
    <?php foreach($pesquisas as $p){?>
      <div class="col-md-4 mb-5">
        <div class="card h-100">
        <a target="_blank" href="<?= base_url()?>formularios/form/<?=$p['idformulario'];?>"><img class="card-img-top" src='<?php echo base_url('')?>assets/qrcodes/<?= $p['qrcode']?>' alt=""></a>
          <div class="card-body">
            <h4 class="card-title"><?= $p['titulo']; ?></h4>
            <p class="card-text"><?= $p['descricao']; ?>.</p>
          </div>
          <div class="card-footer">
            <a href="<?= base_url()?>formularios/form/<?=$p['idformulario'];?>" class="btn btn-success">Participar</a>
          </div>
        </div>
      </div>
      
    <?php }?>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

<?php $this->load->view('partes/rodape-painel-colaborador'); ?>



