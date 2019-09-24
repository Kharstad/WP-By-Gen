<html>
 <head>
  <title>
  
   <?php 
   //para chamar o nome do tema
    bloginfo('Teminha'); 
	
	?>
	-
	<?php 
	//para alterar a descrição que aparece ao lado do título
	//após inserir está função WP, é preciso ir ao Painel de Controle
	//Menu Configurações Gerais - alterar o campo descrição.
	bloginfo('deion');
	?>
   </title>
  <meta name="genertor" content="wordpress <?php bloginfo('version'); ?>" />
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?> "<?php bloginfo('charset'); ?> />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo ('rss_url'); ?> "/>
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo ('atom_url'); ?>" />
  <?php wp_head(); ?>
 </head>
 <body>
	<div class="header">
	<!--imagem de banner http://localhost/wordpress/wordpress/wp-content/themes/meutema/imagem/banner.png-->
		<div class="logo"><a href="#"><img src="" /></a></div>
	</div>
	<div class="menu">
		<div class="menu_centro">
			<ul>
				<!--Função para levar para a página principal-->
				<li><a href="<?php get_option('home');?>">HOME</a></li>
				<!--Para fazer as outras páginas aparecerem-->
				<?php wp_list_pages('title_li=');?>
			</ul>
		</div>
	</div>

 </body>
 
</html>
