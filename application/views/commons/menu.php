<?php	if($this->router->class()	==	'Institucional'	&&	$this->router->method()	==	'index'){?>
<ul	class="nav	masthead-nav">
<?php	}	else	{?>
<ul	class="nav	navbar-nav">
<?php	}	?>
		<li><a	href="<?=base_url()?>">Home</a></li>
		<li><a	href="<?=base_url('empresa')?>">A	Empresa</a></li>
		<li><a	href="<?=base_url('servicos')?>">Serviços</a></li>
		<li><a	href="<?=base_url('trabalhe-conosco')?>">Trabalhe	Conosco</a></li>
		<li><a	href="<?=base_url('fale-conosco')?>">Fale	Conosco</a></li>
</ul>