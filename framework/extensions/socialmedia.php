<?php
/**
 * Functions to help integrate social media functions into the theme
 *
 * @package Inti
 * @since 1.0.0
 * @license GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 */


/**
 * Build HTML for social media icons
 * in main dropdown when activated
 * 
 * @since 1.0.0
 */
if ( !function_exists( 'inti_get_dropdown_social_links' ) ) {
	function inti_get_dropdown_social_links() { 
		$fb = get_inti_option('social_fb', 'inti_social_options');
		$tw = get_inti_option('social_tw', 'inti_social_options');
		$gp = get_inti_option('social_gp', 'inti_social_options');
		$li = get_inti_option('social_li', 'inti_social_options');
		$in = get_inti_option('social_in', 'inti_social_options');
		$pi = get_inti_option('social_pi', 'inti_social_options');
		$yt = get_inti_option('social_yt', 'inti_social_options');
		$vi = get_inti_option('social_vi', 'inti_social_options');

		$html = '<ul class="social-icons left menu">';
			
			// foundicons
			// if ($fb) $html .= '<li class="social-fb"><a href="'. $fb .'"><i class="fi fi-social-facebook"></i></a></li>';
			// if ($tw) $html .= '<li class="social-tw"><a href="'. $tw .'"><i class="fi fi-social-twitter"></i></a></li>';
			// if ($gp) $html .= '<li class="social-gp"><a href="'. $gp .'"><i class="fi fi-social-google-plus"></i></a></li>';
			// if ($li) $html .= '<li class="social-li"><a href="'. $li .'"><i class="fi fi-social-linkedin"></i></a></li>';
			// if ($in) $html .= '<li class="social-in"><a href="'. $in .'"><i class="fi fi-social-instagram"></i></a></li>';
			// if ($pi) $html .= '<li class="social-pi"><a href="'. $pi .'"><i class="fi fi-social-pinterest"></i></a></li>';
			// if ($yt) $html .= '<li class="social-yt"><a href="'. $yt .'"><i class="fi fi-social-youtube"></i></a></li>';
			// if ($vi) $html .= '<li class="social-vi"><a href="'. $vi .'"><i class="fi fi-social-vimeo"></i></a></li>';

			// fontawesome
			if ($fb) $html .= '<li class="social-fb"><a href="'. $fb .'"><i class="fa fa-facebook-square"></i></a></li>';
			if ($tw) $html .= '<li class="social-tw"><a href="'. $tw .'"><i class="fa fa-twitter-square"></i></a></li>';
			if ($gp) $html .= '<li class="social-gp"><a href="'. $gp .'"><i class="fa fa-googleplus-square"></i></a></li>';
			if ($li) $html .= '<li class="social-li"><a href="'. $li .'"><i class="fa fa-linkedin-square"></i></a></li>';
			if ($in) $html .= '<li class="social-in"><a href="'. $in .'"><i class="fa fa-instagram-square"></i></a></li>';
			if ($pi) $html .= '<li class="social-pi"><a href="'. $pi .'"><i class="fa fa-pinterest-square"></i></a></li>';
			if ($yt) $html .= '<li class="social-yt"><a href="'. $yt .'"><i class="fa fa-youtube-square"></i></a></li>';
			if ($vi) $html .= '<li class="social-vi"><a href="'. $vi .'"><i class="fa fa-vimeo-square"></i></a></li>';

		$html.='</ul>';
		return apply_filters('inti_filter_dropdown_social_links', $html);
	}
}


/**
 * Build HTML for social media icons
 * in off canvas when activated
 * 
 * @since 1.0.0
 */
