<style type="text/css">
	.alert{
		margin: 0;
		padding: 0;
	}
	.alert p{
		margin: 5px 0;
		padding: 0;
	}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-left">
				Cadastro de Produto
			</h3>

			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><?= anchor('/', 'Home', array()); ?></li>
					<li class="breadcrumb-item"><?= anchor('produto', 'Produtos', array()); ?></li>
					<li class="breadcrumb-item active" aria-current="page">Cadastro</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-9">
			<!-- <form role="form"> -->
			<?= form_open('produto/salvar') ?>
				<div class="form-group row text-left">
					 
					<label for="descricao" class="col-sm-12 col-form-label">
						Descrição
					</label>
					<div class="col-sm-8">
						<input type="text" name="descricao" class="form-control" id="descricao" value="<?= set_value('descricao') ? : (isset($descricao) ? $descricao : '') ?>" autofocus='true' />
					</div>
					<div class="col-sm-4 alert" role="alert"><?php echo form_error('descricao') ?  : ''; ?></div>
				</div>
				<div class="form-group row text-left">
					 
					<label for="detalhamento" class="col-sm-12 col-form-label">
						Detalhamento
					</label>
					<div class="col-sm-8">
						<input type="text" name="detalhamento" class="form-control" id="detalhamento" value="<?= set_value('detalhamento') ? : (isset($detalhamento) ? $detalhamento : '') ?>" autofocus='true' />
					</div>
					<div class="col-sm-4 alert" role="alert"><?php echo form_error('detalhamento') ?  : ''; ?></div>
				</div>
				<div class="form-group row text-left">
					 
					<label for="preco_vista" class="col-sm-12 col-form-label">
						Preço à vista
					</label>
					<div class="col-sm-8">
						<input type="text" name="preco_vista" class="form-control text-right" id="preco_vista" value="<?= set_value('preco_vista') ? : (isset($preco_vista) ? $preco_vista : '') ?>" autofocus='true' />
					</div>
					<div class="col-sm-4 alert" role="alert"><?php echo form_error('preco_vista') ?  : ''; ?></div>
				</div>
				<div class="form-group row text-left">
					 
					<label for="preco_prazo" class="col-sm-12 col-form-label">
						Preço à prazo
					</label>
					<div class="col-sm-8">
						<input type="text" name="preco_prazo" class="form-control text-right" id="preco_prazo" value="<?= set_value('preco_prazo') ? : (isset($preco_prazo) ? $preco_prazo : '') ?>" autofocus='true' />
					</div>
					<div class="col-sm-4 alert" role="alert"><?php echo form_error('preco_prazo') ?  : ''; ?></div>
				</div>
				<div class="form-group row text-left">
					 
					<label for="codigo_barras" class="col-sm-12 col-form-label">
						Código de barra
					</label>
					<div class="col-sm-8">
						<input type="text" name="codigo_barras" class="form-control text-center" id="codigo_barras" value="<?= set_value('codigo_barras') ? : (isset($codigo_barras) ? $codigo_barras : '') ?>" autofocus='true' />
					</div>
					<div class="col-sm-4 alert" role="alert"><?php echo form_error('codigo_barras') ?  : ''; ?></div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<input type='hidden' name="id" value="<?= set_value('id') ? : (isset($id) ? $id : ''); ?>">
						<input type='hidden' name="usuario_id" value="<?= $usuario_id ?>">
					</div>
					<div class="col-sm-8 text-right">
						<button type="submit" class="btn btn-primary">
							Submit
						</button>
					</div>
				</div>
			<!-- </form> -->
			<?= form_close(); ?>
		</div>
	</div>
</div>
