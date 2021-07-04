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
            <h6 class="m-0 font-weight-bold text-primary">
                <td>
                    <a href="<?= base_url('')?>perguntas/cadastrar/<?= $formulario['idformulario'];?>" class="btn btn-info">
                        Adicionar Pergunta
                    </a>
                </td>
            </h6><br>
              <div class="table-responsive text-center">
                <table class="table table-bordered text-gray-900" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Pergunta</th>
                      <th>Tipo</th>
                      <th>Alternativa(s)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($perguntas as $p){?>
                      <?php if($p ['formulario_idformulario'] == $formulario['idformulario']){?>
                      <tr>
					  <td><?= $p['idpergunta']; ?></td>
                        <td><?= $p['nome']; ?></td>
						<td><?= $p['tipo']; ?></td>
                        <td>
                        <a href="http://localhost/degust/alternativas/pergunta/<?= $p ['idpergunta'] ?>"> 
							  <i class="fas fa-pencil-alt" ></i>
							Add
							</a></td>
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