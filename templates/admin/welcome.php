<?php
/**
 * This template contains the Friends Welcome Page.
 *
 * @package Friends
 */

$first_friend = array(
	// translators: %s is Alex Kirk.
	'display_name' => sprintf( __( 'Add %s, creator of the Friends plugin, as a friend now', 'friends' ), 'Alex Kirk' ),
	'url'          => 'https://alex.kirk.at/',
);
?>
<iframe id="iframePageFriends" width="100%" src="friends/" frameborder="0"  scrolling="auto" onload="resizeIframe(this)"></iframe>