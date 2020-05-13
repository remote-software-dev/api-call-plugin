<?php
class Apicall_Widget extends WP_Widget
{
    /**
     * Register widget with WordPress.
     */
    function __construct()
    {
        parent::__construct(
            'apicall_widget', // Base ID
            esc_html__('Api Call', 'apicall_domain'), // Name
            array('description' => esc_html__(
                'A plugin for calling data api from jsonplaceholder',
                'apicall_domain'
            ),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance)
    {
        echo $args['before_widget']; //Whatever we want to display before widget (<div>, etc)

        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        //Widget content Output
        echo esc_html__( 'Hello, This is plugin for api call!', 'apicall_domain' );
        

        echo $args['after_widget']; //Whatever you want to display after widget (<div>, etc)
    }

    /**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? 
        $instance['title'] : esc_html__( 'Plugin development', 'apicall_domain' );
        
        ?>
		<p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
                <?php esc_attr_e( 'Title:', 'apicall_domain' ); ?>
            </label> 
		    <input 
                class="widefat" 
                id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" 
                name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" 
                type="text" 
                value="<?php echo esc_attr( $title ); ?>">
		</p>
        <?php 

    }

    /**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
        $instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? 
        sanitize_text_field( $new_instance['title'] ) : '';
        
        return $instance;
    }
}
