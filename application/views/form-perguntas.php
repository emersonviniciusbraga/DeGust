<?php $this->load->view('partes/cabecalho-painel-pesquisador'); ?>
<?php $this->load->view('partes/nav-painel-pesquisador'); ?>


<div class="row">
	<div class="container ml-5 mt-3">
		<?php if(isset($perguntas)): ?>
		<div class="text-left">
			<h1 class="h3 mb-2 text-gray-900"><?php echo $nome ?></h1>
		</div>
		<form action="<?= base_url('')?>pesquisas/update/<?= $perguntas['idpergunta']?>" method="post" class="user">
		<?php else :?>
		<div class="text-left">
			<h1 class="h3 mb-2 text-gray-900"><?php echo $nome ?></h1>
		</div><br>
		<form action="<?= base_url('') ?>perguntas/store" method="post" class="user">
		<?php endif ;?>
			<div class="form-row">
				<div class="col">
					<label for="nome">Pergunta</label>
					<input class="form-control" type="text" name="nome" id="nome" placeholder="Enuciado" required value="<?= isset($perguntas) ? $perguntas['nome'] : ''?>">
				</div>
				<div class="col">
					<label for="tipo">Tipo</label>
					<input class="form-control" type="text" name="tipo" id="tipo" placeholder="text (texto) ou radio (marcar)" required value="<?= isset($perguntas) ? $perguntas['tipo'] : ''?>">
				</div>
				<div class="col">
					<label for="formulario_idformulario">Formulário</label>
					<input class="form-control" type="text" name="formulario_idformulario" id="formulario_idformulario" placeholder="text (texto) ou radio (marcar)" required value="<?= $formulario['idformulario'];?>">
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