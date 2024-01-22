<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor team Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_team_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve team widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'team';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve team widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'team', 'elementor-custom-widget-leo-g' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve team widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-user-circle-o';
	}

	/**
	 * Get custom help URL.
	 *
	 * Retrieve a URL where the user can get more information about the widget.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget help URL.
	 */
	public function get_custom_help_url() {
		return 'https://github.com/Gazzola-Leonardo';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the team widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'general' ];
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the team widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'team', 'url', 'link' ];
	}

	/**
	 * Register team widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {

		//################################################# START - Content section #################################################
        //Content
		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'elementor-custom-widget-leo-g' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

			//-------------------------------------------------------- Image --------------------------------------------------------
			$this->add_control(
				'team_image',
				[
					'label' => esc_html__( 'Choose Image', 'elementor-custom-widget-leo-g' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
					'label_block' => true,				
				]
			);


			//-------------------------------------------------------- Name and Surname --------------------------------------------------------
			$this->add_control(
				'team_name',
				[
					'label' => esc_html__( 'Team name', 'elementor-custom-widget-leo-g' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'input_type' => 'url',
					'placeholder' => esc_html__( 'Team name', 'elementor-custom-widget-leo-g' ),
					'default' => esc_html__( 'Default text', 'elementor-custom-widget-leo-g' ),
				]
			);

			
			//-------------------------------------------------------- Designation --------------------------------------------------------
			$this->add_control(
				'team_designation',
				[
					'label' => esc_html__( 'Team designation', 'elementor-custom-widget-leo-g' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'input_type' => 'url',
					'placeholder' => esc_html__( 'Team designation', 'elementor-custom-widget-leo-g' ),
					'default' => esc_html__( 'Default text', 'elementor-custom-widget-leo-g' ),
					'separator' => 'after'
				]
			);


			//-------------------------------------------------------- Icon 1 --------------------------------------------------------
			//Icon 1 selection
			$this->add_control(
				'team_icon1',
				[
					'label' => esc_html__( 'Icon', 'elementor-custom-widget-leo-g' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-linkedin',
						'library' => 'fa-brands',
					],
					'recommended' => [
						'fa-solid' => [
							'circle',
							'dot-circle',
							'square-full',
						],
						'fa-regular' => [
							'circle',
							'dot-circle',
							'square-full',
						],
					],
				]
			);

			//Link linkedin
			$this->add_control(
				'team_link1',
				[
					'label' => esc_html__( 'Link', 'elementor-custom-widget-leo-g' ),
					'type' => \Elementor\Controls_Manager::URL,
					'options' => [ 'url', 'is_external', 'nofollow' ],
					'default' => [
						'url' => '',
						'is_external' => true,
						'nofollow' => true,
						// 'custom_attributes' => '',
					],
					'label_block' => true,
				]
			);

			
			//-------------------------------------------------------- Icon 2 --------------------------------------------------------
			//Icon 2 selection
			$this->add_control(
				'team_icon2',
				[
					'label' => esc_html__( 'Icon', 'elementor-custom-widget-leo-g' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-envelope',
						'library' => 'fa-brands',
					],
					'recommended' => [
						'fa-solid' => [
							'circle',
							'dot-circle',
							'square-full',
						],
						'fa-regular' => [
							'circle',
							'dot-circle',
							'square-full',
						],
					],
					'separator' => 'before'
				]
			);

			//Link linkedin
			$this->add_control(
				'team_link2',
				[
					'label' => esc_html__( 'Link', 'elementor-custom-widget-leo-g' ),
					'type' => \Elementor\Controls_Manager::URL,
					'options' => [ 'url', 'is_external', 'nofollow' ],
					'default' => [
						'url' => '',
						'is_external' => true,
						'nofollow' => true,
						// 'custom_attributes' => '',
					],
					'label_block' => true,
				]
			);
			
		$this->end_controls_section();
		//################################################# END - Content section #################################################



		//################################################# START - Style section #################################################
		$this->start_controls_section(
			'style_content_section',
			[
				'label' => esc_html__( 'List Style', 'elementor-custom-widget-leo-g' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		

			//-------------------------------------------------------- Name and Surname --------------------------------------------------------
			//Text Color
			$this->add_control(
				'title_color',
				[
					'label' => esc_html__( 'Color', 'elementor-custom-widget-leo-g' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .teams h4' => 'color: {{VALUE}};',
					],
				]
			);

			//Text Font
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'title_typography',
					'selector' => '{{WRAPPER}} .teams h4',
				]
			);


			//-------------------------------------------------------- Designation --------------------------------------------------------
			//Designation color
			$this->add_control(
				'designation_color',
				[
					'label' => esc_html__( 'Colore', 'elementor-custom-widget-leo-g' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .teams p' => 'color: {{VALUE}};',
					],
					'separator' => 'before'
				]
			);

			//Designation Font
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'designation_typography',
					'selector' => '{{WRAPPER}} .teams p',
				]
			);


			//-------------------------------------------------------- All components --------------------------------------------------------
			//Components align
			$this->add_control(
				'title_align',
				[
					'label' => esc_html__( 'Alignment', 'elementor-custom-widget-leo-g' ),
					'type' => \Elementor\Controls_Manager::CHOOSE,
					'options' => [
						'left' => [
							'title' => esc_html__( 'Left', 'elementor-custom-widget-leo-g' ),
							'icon' => 'eicon-text-align-left',
						],
						'center' => [
							'title' => esc_html__( 'Center', 'elementor-custom-widget-leo-g' ),
							'icon' => 'eicon-text-align-center',
						],
						'right' => [
							'title' => esc_html__( 'Right', 'elementor-custom-widget-leo-g' ),
							'icon' => 'eicon-text-align-right',
						],
					],
					'default' => 'center',
					'toggle' => true,
					'selectors' => [
						'{{WRAPPER}}  .teams' => 'text-align: {{VALUE}};',
					],
					'separator' => 'before',
				]
			);


			//border of card
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'border',
					'selector' => '{{WRAPPER}} .teams',
				]
			);

			
			//-------------------------------------------------------- Icons --------------------------------------------------------
			//icons width
			$this->add_control(
				'icons_width',
				[
					'label' => esc_html__( 'Icons width', 'elementor-custom-widget-leo-g' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 500,
							'step' => 5,
						],
						'%' => [
							'min' => 0,
							'max' => 100,
						],
					],
					'default' => [
						'unit' => 'px',
						'size' => 65,
					],
					'selectors' => [
						'{{WRAPPER}} .my-icon-wrapper' => 'width: {{SIZE}}{{UNIT}};',
					],
					'separator' => 'before',
				]
			);


			//-------------------------------------------------------- Image --------------------------------------------------------
			//Image radius 
			$this->add_control(
				'margin',
				[
					'label' => esc_html__( 'Margin', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
					'default' => [
						'top' => 0,
						'right' => 0,
						'bottom' => 0,
						'left' => 0,
						'unit' => 'px',
						'isLinked' => false,
					],
					'selectors' => [
						'{{WRAPPER}} .imgProfile' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'separator' => 'before',
				]
			);
		
		
		$this->end_controls_section();
		//################################################# END - Style section #################################################
	}

	/**
	 * Render team widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings = $this->get_settings_for_display();
		$team_image = $settings['team_image']['url'];
		$team_name = $settings['team_name'];
		$team_designation = $settings['team_designation'];
		$team_icon1 = $settings['team_icon1'];
		$team_link1 = $settings['team_link1']['url'];
		$team_icon2 = $settings['team_icon2'];
		$team_link2 = $settings['team_link2']['url'];
		?>
			<div class="teams">
				<img src="<?php echo $team_image;?>" class="imgProfile" alt="">
				<h4 style=" padding-top: 20px;"><?php echo $team_name;?></h4>
				<p><?php echo $team_designation;?></p>
				
				<style>
					.row {
					  display: flex;
					}

					.column {
					  	flex: 33.33%;
					  	padding: 5px;
	    				text-align: center;
						vertical-align: middle;
					}
				</style>
				<div class="row my-icon-wrapper" style=" margin-left: auto; margin-right: auto; ">
					<div class="column ">
						<a href=<?php echo $team_link1;?> target="_blank">
							<?php \Elementor\Icons_Manager::render_icon( $settings['team_icon1'], [ 'aria-hidden' => 'true' ] ); ?>
						</a>
					</div>
					<div class="column">
						<a href=<?php echo $team_link2;?> target="_blank">
							<?php \Elementor\Icons_Manager::render_icon( $settings['team_icon2'], [ 'aria-hidden' => 'true' ] ); ?>
						</a>
					</div>
				</div>
			</div>
		<?php
	}
}