<?php
/**
 * Customizer Control: dimensions.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2020, David Vongries
 * @license     https://opensource.org/licenses/MIT
 * @since       2.1
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Dimensions control.
 * multiple fields with CSS units validation.
 */
class Kirki_Control_Dimensions extends Kirki_Control_Base {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'kirki-dimensions';

	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @see WP_Customize_Control::to_json()
	 */
	public function to_json() {
		parent::to_json();

		if ( is_array( $this->choices ) ) {
			foreach ( $this->choices as $choice => $value ) {
				if ( 'labels' !== $choice && true === $value ) {
					$this->json['choices'][ $choice ] = true;
				}
			}
		}
		if ( is_array( $this->json['default'] ) ) {
			foreach ( $this->json['default'] as $key => $value ) {
				if ( isset( $this->json['choices'][ $key ] ) && ! isset( $this->json['value'][ $key ] ) ) {
					$this->json['value'][ $key ] = $value;
				}
			}
		}
	}

	/**
	 * Enqueue control related scripts/styles.
	 *
	 * @access public
	 */
	public function enqueue() {
		wp_enqueue_style( 'kirki-styles', trailingslashit( Kirki::$url ) . 'controls/css/styles.css', array(), KIRKI_VERSION );
		wp_localize_script( 'kirki-script', 'dimensionskirkiL10n', $this->l10n() );
	}

	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 *
	 * @access protected
	 */
	protected function content_template() {
		?>
		<label>
			<# if ( data.label ) { #><span class="customize-control-title">{{{ data.label }}}</span><# } #>
			<# if ( data.description ) { #><span class="description customize-control-description">{{{ data.description }}}</span><# } #>
			<div class="wrapper">
				<div class="control">
					<# for ( choiceKey in data.default ) { #>
						<div class="{{ choiceKey }}">
							<h5>
								<# if ( ! _.isUndefined( data.choices.labels ) && ! _.isUndefined( data.choices.labels[ choiceKey ] ) ) { #>
									{{ data.choices.labels[ choiceKey ] }}
								<# } else if ( ! _.isUndefined( data.l10n[ choiceKey ] ) ) { #>
									{{ data.l10n[ choiceKey ] }}
								<# } else { #>
									{{ choiceKey }}
								<# } #>
							</h5>
							<div class="{{ choiceKey }} input-wrapper">
								<# var val = ( ! _.isUndefined( data.value ) && ! _.isUndefined( data.value[ choiceKey ] ) ) ? data.value[ choiceKey ].toString().replace( '%%', '%' ) : ''; #>
								<input {{{ data.inputAttrs }}} type="text" data-choice="{{ choiceKey }}" value="{{ val }}"/>
							</div>
						</div>
					<# } #>
				</div>
			</div>
		</label>
		<?php
	}

	/**
	 * Returns an array of translation strings.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @return array
	 */
	protected function l10n() {
		return array(
			'left-top'       => esc_html__( 'Left Top', 'essence-t1' ),
			'left-center'    => esc_html__( 'Left Center', 'essence-t1' ),
			'left-bottom'    => esc_html__( 'Left Bottom', 'essence-t1' ),
			'right-top'      => esc_html__( 'Right Top', 'essence-t1' ),
			'right-center'   => esc_html__( 'Right Center', 'essence-t1' ),
			'right-bottom'   => esc_html__( 'Right Bottom', 'essence-t1' ),
			'center-top'     => esc_html__( 'Center Top', 'essence-t1' ),
			'center-center'  => esc_html__( 'Center Center', 'essence-t1' ),
			'center-bottom'  => esc_html__( 'Center Bottom', 'essence-t1' ),
			'font-size'      => esc_html__( 'Font Size', 'essence-t1' ),
			'font-weight'    => esc_html__( 'Font Weight', 'essence-t1' ),
			'line-height'    => esc_html__( 'Line Height', 'essence-t1' ),
			'font-style'     => esc_html__( 'Font Style', 'essence-t1' ),
			'letter-spacing' => esc_html__( 'Letter Spacing', 'essence-t1' ),
			'word-spacing'   => esc_html__( 'Word Spacing', 'essence-t1' ),
			'top'            => esc_html__( 'Top', 'essence-t1' ),
			'bottom'         => esc_html__( 'Bottom', 'essence-t1' ),
			'left'           => esc_html__( 'Left', 'essence-t1' ),
			'right'          => esc_html__( 'Right', 'essence-t1' ),
			'center'         => esc_html__( 'Center', 'essence-t1' ),
			'size'           => esc_html__( 'Size', 'essence-t1' ),
			'spacing'        => esc_html__( 'Spacing', 'essence-t1' ),
			'width'          => esc_html__( 'Width', 'essence-t1' ),
			'height'         => esc_html__( 'Height', 'essence-t1' ),
			'invalid-value'  => esc_html__( 'Invalid Value', 'essence-t1' ),
		);
	}
}
