<?php

defined('ABSPATH') or die();
defined("DS") or define("DS", DIRECTORY_SEPARATOR);
add_action( 'widgets_init', create_function( '', 'register_widget("Recent_Blog_Posts");' ) );

class Recent_Blog_Posts extends WP_Widget
{
	protected $widget = array(
		'description' => 'Displays a nice list of recent blog posts with custom category labels',
		'do_wrapper' => true, 
		'view' => false,	
		'fields' => array(
			// You should always offer a widget title
			array(
				'name' => 'Title',
				'desc' => '',
				'id' => 'title',
				'type' => 'text',
				'std' => 'Widget Title'
			)
		)
	);
	
	/*
	 * Widget HTML
	 *
	 * @param array $widget
	 * @param array $params
	 * @param array $sidebar
	 */
	function html($widget, $params, $sidebar)
	{
		echo '<h2>News</h2>';
		?>
		 <ul>
		<?php
		global $post;
		$args = array( 'numberposts' => 3);
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) :	setup_postdata($post); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php
			foreach(wp_get_post_tags($post->ID) as $tag){
				switch(strtolower($tag->name)){
					case 'release':
						echo '<span class="label important">Release</span>';
					break;
					default:
						echo '<span class="label">'.$tag->name.'</span>';
					break;
				}	
			}
			?>
			</li>
		<?php endforeach; ?>
		</ul>

		<!-- Your widget html goes here -->
		<?php 
	}

	function Recent_Blog_Posts()
	{
		//Initializing
		$classname = str_replace('_',' ', get_class($this));
		
		parent::WP_Widget( 
			$id = $classname, 
			$name = (isset($this->widget['name'])?$this->widget['name']:$classname), 
			$options = array( 'description'=>$this->widget['description'] )
		);
	}
	
	/*
	 * Widget View
	 *
	 * @param array $sidebar
	 * @param array $params
	 */
	function widget($sidebar, $params)
	{
		//initializing variables
		$this->widget['number'] = $this->number;
		$title = apply_filters( 'Empty_Widget_title', $params['title'] );
		$do_wrapper = (!isset($this->widget['do_wrapper']) || $this->widget['do_wrapper']);
		
		if ( $do_wrapper ) 
			echo $sidebar['before_widget'];
		
		//loading a file that is isolated from other variables
		if (file_exists($this->widget['view']))
			$this->getViewFile($widget, $params, $sidebar);
			
		if ($this->widget['view'])
			echo $this->widget['view'];
			
		else $this->html($this->widget, $params, $sidebar);
			
		if ( $do_wrapper ) 
			echo $sidebar['after_widget'];
	}
	
	/*
	 * Administration Form
	 * 
	 * This method is called from within the wp-admin/widgets area when this
	 * widget is placed into a sidebar. The resulting is a widget options form
	 * that allows the administration to modify how the widget operates.
	 * 
	 * You do not need to adjust this method what-so-ever, it will parse the array
	 * parameters given to it from the protected widget property of this class.
	 *
	 * @param array $instance
	 * @return boolean
	 */
	function form($instance)
	{
		//reasons to fail
		if (empty($this->widget['fields'])) return false;
		
		$defaults = array(
			'id' => '',
			'name' => '',
			'desc' => '',
			'type' => '',
			'options' => '',
			'std' => '',
		);
		
		do_action('Empty_Widget_before');
		foreach ($this->widget['fields'] as $field)
		{
			//making sure we don't throw strict errors
			$field = wp_parse_args($field, $defaults);

			$meta = false;
			if (isset($field['id']) && array_key_exists($field['id'], $instance))
				@$meta = attribute_escape($instance[$field['id']]);

			if ($field['type'] != 'custom' && $field['type'] != 'metabox') 
			{
				echo '<p><label for="',$this->get_field_id($field['id']),'">';
			}
			if (isset($field['name']) && $field['name']) echo $field['name'],':';

			switch ($field['type'])
			{
				case 'text':
					echo '<input type="text" name="', $this->get_field_name($field['id']), '" id="', $this->get_field_id($field['id']), '" value="', ($meta ? $meta : @$field['std']), '" class="vibe_text" />', 
					'<br/><span class="description">', @$field['desc'], '</span>';
					break;
				case 'textarea':
					echo '<textarea class="vibe_textarea" name="', $this->get_field_name($field['id']), '" id="', $this->get_field_id($field['id']), '" cols="60" rows="4" style="width:97%">', $meta ? $meta : @$field['std'], '</textarea>', 
					'<br/><span class="description">', @$field['desc'], '</span>';
					break;
				case 'select':
					echo '<select class="vibe_select" name="', $this->get_field_name($field['id']), '" id="', $this->get_field_id($field['id']), '">';

					foreach ($field['options'] as $value => $option)
					{
 					   $selected_option = ( $value ) ? $value : $option;
					    echo '<option', ($value ? ' value="' . $value . '"' : ''), ($meta == $selected_option ? ' selected="selected"' : ''), '>', $option, '</option>';
					}

					echo '</select>', 
					'<br/><span class="description">', @$field['desc'], '</span>';
					break;
				case 'radio':
					foreach ($field['options'] as $option)
					{
						echo '<input class="vibe_radio" type="radio" name="', $this->get_field_name($field['id']), '" value="', $option['value'], '"', ($meta == $option['value'] ? ' checked="checked"' : ''), ' />', 
						$option['name'];
					}
					echo '<br/><span class="description">', @$field['desc'], '</span>';
					break;
				case 'checkbox':
					echo '<input type="hidden" name="', $this->get_field_name($field['id']), '" id="', $this->get_field_id($field['id']), '" /> ', 
						 '<input class="vibe_checkbox" type="checkbox" name="', $this->get_field_name($field['id']), '" id="', $this->get_field_id($field['id']), '"', $meta ? ' checked="checked"' : '', ' /> ', 
					'<br/><span class="description">', @$field['desc'], '</span>';
					break;
				case 'custom':
					echo $field['std'];
					break;
			}

			if ($field['type'] != 'custom' && $field['type'] != 'metabox') 
			{
				echo '</label></p>';
			}
		}
		do_action('Empty_Widget_after');
		return true;
	}

	/**
	 * Update the Administrative parameters
	 * 
	 * This function will merge any posted paramters with that of the saved
	 * parameters. This ensures that the widget options never get lost. This
	 * method does not need to be changed.
	 *
	 * @param array $new_instance
	 * @param array $old_instance
	 * @return array
	 */
	function update($new_instance, $old_instance)
	{
		// processes widget options to be saved
		$instance = wp_parse_args($new_instance, $old_instance);
		return $instance;
	}

}