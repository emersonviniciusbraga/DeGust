<?php $this->load->view('partes/cabecalho-painel-colaborador'); ?>
<?php $this->load->view('partes/nav-painel-colaborador'); ?>

<div class="container">
<div class="ecommerce-widget"><br><br>
    <h3 class="display-7 text-center font-weight-bold"><?= $form['titulo']; ?></h3>
    <form name="<?= $form['nome'];?>" method="<?= $form['metodo'];?>" action="<?= base_url()?><?= $form['acao'];?><?= $form['idformulario'];?>">
    <p class="lead text-center text-muted mb-4 mb-lg-8"><?= $form['descricao']; ?></p>
    <div class="card border shadow p-3 mb-5 bg-white rounded">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card-body">
                    <p class="lead text-left text-muted mb-4 mb-lg-8">Preencha todos os campos abaixo.</p>
                        <div class="form-group">
                        <?php foreach($perguntas as $p): ?>
                            <div class="display-5 card-body border-top font-weight-bold">
                                <label for="pergunta_<?= $p['idpergunta'];?>"><?=$p['nome'];?></label>
                            </div>
                            <?php
                                $alts = $alternativas[$p['idpergunta']];
                                foreach ($alts as $a): ?>
                                    <?php 
                                        if($p['tipo'] == 'radio' ||
                                            $p['tipo'] == 'checkbox'):
                                    ?>
                                    <p class="form-control international-inputmask"><input 
                                            type="<?= $a['tipo'];?>"
                                            name="pergunta_<?= $p['idpergunta'];?>"
                                            placeholder="Escreva sua resposta aqui..." 
                                            value="<?= $a['valor'];?>"> <?= $a['texto'];?>
                                    </p>

                                    <?php else: ?>
                                    <input class="form-control international-inputmask"
                                            type="<?= $a['tipo'];?>"
                                            name="pergunta_<?= $p['idpergunta'];?>" 
                                            value="<?= $a['valor'];?>">
                                    <br>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                        <?php endforeach; ?>

                        <div class="card-body border-top">                                      
                            <div class="input-group mb-3">  
                                <input class=" btn btn-outline-success btn-block" type="submit" value="Enviar" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $this->load->view('partes/rodape-painel-colaborador'); ?>