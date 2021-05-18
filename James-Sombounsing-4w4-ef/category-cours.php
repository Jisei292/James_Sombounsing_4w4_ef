<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */
 
get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
	
				<?php
				// echo (is_category('Projets')? '### oui projets ###': '### non ###');
				// the_archive_title( '<h1 class="page-title">', '</h1>' );
				echo '<h1 class="page-title">' . single_cat_title( '', false ) . '</h1>';
				the_archive_description( '<div class="archive-description">', '</div>' );
		
				?>	
			
			</header><!-- .page-header -->
			<section class="list-cours">
			<?php
			/* Start the Loop */
            $precedent = "XXXXXX";
			while ( have_posts() ) :
				the_post();

                $titre_grand = get_the_title();
				$sigle = substr($titre_grand,0,7);
				$nbHeure = substr($titre_grand,-4,3);
				$titrePartiel = substr($titre_grand,8,-6);
				$titre = substr($titre_grand,8,-6);
                $session = substr($titre_grand,4,1);
				$contenu = get_the_content();
                $resume = substr($contenu, 0, 200);
				$typeCours = get_field('type_de_cours');

				if ($typeCours != $precedent):
					if ("XXXXXX" != $precedent):?>
					</section>
					<?php endif; ?>
					<section>
				<?php endif; ?>

			<article>
				<p> <?php echo $typeCours;  ?> </p>
				<a href="<?php echo get_permalink() ?>"><?php echo $sigle; ?> </a>
				<p><?php echo $nbHeure ?> </p>
			
			</article>

            <?php
			$precedent = $typeCours;
			endwhile;?>
			
		</section>
		<?php endif; ?>
		

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
