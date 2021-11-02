<?php
namespace Elementor;

use Modules;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_GCO_Banner extends Widget_Base {

	// 1. Config settings
	private $settings = [
		'name'	=> 'gcod-banner',
		'title'	=> 'GCO Photo Banner',
		'icon'	=> 'eicon-parallax',
	];

	// method list
	public function get_name() {
		return $this->settings['name'];
	}

	public function get_title() {
		return __( $this->settings['title'] , 'gcodemo' );
	}

	public function get_icon() {
		return $this->settings['icon'];
	}

	// 2. Define Controls
	protected function _register_controls() {

		/*
		 * start control section and followup with adding control fields.
		 * end control after all control field and repeat if you need other control section respectively.
		*/

		// Start Section
		$this->start_controls_section(
			'section_layout',
			[
				'label' => esc_html__( 'Layout', 'gcodemo' ),
			]
		);

		$this->add_control(
			'gcod_image',
			[
				'label' => __( 'Choose Image', 'plugin-domain' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'gcod_image_2',
			[
				'label' => __( 'Choose Image', 'plugin-domain' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'sample_text',
			[
				'label' => __( 'Primary Text', 'gcodemo' ),
				'type' => Controls_Manager::TEXT,
				'default' => '',
				'title' => __( 'Enter some text', 'gcodemo' ),
			]
		);
		$this->end_controls_section();
		// End Section		

		// Start Section
		$this->start_controls_section(
			'section_query',
			[
				'label' => esc_html__( 'Basic', 'gcodemo' ),
			]
		);

		$this->add_control(
			'heading_text',
			[
				'label' => __( 'Heading Text', 'gcodemo' ),
				'type' => Controls_Manager::TEXT,
				'default' => '',
				'title' => __( 'Enter some text', 'gcodemo' ),
			]
		);

		$this->add_control(
			'posts_per_page',
			[
				'label'   => __( 'Number of Posts', 'gcodemo' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 5,
				'options' => [
					1  => __( 'One', 'gcodemo' ),
					2  => __( 'Two', 'gcodemo' ),
					5  => __( 'Five', 'gcodemo' ),
					10 => __( 'Ten', 'gcodemo' ),
					-1 => __( 'All', 'gcodemo' ),

				]
			]
		);

		$this->end_controls_section();
		// End Section

	}

	// 3. Render views
	protected function render( $instance = [] ) {
		// get our input from the widget settings.
		$settings = $this->get_settings_for_display();
		$custom_text = ! empty( $settings['heading_text'] ) ? $settings['heading_text'] : ' Popular Posts ';
		$sample_text = ! empty( $settings['sample_text'] ) ? $settings['sample_text'] : ' Sample Text ';
		$post_count = ! empty( $settings['posts_per_page'] ) ? (int)$settings['posts_per_page'] : 1;
		$custom_photo = ! empty( $settings['gcod_image'] ) ? $settings['gcod_image'] : '#';

		// include all views files
		require_once dirname(__DIR__) . '/views/frontend.tpl.php';

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {}

}
\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widget_GCO_Banner() );
