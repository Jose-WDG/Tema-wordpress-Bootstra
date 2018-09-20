<?php get_header(); ?>
<!-- LOCALIZAÇÃO DO SLIDER -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">

  	<?php 
			$args = array
			(
				'post_type' =>'slider',
				'showposts' => 5,
			);
			$my_slider = get_posts($args);
			$count = 0; if($my_slider): foreach($my_slider as $post) : setup_postdata( $post );
		?>
    			<li data-target="#myCarousel" data-slide-to="<?php echo $count; ?>" <?php if($count == 0): ?>class="active"<?php endif; ?>></li>
			<?php 
				$count ++ ;
				endforeach;
				endif
			?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
		<?php 
			$cont = 0; if($my_slider): foreach($my_slider as $post) : setup_postdata( $post );
		?>

	<div class="item <?php if ($cont == 0 ) echo "active";?>">
	   <?php the_post_thumbnail('full img-responsive');?>
	   <div class="carousel-caption">
		<h2><?php the_title(); ?></h2>
			<a class="leia-mais" href="#">LEIA MAIS</a>
		</div>
	</div>
	
	<?php 
		$cont ++ ;
		endforeach;
		endif
	?>



  <!-- Left and right controls -->
	
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
	
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>

</div>

<?php get_footer(); ?>