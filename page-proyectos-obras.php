<?php
/**
 * Template Name: Proyectos y Obras
 *
 *
 * @package WordPress
 * @subpackage Transaco
 * @since 1.0
 * @version 1.0
 */
global $post;
$id_page = get_the_ID();
$titulo_page = get_the_title($id_page);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

?>

<div class="modal-parent-cont">

</div>
<!-- <div class="modal-ai-cont" id="mall">
	<div class="modal-ai-item">
		<button onclick="hideModal('mall')">
			<img src="<?php echo get_template_directory_uri().'/img/close.png'; ?>" alt="">
		</button>
		<p class="titulo">Mall Arica</p>
		<div style="color: white;">
			Descripción
		</div>
		<div class="info">
			<div class="desc">
				<div class="img">
					<img src="<?php echo $gal_1 ?>" class="desc_img">
				</div>
				<div class="img">
					<a href="<?php echo $desc ?>" target="_blank">
						<img src="<?php echo $desc ?>" >
					</a>
				</div>
			</div>
			<div class="galery">
				<div class="img img_popup" >
					<img src="<?php echo $gal_1 ?>">
				</div>
				<div class="img img_popup" >
					<img src="<?php echo $gal_2 ?>">
				</div>
				<div class="img img_popup" >
					<img src="<?php echo $gal_3 ?>">
				</div>
				<div class="img img_popup" >
					<img src="<?php echo $gal_4 ?>">
				</div>
				<div class="img img_popup" >
					<img src="<?php echo $gal_5 ?>">
				</div>
			</div>
		</div>
	</div>
</div -->

