<?php
/**
 * Template Name: Documentacion
 *
 * @package WordPress
 * @subpackage Transaco
 * @since 1.0
 * @version 1.0
 */
global $post;
?>

<?php get_header(); ?>

<div class="wrapper">
    <!-- menu movil -->
    <!-- <div class="button-menu-mobile" id="bmm">
        <span>
            << /span><span>Productos</span>
    </div> -->
    <!-- menu movil -->


    <!-- contenido -->
    <div class="content">
        <div class="titulo">
            <p><?php the_title(); ?></p>
            <small>Garantías y fichas técnicas</small>
        </div>


        <div class="fichas-cont">
            <div class="cabecera">
                <div>Productos</div>
                <div>Fichas técnicas</div>
                <div>Garantías</div>
                <div>Columna</div>
            </div>

            <?php
			$args = array(
				'post_type' => 'fichas_tecnicas',
				'post_status' => 'publish',
				'post_per_page' => 1,
				'orderby'           => 'date',
				'order'             => 'ASC'
			);

			$the_query = new WP_Query($args);
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				$current_id = $post->ID;

				$ficha_nombre = get_the_title($current_id);
				$ficha_tecnica = get_field('ficha_tecnica', $current_id);
				$garantia = get_field('garantia', $current_id);
				?>
            <div class="ficha-item">
                <div class="titulo">
                    <?php echo $ficha_nombre ?>
                    <div></div>
                </div>
                <div class="ficha">
                    <?php if($ficha_tecnica){ ?>
                    <a href="<?php echo $ficha_tecnica ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>" alt="">
                    </a>
                    <?php } ?>
                    <div></div>
                </div>
                <div class="garantia">
                    <?php if($garantia){ ?>
                    <a href="<?php echo $garantia ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri().'/img/save.png' ?>" alt="">
                    </a>
                    <?php } ?>
                    <div></div>
                </div>
            </div>
            <?php
			endwhile;
			?>
        </div>
        <section class="slider-">
            <div class="titulo">
                <p>Productos Complementarios</p>

            </div>
            <div>
                <?php echo do_shortcode("[slide-anything id='184']") ?>
            </div>
        </section>
    </div>
    <!-- fin de contenido -->

    <!-- menu principal -->
    <!-- <div class="prod-nav-cont" id="pnc">
		<?php
		// $args = array (
		// 	'theme-location' => 'productos-menu',
		// 	'container'		 => 'nav',
		// 	'container-class' => 'productos-menu'
		// );
		// wp_nav_menu( array(
		// 	'theme_location' => 'productos-menu',
		// 	'container'		 => 'nav',
		// 	'container-class' => 'productos-menu'
		// ) );
		?>
	</div> -->
    <!-- menu principal -->

</div>
<?php get_footer(); ?>
