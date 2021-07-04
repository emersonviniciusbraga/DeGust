<?php $this->load->view('partes/cabecalho-painel-pesquisador'); ?>
<?php $this->load->view('partes/nav-painel-pesquisador'); ?>


<div class="row">
	<div class="container ml-5 mt-3">
		<?php if(isset($pesquisas)): ?>
		<div class="text-left">
			<h1 class="h3 mb-2 text-gray-900"><?php echo $nome ?></h1>
		</div>
		<form action="<?= base_url('')?>pesquisas/update/<?= $pesquisas['idformulario']?>" method="post" class="user">
		<?php else :?>
		<div class="text-left">
			<h1 class="h3 mb-2 text-gray-900"><?php echo $nome ?></h1>
		</div>
		<form action="<?= base_url('') ?>pesquisas/store" method="post" class="user">
		<?php endif ;?>
			<div class="form-row">
				<div class="col">
					<label for="nome">Nome</label>
					<input class="form-control" type="text" name="nome" id="nome" placeholder="Nome" required value="<?= isset($pesquisas) ? $pesquisas['nome'] : ''?>">
				</div>
				<div class="col">
					<label for="titulo">Título</label>
					<input class="form-control" type="text" name="titulo" id="titulo" placeholder="Titulo" required value="<?= isset($pesquisas) ? $pesquisas['titulo'] : ''?>">
				</div>
				<div class="col">
					<label for="descricao">Descrição</label>
					<input class="form-control" type="text" name="descricao" id="descricao" placeholder="Descrição" required value="<?= isset($pesquisas) ? $pesquisas['descricao'] : ''?>">
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

