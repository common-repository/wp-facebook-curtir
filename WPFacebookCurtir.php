<?php
/*
Plugin Name: WP Facebook Curtir
Plugin URI: http://blog.idealmind.com.br/wordpress/insereiframe-a-simple-wordpress-plugin-to-insert-iframe-in-posts/
Description: Um plugin Eordpress para adicionar um Botão Curtir do Facebook. An Wordpress plugin to automatically add a Facebook Like button on your posts.
Version: 1.0
Author: Wellington Ribeiro
Author URI: http://blog.idealmind.com.br/wordpress/wp-facebook-curtir-a-wordpress-plugin-to-automatically-add-a-facebook-like-button-on-your-posts/

1.0   - Initial release
*/

function WPFacebookCurtir( $content )
{
	echo '<iframe src="http://www.facebook.com/plugins/like.php?href=' . get_permalink() . '&;%0Alayout=standard&show_faces=false&width=350&action=like&colorscheme=light&height=25" style="border: medium none; overflow: hidden; width: 350px; height: 30px;" allowtransparency="true" frameborder="0" scrolling="no"></iframe>' . $content;
}

add_filter ('the_content', 'WPFacebookCurtir');

?>