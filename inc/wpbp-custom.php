<?php

// ENQUEUE
function enqueue()
{
	if ( !is_admin() ) {
	  	wpbp_enqueue_lib(array( 'modernizr', 'jquery', 'wpbp', 'scrollTo' ));
		// scripts
		wp_enqueue_script('theme', THEME_URI . '/js/scripts.js', array('jquery'), '2.0');
		// styles
		wp_enqueue_style('open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700');
		wp_enqueue_style('master', THEME_URI . '/css/master.css', array('wpbp'));
	}
}
add_action('init', 'enqueue');


/**
 * SOSEndettement: Section Widget
 * Displays the latest posts
 */

class sosendettement_section_widget extends WP_Widget
{
    function sosendettement_section_widget() {
        $widget_ops = array('description' => 'Displays a section');
        parent::WP_Widget(false, __('SOSEndettement: Section Widget', 'wpbp'), $widget_ops);
    }

	function widget($args, $instance) {
		extract($args);
		extract($instance);

		echo $before_widget;

		$id = $id ? ' id="' . $id . '"' : '';
		$class = ' class="section-widget"';
		$style = $css ? ' style="' . $css . '"' : '';

		echo '<div' . $id . $class . '>';
		echo '<div class="section-widget-styler"' . $style . '>';
		echo '<div class="section-widget-content">';

		if ( isset($type) && strlen($type) > 0 ) {
			echo '<span class="type">' . $type . '</span>';
			echo '<div class="clear"></div>';
		}

		if ( isset($title) && strlen($title) > 0 ) {
			echo $before_title . $title . $after_title;
		}

		if ( isset($description) && strlen($description) > 0 ) {
			echo '<p class="description">' . $description . '</p>';
		}

		if ( ( isset($url) && strlen($url) > 0 ) && ( isset($button) && strlen($button) > 0 ) ) {
			$target = $target ? ' target="_blank"' : '';
			$nofollow = $nofollow ? ' rel="nofollow"' : '';
			echo '<a class="button red" href="' . $url . '" title="' . $title . '"' . $target . $nofollow . '>' . $button . '</a>';
		}

		echo '</div>';
		echo '</div>';
		echo '</div>';

		echo $after_widget;
	}

	function update($new_instance, $old_instance) {
		return $new_instance;
	}

	function form($instance) {
		$fields = array(
			'id' => array(
				'id' => $this->get_field_id('id'),
				'name' => $this->get_field_name('id'),
				'label' => '#ID:',
				'type' => 'text',
				'class' => 'widefat'
			),
			'type' => array(
				'id' => $this->get_field_id('type'),
				'name' => $this->get_field_name('type'),
				'label' => 'Type:',
				'type' => 'text',
				'class' => 'widefat'
			),
			'title' => array(
				'id' => $this->get_field_id('title'),
				'name' => $this->get_field_name('title'),
				'label' => 'Title:',
				'type' => 'text',
				'class' => 'widefat',
				'required' => true
			),
			'description' => array(
				'id' => $this->get_field_id('description'),
				'name' => $this->get_field_name('description'),
				'label' => 'Description:',
				'type' => 'textarea',
				'class' => 'widefat'
			),
			'css' => array(
				'id' => $this->get_field_id('css'),
				'name' => $this->get_field_name('css'),
				'label' => 'Style (css):',
				'type' => 'text',
				'class' => 'widefat'
			),
			'url' => array(
				'id' => $this->get_field_id('url'),
				'name' => $this->get_field_name('url'),
				'label' => 'URL:',
				'type' => 'text',
				'class' => 'widefat'
			),
			'button' => array(
				'id' => $this->get_field_id('button'),
				'name' => $this->get_field_name('button'),
				'label' => 'Button Text:',
				'type' => 'text',
				'class' => 'widefat'
			),
			'target' => array(
				'id' => $this->get_field_id('target'),
				'name' => $this->get_field_name('target'),
				'label' => '_blank?',
				'type' => 'checkbox'
			),
			'nofollow' => array(
				'id' => $this->get_field_id('nofollow'),
				'name' => $this->get_field_name('nofollow'),
				'label' => 'nofollow?',
				'type' => 'checkbox'
			)
		);
		wpbp_build_form($fields, $instance);
	}
}
register_widget('sosendettement_section_widget');