if ( !function_exists( 'inti_get_off_canvas_social_links' ) ) {
	function inti_get_off_canvas_social_links() { 
		$fb = get_inti_option('social_fb', 'inti_social_options');
		$tw = get_inti_option('social_tw', 'inti_social_options');
		$gp = get_inti_option('social_gp', 'inti_social_options');
		$li = get_inti_option('social_li', 'inti_social_options');
		$in = get_inti_option('social_in', 'inti_social_options');
		$pi = get_inti_option('social_pi', 'inti_social_options');
		$yt = get_inti_option('social_yt', 'inti_social_options');
		$vi = get_inti_option('social_vi', 'inti_social_options');

		$html = '<ul class="social-icons menu">';
			
			// foundicons
			// if ($fb) $html .= '<li class="social-fb"><a href="'. $fb .'"><i class="fi fi-social-facebook"></i></a></li>';
			// if ($tw) $html .= '<li class="social-tw"><a href="'. $tw .'"><i class="fi fi-social-twitter"></i></a></li>';
			// if ($gp) $html .= '<li class="social-gp"><a href="'. $gp .'"><i class="fi fi-social-google-plus"></i></a></li>';
			// if ($li) $html .= '<li class="social-li"><a href="'. $li .'"><i class="fi fi-social-linkedin"></i></a></li>';
			// if ($in) $html .= '<li class="social-in"><a href="'. $in .'"><i class="fi fi-social-instagram"></i></a></li>';
			// if ($pi) $html .= '<li class="social-pi"><a href="'. $pi .'"><i class="fi fi-social-pinterest"></i></a></li>';
			// if ($yt) $html .= '<li class="social-yt"><a href="'. $yt .'"><i class="fi fi-social-youtube"></i></a></li>';
			// if ($vi) $html .= '<li class="social-vi"><a href="'. $vi .'"><i class="fi fi-social-vimeo"></i></a></li>';

			// fontawesome
			if ($fb) $html .= '<li class="social-fb"><a href="'. $fb .'"><i class="fa fa-facebook-square"></i></a></li>';
			if ($tw) $html .= '<li class="social-tw"><a href="'. $tw .'"><i class="fa fa-twitter-square"></i></a></li>';
			if ($gp) $html .= '<li class="social-gp"><a href="'. $gp .'"><i class="fa fa-googleplus-square"></i></a></li>';
			if ($li) $html .= '<li class="social-li"><a href="'. $li .'"><i class="fa fa-linkedin-square"></i></a></li>';
			if ($in) $html .= '<li class="social-in"><a href="'. $in .'"><i class="fa fa-instagram-square"></i></a></li>';
			if ($pi) $html .= '<li class="social-pi"><a href="'. $pi .'"><i class="fa fa-pinterest-square"></i></a></li>';
			if ($yt) $html .= '<li class="social-yt"><a href="'. $yt .'"><i class="fa fa-youtube-square"></i></a></li>';
			if ($vi) $html .= '<li class="social-vi"><a href="'. $vi .'"><i class="fa fa-vimeo-square"></i></a></li>';

		$html.='</ul>';
		return apply_filters('inti_filter_off_canvas_social_links', $html);

	}
}


/**
 * Build HTML for social media icons
 * in footer
 * 
 * @since 1.0.0
 */
if ( !function_exists( 'inti_get_footer_social_links' ) ) {
	function inti_get_footer_social_links() { 
		$fb = get_inti_option('social_fb', 'inti_social_options');
		$tw = get_inti_option('social_tw', 'inti_social_options');
		$gp = get_inti_option('social_gp', 'inti_social_options');
		$li = get_inti_option('social_li', 'inti_social_options');
		$in = get_inti_option('social_in', 'inti_social_options');
		$pi = get_inti_option('social_pi', 'inti_social_options');
		$yt = get_inti_option('social_yt', 'inti_social_options');
		$vi = get_inti_option('social_vi', 'inti_social_options');

		$html = '<ul class="social-icons left menu">';
			
			// foundicons
			// if ($fb) $html .= '<li class="social-fb"><a href="'. $fb .'"><i class="fi fi-social-facebook"></i></a></li>';
			// if ($tw) $html .= '<li class="social-tw"><a href="'. $tw .'"><i class="fi fi-social-twitter"></i></a></li>';
			// if ($gp) $html .= '<li class="social-gp"><a href="'. $gp .'"><i class="fi fi-social-google-plus"></i></a></li>';
			// if ($li) $html .= '<li class="social-li"><a href="'. $li .'"><i class="fi fi-social-linkedin"></i></a></li>';
			// if ($in) $html .= '<li class="social-in"><a href="'. $in .'"><i class="fi fi-social-instagram"></i></a></li>';
			// if ($pi) $html .= '<li class="social-pi"><a href="'. $pi .'"><i class="fi fi-social-pinterest"></i></a></li>';
			// if ($yt) $html .= '<li class="social-yt"><a href="'. $yt .'"><i class="fi fi-social-youtube"></i></a></li>';
			// if ($vi) $html .= '<li class="social-vi"><a href="'. $vi .'"><i class="fi fi-social-vimeo"></i></a></li>';

			// fontawesome
			if ($fb) $html .= '<li class="social-fb"><a href="'. $fb .'"><i class="fa fa-facebook-square"></i></a></li>';
			if ($tw) $html .= '<li class="social-tw"><a href="'. $tw .'"><i class="fa fa-twitter-square"></i></a></li>';
			if ($gp) $html .= '<li class="social-gp"><a href="'. $gp .'"><i class="fa fa-googleplus-square"></i></a></li>';
			if ($li) $html .= '<li class="social-li"><a href="'. $li .'"><i class="fa fa-linkedin-square"></i></a></li>';
			if ($in) $html .= '<li class="social-in"><a href="'. $in .'"><i class="fa fa-instagram-square"></i></a></li>';
			if ($pi) $html .= '<li class="social-pi"><a href="'. $pi .'"><i class="fa fa-pinterest-square"></i></a></li>';
			if ($yt) $html .= '<li class="social-yt"><a href="'. $yt .'"><i class="fa fa-youtube-square"></i></a></li>';
			if ($vi) $html .= '<li class="social-vi"><a href="'. $vi .'"><i class="fa fa-vimeo-square"></i></a></li>';

		$html.='</ul>';
		return apply_filters('inti_filter_footer_social_links', $html);
	}
}


?>