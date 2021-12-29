<?php
/**
 * Elementor Widgets Loader
 *
 * @package           FA-MC
 * @author            Farhan Ahmed
 * @copyright         2021 F-Ahmed
 * @license           GPL-2.0-or-later
 */

class fa_Material_Cards extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Team Traning widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'famc';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Team Traning widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Team Traning', 'fa-material-cards' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Team Traning widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-custom';
	}
	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Team Traning widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'basic' ];
	}

	/**
	 * Register Team Traning widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'fa-material-cards' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

       

        $repeater = new \Elementor\Repeater();
 
		$repeater->add_control(
			'card_title',
			[
				'label' => __( 'Title', 'fa-material-cards' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'John Doe.', 'fa-material-cards' ),
				'placeholder' => __( 'Type your title here', 'fa-material-cards' ),
			]
		);
        $repeater->add_control(
			'card_subtitle',
			[
				'label' => __( 'Input Id', 'fa-material-cards' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Web Designer', 'fa-material-cards' ),
				'placeholder' => __( 'Type sub title here.', 'fa-material-cards' ),
			]
		);
		$repeater->add_control(
			'Product_id',
			[
				'label' => __( 'Product id', 'fa-material-cards' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '01', 'fa-material-cards' ),
				'placeholder' => __( 'Type Product id here.', 'fa-material-cards' ),
			]
		);
		$repeater->add_control(
			'unique_id',
			[
				'label' => __( 'unique id', 'fa-material-cards' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '', 'fa-material-cards' ),
				'placeholder' => __( 'Type quniue id here.', 'fa-material-cards' ),
			]
		);
        $repeater->add_control(
			'card_description',
			[
				'label' => __( 'Description', ' fa-mc' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'rows' => 10,
				'default' => __( 'He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...', ' fa-mc' ),
				'placeholder' => __( 'Type your description here', ' fa-mc' ),
			]
		);
		$repeater->add_control(
			'value_min',
			[
				'label' => __( 'value of min ', ' fa-mc' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'rows' => 10,
				'default' => __( 'min', ' fa-mc' ),
				'placeholder' => __( 'Type your min value here', ' fa-mc' ),
			]
		);
		$repeater->add_control(
			'value_max',
			[
				'label' => __( 'value of max ', ' fa-mc' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'rows' => 10,
				'default' => __( 'max', ' fa-mc' ),
				'placeholder' => __( 'Type your max value here', ' fa-mc' ),
			]
		);
		$repeater->add_control(
			'Amount',
			[
				'label' => __( 'Amount', 'fa-material-cards' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '', 'fa-material-cards' ),
				'placeholder' => __( 'Type Amount here.', 'fa-material-cards' ),
			]
		);
		$repeater->add_control(
			'value_price',
			[
				'label' => __( 'value of price ', ' fa-mc' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'rows' => 10,
				'default' => __( ' ', ' fa-mc' ),
				'placeholder' => __( 'Type your max value here', ' fa-mc' ),
				
			]
		);
		$repeater->add_control(
			'Amount_Save',
			[
				'label' => __( 'Amount Save', 'fa-material-cards' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '', 'fa-material-cards' ),
				'placeholder' => __( 'Type Amount Save here.', 'fa-material-cards' ),
			]
		);

        $this->add_control(
			'material_card',
			[
				'label' => __( 'Cards List', ' fa-mc' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'card_title' => __( 'John Doe.', ' fa-mc' ),
						'card_subtitle' => __( 'Web Designer', ' fa-mc' ),
                        'card_description' => __( 'He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...', ' fa-mc' ),
					],
					[
						'card_title' => __( 'John Doe.', ' fa-mc' ),
						'card_subtitle' => __( 'Web Designer', ' fa-mc' ),
                        'card_description' => __( 'He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...', ' fa-mc' ),
					],
				],
				'title_field' => '{{{ card_title }}}',
			]
		);

		$this->end_controls_section();

        $this->start_controls_section(
			'typography_section',
			[
				'label' => __( 'Typography Controls', ' fa-mc' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typo',
				'label' => __( 'Title', ' fa-mc' ),
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .teamTraining  .main-title',
			]
		);
		$this->add_control(
			'label_color',
			[
				'label' => __( 'Color title', 'elementor-pro' ),
				'type' =>\Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teamTraining  .main-title' => 'color: {{VALUE}};',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'desc_typo',
				'label' => __( 'Description', ' fa-mc' ),
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_2,
				'selector' => '{{WRAPPER}} .teamTraining .mc-description',
			]
		);
		$this->add_control(
			'label_color description',
			[
				'label' => __( 'Color description', 'elementor-pro' ),
				'type' =>\Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teamTraining .mc-description' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'label_color button',
			[
				'label' => __( 'Color button', 'elementor-pro' ),
				'type' =>\Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .teamTraining  a.button' => 'color: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'unit Item_section',
			[
				'label' => __( 'unit Item  Controls', ' fa-mc' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'label' => __( 'Unit Border', 'elementor-pro' ),
				'name' => 'box_border',
				'selector' => '{{WRAPPER}} .unitItem',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
			'box_padding',
			[
				'label' => __( 'Padding', 'elementor-pro' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .unitItem' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'box_border_radius',
			[
				'label' => __( 'Border Radius', 'elementor-pro' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .unitItem' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'unit Package',
			[
				'label' => __( 'unit Package  Controls', ' fa-mc' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'box_padding Package',
			[
				'label' => __( 'Padding unit Package', 'elementor-pro' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .unitPackage' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'label' => __( 'Package Border', 'elementor-pro' ),
				'name' => 'box_border1',
				'selector' => '{{WRAPPER}} .unitPackage',
				'separator' => 'before',
			]
		);
		$this->add_control(
			'box_border_radius Package  ',
			[
				'label' => __( 'Border Radius Package', 'elementor-pro' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					' {{WRAPPER}} .unitPackage' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'label_color',
			[
				'label' => __( 'Color button', 'elementor-pro' ),
				'type' =>\Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} a.button' => 'color: {{VALUE}};',
				],
			]
		);

        $this->end_controls_section();
		$this->start_controls_section(
			'section_style',
			[
				'label' => esc_html__( 'Button', 'elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'hover_color',
			[
				'label' => esc_html__( 'Text Color', 'elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .add-to-cart, {{WRAPPER}} .add-to-cart:focus' => 'color: {{VALUE}};',
					'{{WRAPPER}} .add-to-cart svg, {{WRAPPER}} .add-to-cart:focus svg' => 'fill: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'button_background_hover',
				'label' => esc_html__( 'Background', 'elementor' ),
				'types' => [ 'classic', 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .add-to-cart, {{WRAPPER}} .add-to-cart:focus',
				'fields_options' => [
					'background' => [
						'default' => 'classic',
					],
				],
			]
		);

		$this->add_control(
			'button_hover_border_color',
			[
				'label' => esc_html__( 'Border Color', 'elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'border_border!' => '',
				],
				'selectors' => [
					'{{WRAPPER}} .add-to-cart, {{WRAPPER}} .add-to-cart:focus' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'hover_animation',
			[
				'label' => esc_html__( 'Hover Animation', 'elementor' ),
				'type' => \Elementor\Controls_Manager::HOVER_ANIMATION,
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'selector' => '{{WRAPPER}} .add-to-cart',
				'separator' => 'before',
			]
		);

		$this->add_control(
			'border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .add-to-cart' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'button_box_shadow',
				'selector' => '{{WRAPPER}} .add-to-cart',
			]
		);

		$this->add_responsive_control(
			'text_padding',
			[
				'label' => esc_html__( 'Padding', 'elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .add-to-cart' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);
	

		$this->end_controls_tab();

	}

	/**
	 * Render Team Traning widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		$_product = wc_get_product( $product_id );
		$settings = $this->get_settings_for_display();
        if ( $settings['material_card'] ) {
                echo '<div class="row" id="teamTraing-Fa">';
                foreach (  $settings['material_card'] as $item ) { ?>

<div class="col-md-4 mx-auto unitItem elementor-repeater-item-<?php echo $item['_id'] ?>"
    id="<?php echo $item['unique_id'] ?>">
    <div class="teamTraining ">
        <h2 class="main-title"><?php echo $item['card_title'] ?></h2>

        <div class="mc-description">
            <?php echo $item['card_description'] ?>
        </div>
        <form action="checkout/?add-to-cart=<?php echo $item['Product_id'] ?>" class="cart" method="post"
            enctype="multipart/form-data">
            <a class="button">-</a>
            <input type="number" id="<?php echo $item['card_subtitle'] ?>" class="input sub-title"
                min="<?php echo $item['value_min'] ?>" max="<?php echo $item['value_max'] ?>" name="quantity"
                value="<?php echo $item['value_min'] ?>" title="Qty" size="4" placeholder="" inputmode="numeric">
            <a class="button">+</a>
            <p id="demo"></p>

            <button type="submit" data-quantity="1" data-product_id="<?php echo $item['card_subtitle'] ?>"
                class="add-to-cart button alt ajax_add_to_cart add_to_cart_button product_type_simple">Add to
                cart</button>

        </form>
    </div>
</div>
<?php }
?>

<div class="col-md-8 unitPackage">
    <table>
        <thead>
            <tr>

                <th>Amount</th>
                <th> Per Unit Price </th>
                <th> Save </th>
            </tr>
        </thead>

        <tbody>
            <?php	if ( $settings['material_card'] ) {
                echo ' <tr class="active">';
                foreach (  $settings['material_card'] as $item ) { ?>
            <td><?php echo $item['Amount'] ?> </td>
            <td><?php echo $item['value_price'] ?></td>
            <td><?php echo $item['Amount_Save'] ?></td>
            </tr>
            <?php                  echo '</tr>'; } 
?>
        </tbody>
    </table>
</div>

<?php }
?>

<?php
                echo '</div>';

        }
        ?>

<script>
jQuery(function() {
    jQuery("a.button").on("click", function() {
        var $button = jQuery(this);
        var $parent = $button.parent();
        var oldValue = $parent.find('.input').val();
        var inputValue = $parent.find('input#inputOne').val();
        var inputValue2 = $parent.find('input#inputtwo').val();
        var inputValue3 = $parent.find('input#inputthree').val();
        var inputValue4 = $parent.find('input#inputfour').val();
        var inputValue5 = $parent.find('input#inputfive').val();
        var inputValue6 = $parent.find('input#inputsix').val();


        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        if (inputValue > 49) {
            alert('val')
            jQuery('#two').show();
            jQuery('#one').hide();
            jQuery('#three').hide();
            jQuery('#four').hide();
            jQuery('#five').hide();
            jQuery('#six').hide();

            jQuery("tbody tr:nth-child(2)").addClass("active")
            jQuery("tbody tr:nth-child(1)").removeClass("active")
            jQuery("tbody tr:nth-child(3)").removeClass("active")
            jQuery("tbody tr:nth-child(4)").removeClass("active")
            jQuery("tbody tr:nth-child(5)").removeClass("active")
            jQuery("tbody tr:nth-child(6)").removeClass("active")
        }

        if (inputValue2 < 50) {
            alert('val')
            jQuery('#one').show();
            jQuery('#two').hide();
            jQuery('#three').hide();
            jQuery('#four').hide();
            jQuery('#five').hide();
            jQuery('#six').hide();

            jQuery("tbody tr:nth-child(1)").addClass("active")
            jQuery("tbody tr:nth-child(2)").removeClass("active")
            jQuery("tbody tr:nth-child(3)").removeClass("active")
            jQuery("tbody tr:nth-child(4)").removeClass("active")
            jQuery("tbody tr:nth-child(5)").removeClass("active")
            jQuery("tbody tr:nth-child(6)").removeClass("active")
        } else if (inputValue2 > 100) {
            alert('val')
            jQuery('#three').show();
            jQuery('#two').hide();
            jQuery('#one').hide();
            jQuery('#four').hide();
            jQuery('#five').hide();
            jQuery('#six').hide();
            jQuery("tbody tr:nth-child(3)").addClass("active")
            jQuery("tbody tr:nth-child(2)").removeClass("active")
            jQuery("tbody tr:nth-child(1)").removeClass("active")
            jQuery("tbody tr:nth-child(4)").removeClass("active")
            jQuery("tbody tr:nth-child(5)").removeClass("active")
            jQuery("tbody tr:nth-child(6)").removeClass("active")
        } else if (inputValue3 < 100) {
            alert('val')
            jQuery('#two').show();
            jQuery('#three').hide();
            jQuery('#one').hide();
            jQuery('#four').hide();
            jQuery('#five').hide();
            jQuery('#six').hide();
            jQuery("tbody tr:nth-child(2)").addClass("active")
            jQuery("tbody tr:nth-child(3)").removeClass("active")
            jQuery("tbody tr:nth-child(1)").removeClass("active")
            jQuery("tbody tr:nth-child(4)").removeClass("active")
            jQuery("tbody tr:nth-child(5)").removeClass("active")
            jQuery("tbody tr:nth-child(6)").removeClass("active")
        } else if (inputValue4 < 500) {
            alert('val')
            jQuery('#three').show();
            jQuery('#two').hide();
            jQuery('#one').hide();
            jQuery('#four').hide();
            jQuery('#five').hide();
            jQuery('#six').hide();
            jQuery("tbody tr:nth-child(3)").addClass("active")
            jQuery("tbody tr:nth-child(2)").removeClass("active")
            jQuery("tbody tr:nth-child(1)").removeClass("active")
            jQuery("tbody tr:nth-child(4)").removeClass("active")
            jQuery("tbody tr:nth-child(5)").removeClass("active")
            jQuery("tbody tr:nth-child(6)").removeClass("active")
        } else if (inputValue3 > 499) {
            jQuery('#four').show();
            jQuery('#three').hide();
            jQuery('#two').hide();
            jQuery('#one').hide();
            jQuery('#five').hide();
            jQuery('#six').hide();
            jQuery("tbody tr:nth-child(4)").addClass("active")
            jQuery("tbody tr:nth-child(3)").removeClass("active")
            jQuery("tbody tr:nth-child(1)").removeClass("active")
            jQuery("tbody tr:nth-child(2)").removeClass("active")
            jQuery("tbody tr:nth-child(5)").removeClass("active")
            jQuery("tbody tr:nth-child(6)").removeClass("active")
        } else if (inputValue4 > 499) {
            jQuery('#five').show();
            jQuery('#four').hide();
            jQuery('#two').hide();
            jQuery('#one').hide();
            jQuery('#three').hide();
            jQuery('#six').hide();
            jQuery("tbody tr:nth-child(5)").addClass("active")
            jQuery("tbody tr:nth-child(4)").removeClass("active")
            jQuery("tbody tr:nth-child(1)").removeClass("active")
            jQuery("tbody tr:nth-child(2)").removeClass("active")
            jQuery("tbody tr:nth-child(3)").removeClass("active")
            jQuery("tbody tr:nth-child(6)").removeClass("active")
        } else if (inputValue5 > 100) {
            jQuery('#six').show();
            jQuery('#four').hide();
            jQuery('#two').hide();
            jQuery('#one').hide();
            jQuery('#three').hide();
            jQuery('#five').hide();
            jQuery("tbody tr:nth-child(6)").addClass("active")
            jQuery("tbody tr:nth-child(5)").removeClass("active")
            jQuery("tbody tr:nth-child(4)").removeClass("active")
            jQuery("tbody tr:nth-child(1)").removeClass("active")
            jQuery("tbody tr:nth-child(2)").removeClass("active")
            jQuery("tbody tr:nth-child(3)").removeClass("active")
        } else if (inputValue6 > 100) {
            jQuery('#seven').show();
            jQuery('#six').hide();
            jQuery('#four').hide();
            jQuery('#two').hide();
            jQuery('#one').hide();
            jQuery('#three').hide();
            jQuery('#five').hide();
            jQuery("tbody tr:nth-child(7)").addClass("active")
            jQuery("tbody tr:nth-child(6)").removeClass("active")
            jQuery("tbody tr:nth-child(4)").removeClass("active")
            jQuery("tbody tr:nth-child(1)").removeClass("active")
            jQuery("tbody tr:nth-child(2)").removeClass("active")
            jQuery("tbody tr:nth-child(3)").removeClass("active")
            jQuery("tbody tr:nth-child(5)").removeClass("active")
        }
        $parent.find('.add-to-cart').attr('data-quantity', newVal);
        $parent.find('.input').val(newVal);
    });
});
</script>
<script>
jQuery("tbody tr:nth-child(1)").click(function() {
    jQuery('#one').show();
    jQuery('#two').hide();
    jQuery('#three').hide();
    jQuery('#four').hide();
    jQuery('#five').hide();
    jQuery('#six').hide();

    jQuery("tbody tr:nth-child(1)").addClass("active")
    jQuery("tbody tr:nth-child(2)").removeClass("active")
    jQuery("tbody tr:nth-child(3)").removeClass("active")
    jQuery("tbody tr:nth-child(4)").removeClass("active")
    jQuery("tbody tr:nth-child(5)").removeClass("active")
    jQuery("tbody tr:nth-child(6)").removeClass("active")
})


jQuery("tbody tr:nth-child(2)").click(function() {
    jQuery('#two').show();
    jQuery('#three').hide();
    jQuery('#one').hide();
    jQuery('#four').hide();
    jQuery('#five').hide();
    jQuery('#six').hide();
    jQuery("tbody tr:nth-child(2)").addClass("active")
    jQuery("tbody tr:nth-child(1)").removeClass("active")
    jQuery("tbody tr:nth-child(3)").removeClass("active")
    jQuery("tbody tr:nth-child(4)").removeClass("active")
    jQuery("tbody tr:nth-child(5)").removeClass("active")
    jQuery("tbody tr:nth-child(6)").removeClass("active")
})
jQuery("tbody tr:nth-child(3)").click(function() {
    jQuery('#three').show();
    jQuery('#two').hide();
    jQuery('#one').hide();
    jQuery('#four').hide();
    jQuery('#five').hide();
    jQuery('#six').hide();
    jQuery("tbody tr:nth-child(3)").addClass("active")
    jQuery("tbody tr:nth-child(1)").removeClass("active")
    jQuery("tbody tr:nth-child(2)").removeClass("active")
    jQuery("tbody tr:nth-child(4)").removeClass("active")
    jQuery("tbody tr:nth-child(5)").removeClass("active")
    jQuery("tbody tr:nth-child(6)").removeClass("active")
})
jQuery("tbody tr:nth-child(4)").click(function() {
    jQuery('#four').show();
    jQuery('#two').hide();
    jQuery('#one').hide();
    jQuery('#three').hide();
    jQuery('#five').hide();
    jQuery('#six').hide();
    jQuery("tbody tr:nth-child(4)").addClass("active")
    jQuery("tbody tr:nth-child(1)").removeClass("active")
    jQuery("tbody tr:nth-child(2)").removeClass("active")
    jQuery("tbody tr:nth-child(3)").removeClass("active")
    jQuery("tbody tr:nth-child(5)").removeClass("active")
    jQuery("tbody tr:nth-child(6)").removeClass("active")
})
jQuery("tbody tr:nth-child(5)").click(function() {
    jQuery('#four').show();
    jQuery('#two').hide();
    jQuery('#one').hide();
    jQuery('#three').hide();
    jQuery('#five').hide();
    jQuery('#six').hide();
    jQuery("tbody tr:nth-child(5)").addClass("active")
    jQuery("tbody tr:nth-child(4)").removeClass("active")
    jQuery("tbody tr:nth-child(1)").removeClass("active")
    jQuery("tbody tr:nth-child(2)").removeClass("active")
    jQuery("tbody tr:nth-child(3)").removeClass("active")
    jQuery("tbody tr:nth-child(6)").removeClass("active")
})
jQuery("tbody tr:nth-child(6)").click(function() {
    jQuery('#four').show();
    jQuery('#two').hide();
    jQuery('#one').hide();
    jQuery('#three').hide();
    jQuery('#five').hide();
    jQuery('#six').hide();
    jQuery("tbody tr:nth-child(6)").addClass("active")
    jQuery("tbody tr:nth-child(4)").removeClass("active")
    jQuery("tbody tr:nth-child(1)").removeClass("active")
    jQuery("tbody tr:nth-child(2)").removeClass("active")
    jQuery("tbody tr:nth-child(3)").removeClass("active")
    jQuery("tbody tr:nth-child(5)").removeClass("active")
})
</script>
<?php

	}

}