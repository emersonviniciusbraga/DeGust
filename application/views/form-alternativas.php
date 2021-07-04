<?php $this->load->view('partes/cabecalho-painel-pesquisador'); ?>
<?php $this->load->view('partes/nav-painel-pesquisador'); ?>


<div class="row">
	<div class="container ml-5 mt-3">
		<?php if(isset($alternativas)): ?>
        <div class="text-left">
			<h1 class="h3 mb-2 text-gray-900"><?php echo $nome ?></h1>
		</div>
		<form action="<?= base_url('')?>#" method="post" class="user">
		<?php else :?>
		<div class="text-left">
			<h1 class="h3 mb-2 text-gray-900"><?php echo $nome ?></h1>
		</div><br>
		<form action="<?= base_url('') ?>alternativas/store" method="post" class="user">
		<?php endif ;?>
			<div class="form-row">
				<div class="col">
					<label for="texto">Texto</label>
					<input class="form-control" type="text" name="texto" id="texto" placeholder="Escreva o que vai ser exibido" required value="<?= isset($alternativas) ? $alternativas['texto'] : ''?>">
				</div>
                <div class="col">
					<label for="valor">Valor</label>
					<input class="form-control" type="text" name="valor" id="valor" placeholder="Escreva a resposta definida, caso tenha" required value="<?= isset($alternativas) ? $alternativas['valor'] : ''?>">
				</div>
				<div class="col">
					<label for="tipo">Tipo</label>
					<input class="form-control" type="text" name="tipo" id="tipo" placeholder="text (texto) ou radio (marcar)" required value="<?= isset($alternativas) ? $alternativas['tipo'] : ''?>">
				</div>

				<div class="col">
					<label for="pergunta_idpergunta">Pergunta</label>
					<input class="form-control" type="text" name="pergunta_idpergunta" id="pergunta_idpergunta" placeholder="text (texto) ou radio (marcar)" required value="<?= $pergunta['idpergunta']; ?>">
				</div>
				
			</div><br>	
			<div class="form-group">
				<button type="fas fa-check" class="btn btn-primary"> <i class="fas fa-check"></i> Salvar</button>
				<a href="<?= base_url('') ?>?/pesquisas/index" class="btn btn-danger btn-xs"> <i class="fas fa-times"></i> Cancelar</a>
			</div>
			
		</form>
	</div>
</div>
</div>
      



<?php $this->load->view('partes/rodape-painel-pesquisador'); ?>