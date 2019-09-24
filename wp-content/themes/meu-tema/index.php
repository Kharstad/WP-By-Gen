<?php
//chama o arquivo do header.php
	get_header();
?>
<div class="container">

<?php
	//verifica se há algum post cadastrado
	//se existir vai exibir os posts com o while
	if(have_posts()) : while(have_posts()) : the_post();

?>

<h1>
	<?php
		//comando WP que exibe o título
		the_title(); 
	?>
</h1>
<?php
	//comando WP que exibe o conteúdo
	the_content(); 
?>
<?php
	//fim do while
	endwhile;
	//else - comandos caso não tenham posts cadastrados
	else:
?>
<h1>Nenhum post encontrado!</h1>
<?php

	endif;
?>

</div>
<div class="futi">
	<?php get_footer(); ?>
</div>