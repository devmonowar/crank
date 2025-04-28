<?php
/**
 * Custom Recent Posts Widget
 *
 * @package YourTheme
 */

class Custom_Recent_Posts_Widget extends WP_Widget {
    // Constructor
    public function __construct() {
        parent::__construct(
            'custom_recent_posts_widget',
            'Custom Recent Posts',
            array(
                'description' => 'Display recent posts with custom markup.',
            )
        );
    }

    // Widget Output
    public function widget($args, $instance) {
        echo $args['before_widget'];

        // Display widget title
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        // Your custom markup goes here
        echo '<div class="sidebar__post">';

        // Query recent posts
        $order = ($instance['order'] == 'asc') ? 'ASC' : 'DESC';
        $recent_posts = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => $instance['number'],
            'order' => $order,
        ));

        // Loop through recent posts
        while ($recent_posts->have_posts()) {
            $recent_posts->the_post();
            ?>
            <div class="rc__post mb-25 d-flex align-items-center">
                <div class="rc__post-thumb mr-20">
                    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt=""></a>
                </div>
                <div class="rc__post-content">
                    <div class="rc__meta">
                        <span><i class="fa-light fa-clock"></i> <?php echo get_the_date(); ?> </span>
                    </div>
                    <h3 class="rc__post-title">
                        <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 3); ?></a>
                    </h3>
                </div>
            </div>
            <?php
        }

        echo '</div>';
        echo $args['after_widget'];
    }

    // Widget Form (Backend)
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : 'Recent Posts';
        $number = !empty($instance['number']) ? $instance['number'] : 5;
        $order = isset($instance['order']) ? $instance['order'] : 'desc';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('number'); ?>">Number of posts to show:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="number" value="<?php echo esc_attr($number); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('order'); ?>">Post Order:</label>
            <select id="<?php echo $this->get_field_id('order'); ?>" name="<?php echo $this->get_field_name('order'); ?>">
                <option value="desc" <?php selected($order, 'desc'); ?>>Descending</option>
                <option value="asc" <?php selected($order, 'asc'); ?>>Ascending</option>
            </select>
        </p>
        <?php
    }

    // Save Widget Form Data
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['number'] = !empty($new_instance['number']) ? intval($new_instance['number']) : 5;
        $instance['order'] = in_array($new_instance['order'], array('asc', 'desc')) ? $new_instance['order'] : 'desc';

        return $instance;
    }
}

// Register the widget
function register_custom_recent_posts_widget() {
    register_widget('Custom_Recent_Posts_Widget');
}

add_action('widgets_init', 'register_custom_recent_posts_widget');
