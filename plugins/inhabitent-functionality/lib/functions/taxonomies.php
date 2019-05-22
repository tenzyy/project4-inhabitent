<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
function Inhabitent_tax_product_type() {

	$labels = array(
		'name'                       => 'Produt Types',
		'singular_name'              => 'Product Type',
		'menu_name'                  => 'Product Types',
		'all_items'                  => 'All Product Types',
		'parent_item'                => 'Parent Product Type',
		'parent_item_colon'          => 'Parent Product Type:',
		'new_item_name'              => 'New Prodcut Type Name',
		'add_new_item'               => 'Add New Prodcut Type',
		'edit_item'                  => 'Edit Prodcut Type',
		'update_item'                => 'Update Prodcut Type',
		'view_item'                  => 'Prodcut Type',
		'separate_items_with_commas' => 'Separate Prodcut Type with commas',
		'add_or_remove_items'        => 'Add or remove Prodcut Type',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Prodcut Type',
		'search_items'               => 'Search Prodcut Type',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Prodcut Type',
		'items_list'                 => 'Prodcut Type list',
		'items_list_navigation'      => 'Prodcut Type list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'Product-type', array( 'product' ), $args );

}
add_action( 'init', 'Inhabitent_tax_product_type', 0 );