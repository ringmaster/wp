<?php

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'acme_product',
		array(
			'labels' => array(
				'name' => __( 'Products' ),
				'singular_name' => __( 'Product' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'products'),
		)
	);
}

class Products_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Products_Widget',
			'Products Widget',
			array( 'description' => 'Displays a listing of Products', )
		);
	}
	public function widget( $args, $instance ) {
		$args = array( 'post_type' => 'acme_product', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		echo '<aside class="widget widget_products"><h3 class="widget-title">Our Products</h3>';
		while ( $loop->have_posts() ) : $loop->the_post();
			the_title();
			echo '<div class="entry-content">';
			the_content();
			echo '</div>';
		endwhile;
		echo '</aside>';
	}
}

add_action( 'widgets_init', function(){
	register_widget( 'Products_Widget' );
});
