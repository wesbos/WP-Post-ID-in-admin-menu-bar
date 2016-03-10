<?php
/*
Plugin Name: Post ID in Admin Bar
Author: Wes Bos
Version: 1.0
Description: Displays the current post/page ID in the menu bar
Plugin URI: https://github.com/wesbos/wp-id-in-admin-bar/
Author URI: http://wesbos.com/
License: WTFPL
*/


class Id_in_menu_bar {

  function __construct( ) {
    add_action( 'admin_bar_menu', array( $this, 'admin_bar_menu' ), 100 );
  }

  function admin_bar_menu( $wp_admin_bar ) {
    // add live countdown to next reset to Toolbar
    $wp_admin_bar->add_menu( array(
      'id'    => 'id',
      'title' => 'ID:   ' . get_the_id(),
    ) );
  }
}

$cool = new Id_in_menu_bar();
