<?php
add_action('acf/init', 'projectstem_blocks');
function projectstem_blocks() {
    // check function exists.
    if (function_exists('acf_register_block_type')) {
        // register a banner block.
        acf_register_block_type(array(
            'name'              => 'banner-lp',
            'title'             => __('Banner LP'),
            'description'       => __('A custom banner lp block.'),
            'render_template'   => '/template-parts/custom-blocks/banner/banner-lp.php',
			'category'          => 'custom-blocks',
			'icon' 				=> 'wordpress',
			'align'				=> 'full',
			'enqueue_assets' 	=> function(){
			},
        )); 
        // Path Assessment block.
        acf_register_block_type(array(
            'name'              => 'category-slide',
            'title'             => __('Category Slide'),
            'description'       => __('A custom category slide block.'),
            'render_template'   => '/template-parts/custom-blocks/category-slide/category-slide.php',
			'category'          => 'custom-blocks',
			'icon' 				=> 'wordpress',
			'align'				=> 'full',
			'enqueue_assets' 	=> function(){
                wp_enqueue_script( 'category-slide', get_template_directory_uri() . '/template-parts/custom-blocks/category-slide/category-slide.js', array('jquery'), '', true );
			},
        ));
    }
}
function projectstem_block_categories( $categories,$post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'custom-blocks',
                'title' => __( 'Custom Blocks', 'custom-blocks' ),
                'icon'  => 'wordpress',
            ),
        )
    );
}
add_filter( 'block_categories', 'projectstem_block_categories', 10, 2 );