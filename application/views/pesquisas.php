<?php $this->load->view('partes/cabecalho-painel-pesquisador'); ?>
<?php $this->load->view('partes/nav-painel-pesquisador'); ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Listagem de pesquisas</h1>
          <br>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive text-center">
                <table class="table table-bordered text-gray-900" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Título</th>
                      <th>Descrição</th>
                      <th>QR code</th>
                      <th>Perguntas</th>
					            <th>Editar</th>
                      <!-- <th>Excluir</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($pesquisas as $p){?>
                      <?php if($p ['usuario_pesquisador_matricula'] == $_SESSION['logged_user']['matricula']){?>
                      <tr>
					  <td><?= $p['idformulario']; ?></td>
            <td><?= $p['nome']; ?></td>
						<td><?= $p['titulo']; ?></td>
						<td><?= $p['descricao']; ?></td>
            <td><a target="_blank" href="<?php echo base_url();?>pesquisas/mostrarqrcode/<?=$p['qrcode'];?>"><img src='<?php echo base_url('')?>assets/qrcodes/<?= $p['qrcode']?>'></a></td>
            <td>
              <a href="<?php base_url()?>perguntas/form/<?= $p ['idformulario'] ?>"> 
							  <i class="fas fa-pencil-alt" ></i>
							Add 
							</a>
            </td>
            <td>
							<a href="<?php base_url()?>pesquisas/edit/<?= $p ['idformulario'] ?>"> 
							<i class="fas fa-pencil-alt" ></i>
							Editar 
							</a>
            </td>
            <!-- <td>
              <a href="javascript:goDelete(/?= $p ['idformulario'] ?>)">
                <i class="fas fa-trash-alt"></i>Deletar
                <script>
                  function goDelete($idpesquisas){
                    var myUrl = '</?php base_url()?>pesquisas/delete/</?= $p ['idformulario'] ?>'
                      if(confirm('Deseja realmente excluir esse registro?')){
                        window.location.href = '</?php base_url()?>pesquisas/delete/' + $idpesquisas;
                      }else{
                        
                        alert('Registro não alterado!');
                      }
                  }
                </script>
              </a>
            </td> -->
                        

                      </tr>
                      <?php }?>
                    <?php }?>
                  </tbody>
                </table>

                
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



<?php $this->load->view('partes/rodape-painel-pesquisador'); ?>
