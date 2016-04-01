<?php function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
require_once('wp_bootstrap_navwalker.php');



add_theme_support( 'post-thumbnails' ); 

function textWrap($text) { 
        $new_text = ''; 
        $text_1 = explode('>',$text); 
        $sizeof = sizeof($text_1); 
        for ($i=0; $i<$sizeof; ++$i) { 
            $text_2 = explode('<',$text_1[$i]); 
            if (!empty($text_2[0])) { 
                $new_text .= preg_replace('#([^\n\r .]{25})#i', '\\1  ', $text_2[0]); 
            } 
            if (!empty($text_2[1])) { 
                $new_text .= '<' . $text_2[1] . '>';    
            } 
        } 
        return $new_text; 
    } 

?>