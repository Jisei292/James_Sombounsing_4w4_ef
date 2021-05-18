<?php
/**
 * Template part l'affichage des bloc de cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */
global $tPropriété;
?>

<article>
	<p> <?php echo $typeCours;  ?> </p>
	<a href="<?php echo get_permalink() ?>"><?php echo $sigle; ?> </a>
	<p><?php echo $nbHeure ?> </p>
</article>
