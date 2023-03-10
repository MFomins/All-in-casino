<?php

class All_In_Casino_Widget_Casino_Slots extends WP_Widget
{

    /**
     * Sets up the widgets name etc
     */
    public function __construct()
    {
        $widget_ops = array(
            'classname' => '',
            'description' => 'Display Casino Slot',
        );
        parent::__construct('casino_slot', 'Casino Slot', $widget_ops);
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
        $widget_id = $args['widget_id'];

        echo $args['before_widget'];

        echo $args['before_title'];
        //Widget Title
        echo get_field('header', 'widget_' . $widget_id);
        echo $args['after_title'];

        $loop_args = array(
            'post_type' => 'casino-slot',
            'posts_per_page' => 1
        );

        $loop = new WP_Query($loop_args);

        echo '<div class="casino-slots-widget">';

        while ($loop->have_posts()) :

            $loop->the_post();

            include ALL_IN_CASINO_BASE_DIR . 'templates/casino-slots/widgets/casino-slot-widget.php';

        endwhile;

        echo '</div>';

        echo $args['after_widget'];
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form($instance)
    {
        // outputs the options form on admin
    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     *
     * @return array
     */
    public function update($new_instance, $old_instance)
    {
        // processes widget options to be saved
    }
}
