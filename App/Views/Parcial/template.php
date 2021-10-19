<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="description" content="Cadastro de Clientes"/>
	<meta name="author" content="Roger Panosso"/>
	<title>Cadastro de Clientes</title>
	<link rel="stylesheet" type="text/css" href="<?=BASE_URL;?>Public/Bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?=BASE_URL;?>Public/Bootstrap/css/bootstrap-reboot.min.css"/>
</head>
<body>
	<article>
		<header>
			
		</header>
		<!--view(dinâmica) perante template -->
		<?=$this->loadViewInTemplate($nomeView, $dados);?>
		<footer>
			
		</footer>
	</article>
	<script type="text/javascript">const base_url = "<?=BASE_URL;?>";</script>
	<script src="<?=BASE_URL;?>Public/jQuery/jquery.min.js"></script>
	<script src="<?=BASE_URL;?>Public/Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>