<?php get_header(); ?>
<div class="wrapper">

    <div class="content">
        <div class="titulo">
            <p><?php echo $titulo_page; ?></p>
        </div>


        <div class="proyectos-parent-cont">
            <?php
			$proyectos = array();
			$proyecto  = array();

			$args = array(
				'post_type' => 'proyectos',
				'post_status' => 'publish',
				'posts_per_page' => 11,
				'paged' => $paged
			);

			$the_query = new WP_QUERY($args);
			if($the_query->post_count > 0){
				while ( $the_query->have_posts() ) :
					$the_query->the_post();
					$current_id = $post->ID;
					$content_ 	= get_the_content($current_id);
					$title 		= get_the_title($current_id);
					$date  		= get_the_date('F j, Y ',$current_id);
					$img 		= get_the_post_thumbnail_url($current_id);

					$proyecto = array(
						'ID' 		=> $current_id,
						'title' 	=> $title,
						'content' 	=> $content_,
						'date'		=> $date,
						'image_thumbnail' => $img
					);

					array_push($proyectos, $proyecto);
				endwhile;
				?>
            <div class="proyectos-cont">
                <div class="cont-left">
                    <div class="subcont-top">
                        <div class="subcont">


                            <?php if($proyectos[0]){ ?>
                            <div class="item item_1" onclick="showModal('<?php echo $proyectos[0]['ID']; ?>')" style="background-image: url(<?php echo $proyectos[0]['image_thumbnail']; ?>">
                                <div><?php echo $proyectos[0]['title'];?></div>
                            </div>
                            <?php } ?>

                            <?php if($proyectos[1]){?>
                            <div class="item item_2" onclick="showModal('<?php echo $proyectos[1]['ID']; ?>')" style="background-image: url(<?php echo $proyectos[1]['image_thumbnail']; ?>)">
                                <div><?php echo $proyectos[1]['title']; ?></div>
                            </div>
                            <?php } ?>

                        </div>
                        <div class="subcont">
                            <?php if($proyectos[2]){ ?>
                            <div class="item item_3" onclick="showModal('<?php echo $proyectos[2]['ID']; ?>')" style="background-image: url(<?php echo $proyectos[2]['image_thumbnail']; ?>)">
                                <div><?php echo $proyectos[2]['title']; ?></div>
                            </div>
                            <?php } ?>


                            <?php if($proyectos[3]){ ?>
                            <div class="item item_4" onclick="showModal('<?php echo $proyectos[3]['ID']; ?>')" style="background-image: url(<?php echo $proyectos[3]['image_thumbnail']; ?>">
                                <div><?php echo $proyectos[3]['title']; ?></div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="subcont-bottom">

                        <?php if($proyectos[4]){ ?>
                        <div class="item item_5" onclick="showModal('<?php echo $proyectos[4]['ID']; ?>')" style="background-image: url(<?php echo $proyectos[4]['image_thumbnail']; ?>">
                            <div><?php echo $proyectos[4]['title']; ?></div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="cont-right">

                    <?php if($proyectos[5]){ ?>
                    <div class="item item_6" onclick="showModal('<?php echo $proyectos[5]['ID']; ?>')" style="background-image: url(<?php echo $proyectos[5]['image_thumbnail']; ?>)">
                        <div><?php echo $proyectos[5]['title']; ?></div>
                    </div>
                    <?php } ?>

                    <?php if($proyectos[6]){ ?>
                    <div class="item item_7" onclick="showModal('<?php echo $proyectos[6]['ID']; ?>')" style="background-image: url(<?php echo $proyectos[6]['image_thumbnail']; ?>)">
                        <div><?php echo $proyectos[6]['title']; ?></div>
                    </div>
                    <?php } ?>

                    <?php if($proyectos[7]){ ?>
                    <div class="item item_8" onclick="showModal('<?php echo $proyectos[7]['ID']; ?>')" style="background-image: url(<?php echo $proyectos[7]['image_thumbnail']; ?>">
                        <div><?php echo $proyectos[7]['title']; ?></div>
                    </div>
                    <?php } ?>

                    <?php if($proyectos[8]){ ?>
                    <div class="item item_9" onclick="showModal('<?php echo $proyectos[8]['ID']; ?>')" style="background-image: url(<?php echo$proyectos[8]['image_thumbnail']; ?>">
                        <div><?php echo $proyectos[8]['title']; ?></div>
                    </div>
                    <?php } ?>

                </div>
            </div>
            <div class="cont-bottom">
                <?php if($proyectos[9]){ ?>
                <div class="item item_10 " onclick="showModal('<?php echo $proyectos[9]['ID']; ?>')" style="background-image: url(<?php echo $proyectos[9]['image_thumbnail']; ?>)">
                    <div><?php echo $proyectos[9]['title'] ?></div>
                </div>
                <?php } ?>

                <?php if($proyectos[10]){ ?>
                <div class="item item_11 " onclick="showModal('<?php echo $proyectos[10]['ID']; ?>')" style="background-image: url(<?php echo $proyectos[10]['image_thumbnail']; ?>">
                    <div><?php echo $proyectos[10]['title']; ?></div>
                </div>
                <?php } ?>
            </div>
            <?php } ?>

        </div>
        <div class="pagination">
            <?php
				$total_pages = $the_query->max_num_pages;

				if ($total_pages > 1){

					$current_page = max(1, get_query_var('paged'));

					echo paginate_links(array(
						'base' => get_pagenum_link(1) . '%_%',
						'format' => '/page/%#%',
						'current' => $current_page,
						'total' => $total_pages,
						'prev_text'    => __('« '),
						'next_text'    => __(' »'),
					));
				}
				?>
        </div>
    </div>
    <!-- more -->
</div>

<?php
	$args = array(
		'post_type' => 'proyectos',
		'post_status' => 'publish',
		'posts_per_page' => 11,
		'paged' => $paged
	);

	$the_query = new WP_QUERY($args);
	if($the_query->post_count > 0){
		while ( $the_query->have_posts() ) :
			$the_query->the_post();
			$current_id = $post->ID;
			$content_ 	= get_the_content($current_id);
			$title 		= get_the_title($current_id);
			$date  		= get_the_date('F j, Y ',$current_id);
			$img 		= get_the_post_thumbnail_url($current_id);
			?>
<div class="modal-ai-cont" id="<?php echo $current_id; ?>">
    <div class="modal-ai-item">
        <button onclick="hideModal('<?php echo $current_id ?>')">
            <img src="<?php echo get_template_directory_uri().'/img/close.png'; ?>" alt="">
        </button>
        <p class="titulo"><?php echo $title ?></p>
        <div style="color: white;">
            <?php echo $content_ ?>
        </div>
    </div>
</div>
<?php
		endwhile;
	}
	?>

<script>
function showModal(id) {
    $('#' + id).fadeIn();
}

function hideModal(id) {
    $('#' + id).fadeOut();
}
</script>
<?php get_footer(); ?>
