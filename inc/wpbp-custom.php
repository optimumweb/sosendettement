<?php

// ENQUEUE
function enqueue() {
	if ( !is_admin() ) {
		// scripts
		wpbp_enqueue_scripts( array( 'modernizr', 'jquery', 'wpbp' ) );
		wp_enqueue_script('theme', THEME_URI . '/js/scripts.js', array('jquery', 'wpbp'));
		// styles
		wpbp_enqueue_styles( array( '960gs', 'default' ) );
		wp_enqueue_style('theme', THEME_URI . '/css/master.css', array('default'));
	}
}
add_action('init', 'enqueue');


/**
 * SOSEndettement: Section Widget
 * Displays the latest posts
 */

class sosendettement_section_widget extends WP_Widget {

    function sosendettement_section_widget() {
		$widget_ops = array('description' => 'Displays a section');
		parent::WP_Widget(false, __('SOSEndettement: Section Widget', 'wpbp'), $widget_ops);
	}

	function widget($args, $instance) {
		extract($args);
		extract($instance);

		echo $before_widget;
		
		if ( isset($title) && strlen($title) > 0 ) {
			echo $before_title . $title . $after_title;
		}
		
		echo '<p class="description">' . $description . '</p>';
		
		echo '<p><a class="button" href="' . $url . '">' . $button . '</a></p>';

		echo $after_widget;

	}

	function update($new_instance, $old_instance) {
		return $new_instance;
	}

	function form($instance) {
		$fields = array(
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
				'type' => 'textarea'
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
				'id' => $this->get_field_id('button'),
				'name' => $this->get_field_name('button'),
				'label' => 'Button Link Target:',
				'type' => 'dropdown',
				'required' => true,
				'options' => array(
					'_self' => '_self',
					'_blank' => '_blank',
					'_parent' => '_parent',
					'_top' => '_top'
				),
				'defval' => '_self'
			),
			'rel' => array(
				'id' => $this->get_field_id('rel'),
				'name' => $this->get_field_name('rel'),
				'label' => 'Button Link Rel:',
				'type' => 'dropdown',
				'required' => true,
				'options' => array(
					'follow' => 'follow',
					'nofollow' => 'nofollow'
				),
				'defval' => 'follow'
			)
		);
		wpbp_build_form($fields, $instance);
	}
}

register_widget('wpbp_latest_posts');