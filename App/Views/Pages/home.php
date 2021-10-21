<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 my-5">
				<div class="page-header">
					<h3>Cadastrar Cliente.</h3>
				</div>
				<div id="result">
					<!--html a ser requisitado(ajax)-->
				</div>
				<div class="card my-3 shadow-sm">
					<div class="card-header d-flex justify-content-between">
						<span class="text-dark d-flex align-self-center">Formulário de Cadastro de Cliente</span>
						<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Info">Informações</button>
					</div>
					<div class="card-body">
						<div class="card-text">
							<form id="formCadastro" class="row g-3" method="POST">
								<div class="col-md-6">
									<label for="nome" class="form-label">Nome</label>
									<input type="text" name="nome" class="form-control" autocomplete="off" autofocus placeholder="Nome" id="nome"/>
								</div>
								<div class="col-md-6">
									<label for="sobrenome" class="form-label">Sobrenome</label>
									<input type="text" name="sobrenome" class="form-control" autocomplete="off" placeholder="Sobrenome" id="sobrenome"/>
								</div>
								<div class="col-md-6">
									<label for="email" class="form-label">E-Mail</label>
									<input type="email" name="email" class="form-control" autocomplete="off" placeholder="exemplo@hotmail.com" id="email"/>
								</div>
								<div class="col-md-3">
									<label for="telefone" class="form-label">Telefone</label>
									<input type="tel" name="telefone" class="form-control" autocomplete="off" placeholder="(00) 0000-0000" id="telefone"/>
								</div>
								<div class="col-md-3">
									<label for="estado" class="form-label">Estado(UF)</label>
									<select name="estado" class="form-control" id="estado" onchange="getEstado(this)">
										<option value="" selected>--SELECIONE--</option>
										<?php foreach($estados as $estado): ?>
										<option value="<?=$estado["id"];?>"><?=$estado["estado"];?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="col-md-12">
									<label for="cidade" class="form-label">Cidade</label>
									<select name="cidade" class="form-control" id="cidade">
										<option value="" selected>--SELECIONE--</option>
										<!--html dinâmico-->
									</select>
								</div>
								<div class="col-md-4">
									<button type="submit" class="btn btn-success btn-md">Cadastrar</button>
									<button type="reset" class="btn btn-danger btn-md">Cancelar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Modal Informações -->
<div class="modal fade" id="Info" tabindex="-1" role="dialog" aria-label="close">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Informações</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<span class="text-dark">
					Preencha os campos abaixo perante o formulário corretamente realizando o cadastro do cliente.
				</span>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Fechar</button>
			</div>
		</div>
	</div>
</div>
<!-- Fim -->