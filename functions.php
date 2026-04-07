<?php
/**
 * Yunis Theme Functions
 *
 * @package Yunis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup.
 */
function yunis_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'yunis_setup' );

/**
 * Enqueue front-end scripts.
 */
function yunis_enqueue_scripts() {
	wp_enqueue_script(
		'yunis-custom',
		get_theme_file_uri( 'assets/js/custom.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'yunis_enqueue_scripts' );

/**
 * Register block pattern category.
 */
function yunis_register_pattern_categories() {
	register_block_pattern_category( 'yunis', array(
		'label' => __( 'Yunis Theme', 'yunis' ),
	) );
}
add_action( 'init', 'yunis_register_pattern_categories' );

/**
 * Audio player shortcode.
 *
 * Usage: [yunis_audio_player src="path/to/audio.mp3"]
 */
function yunis_audio_player_shortcode( $atts ) {
	$atts = shortcode_atts( array(
		'src' => '',
	), $atts, 'yunis_audio_player' );

	$src = esc_url( $atts['src'] );

	if ( empty( $src ) ) {
		return '';
	}

	$id = 'yunis-player-' . wp_unique_id();

	ob_start();
	?>
	<div class="music-player-container">
		<div class="custom-player">
			<audio id="<?php echo esc_attr( $id ); ?>-audio">
				<source src="<?php echo $src; ?>" type="audio/mpeg">
			</audio>
			<button class="player-btn" data-player="<?php echo esc_attr( $id ); ?>">
				<svg class="play-icon" viewBox="0 0 24 24" fill="currentColor">
					<path d="M8 5v14l11-7z"/>
				</svg>
				<svg class="pause-icon" viewBox="0 0 24 24" fill="currentColor" style="display: none;">
					<path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>
				</svg>
			</button>
			<div class="progress-container">
				<span class="current-time">0:00</span>
				<input type="range" class="progress-bar" id="progress-bar" value="0" max="100">
				<span class="duration">0:00</span>
			</div>
		</div>
	</div>
	<?php
	return ob_get_clean();
}
add_shortcode( 'yunis_audio_player', 'yunis_audio_player_shortcode' );
