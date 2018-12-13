<?php
/**
 * Created by Anushka K R.
 * Dev. Ref: http://www.anushkar.com
 * Dev. Public Profile: https://www.upwork.com/fl/anushkakrajasingha
 * Date: 12/14/2017
 * Time: 12:00 AM
 */


if (!defined('ABSPATH')) die();

include_once 'include/menuWalker.php';

if(!function_exists('br__enqueue_parent')) {
    function br__enqueue_parent()
    {
        wp_enqueue_style('bootstrap_css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
      //  wp_enqueue_style('br_temp_css', 'https://corporate.boundround.com/wp-content/themes/loom/style/type/fontello.css?ver=4.6.9');

        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style('owlcarousel', get_stylesheet_directory_uri() . '/js/owlcarousel/assets/owl.carousel.css');
        wp_enqueue_style('owlcarousel_theme', get_stylesheet_directory_uri() . '/js/owlcarousel/assets/owl.theme.default.css');
        wp_enqueue_style('br_main_css', get_stylesheet_directory_uri() . '/css/style.css');
    }
}
if(!function_exists('br__loadjs')) {
    function br__loadjs()
    {
        wp_enqueue_script('br-amp-script', 'https://cdn.ampproject.org/v0.js',
            array('jquery')
        );
        wp_enqueue_script('br-theme-script', get_stylesheet_directory_uri() . '/ds-script.js',
            array('jquery')
        );
        wp_enqueue_script('br-diyslider-script', get_stylesheet_directory_uri() . '/js/jquery.diyslider.min.js',
            array('jquery')
        );
        wp_enqueue_script('br-themeslider-script', get_stylesheet_directory_uri() . '/js/slider.js',
            array('jquery','br-diyslider-script')
        );
        wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array('jquery'));
        wp_enqueue_script('bootstrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'));
        wp_enqueue_script('menu_fix_js', get_stylesheet_directory_uri() . '/js/menu_fix.js', array('jquery'));
        wp_enqueue_script('owlcarousel', get_stylesheet_directory_uri() . '/js/owlcarousel/owl.carousel.js', array('jquery'));
    }
}

add_action( 'wp_enqueue_scripts', 'br__enqueue_parent' );
add_action( 'wp_enqueue_scripts', 'br__loadjs' );


if ( ! function_exists( 'br_html_body_start' ) ) {
    function br_html_body_start()
    {
        ?>

        <body <?php body_class(); ?>>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container justify-content-between">

                    <div class="w-100 relative">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-auto text-center">
                                <a class="navbar-brand mt-2 mr-0 p-0" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo bloginfo('blogname');?>"></a>
                            </div>
                            <div class="col-auto col-sm static">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse px-0 menu" id="navbarSupportedContent">
                                    <?php include 'include/mainnav.php'; ?>
                                </div>
                            </div>

                            <div class="col">
                                <ul class="navbar-nav socials justify-content-end flex-row">
                                    <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/BoundRound/"><span class="soc soc-1"></span></a></li>
                                    <li class="nav-item"><a class="nav-link" href="https://twitter.com/boundroundaus"><span class="soc soc-2"></span></a></li>
                                    <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/company/bound-round/"><span class="soc soc-3"></span></a></li>
                                    <li class="nav-item"><a class="nav-link" href="https://www.youtube.com/user/BoundRoundGuides"><span class="soc soc-4"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </nav>
        </header>
    <?php
    }
}
add_action('html_body_start','br_html_body_start',10);

add_action( 'widgets_init', 'br_home_main_widgets_init' );
if(!function_exists('br_home_main_widgets_init')){
    function br_home_main_widgets_init(){
        register_sidebar( array(
            'name'          => 'Home main Widget',
            'id'            => 'br_f_h_main_widget',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
    }
}

add_action( 'widgets_init', 'br_home_col1_widgets_init' );
if(!function_exists('br_home_col1_widgets_init')){
    function br_home_col1_widgets_init(){
        register_sidebar( array(
            'name'          => 'Home Column 1 Widget',
            'id'            => 'br_f_h_col1_widget',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
    }
}

add_action( 'widgets_init', 'br_home_col2_widgets_init' );
if(!function_exists('br_home_col2_widgets_init')){
    function br_home_col2_widgets_init(){
        register_sidebar( array(
            'name'          => 'Home Column 2 Widget',
            'id'            => 'br_f_h_col2_widget',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
    }
}

add_action( 'widgets_init', 'br_home_col3_widgets_init' );
if(!function_exists('br_home_col3_widgets_init')){
    function br_home_col3_widgets_init(){
        register_sidebar( array(
            'name'          => 'Home Column 3 Widget',
            'id'            => 'br_f_h_col3_widget',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
    }
}

/*
add_action( 'widgets_init', 'br_f_first_widgets_init' );
if(!function_exists('br_f_first_widgets_init')){
    function br_f_first_widgets_init(){
        register_sidebar( array(
            'name'          => 'Footer First Widget',
            'id'            => 'br_f_first_widget',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
    }
}
add_action( 'widgets_init', 'br_f_second_widgets_init' );
if(!function_exists('br_f_second_widgets_init')){
    function br_f_second_widgets_init(){
        register_sidebar( array(
            'name'          => 'Footer Second Widget',
            'id'            => 'br_f_second_widget',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
    }
}
add_action( 'widgets_init', 'br_f_third_widgets_init' );
if(!function_exists('br_f_third_widgets_init')){
    function br_f_third_widgets_init(){
        register_sidebar( array(
            'name'          => 'Footer Third Widget',
            'id'            => 'br_f_third_widget',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
    }
}
*/
if ( ! function_exists( 'br_html_body_end' ) ) {
    function br_html_body_end()
    {
        ?>
        <footer class="gray">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pb-3">
                    <div class="mb-5" id="footer_first_widget">
                    <?php dynamic_sidebar( 'sidebar-2' ); ?>
                    </div>
                    <p><?php echo et_get_footer_credits(); ?></p>
                </div>
                <div class="col-md-4 pb-3" id="footer_second_widget">
                     <?php dynamic_sidebar( 'sidebar-3' ); ?>
                </div>
                <div class="col-md-4 pb-3" id="footer_third_widget">
                    <?php dynamic_sidebar( 'sidebar-4' ); ?>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
    <?php
    }
}
add_action('html_body_end','br_html_body_end',10);

if ( ! function_exists( 'br_show_page_menu' ) ) {

    function br_show_page_menu($customClass = 'nav clearfix', $addUlContainer = true, $addHomeLink = true){
        //need to be implemented for more features
    }

}
if ( ! function_exists( 'br_show_categories_menu' ) ) {

    function br_show_categories_menu($customClass = 'nav clearfix', $addUlContainer = true){
        //need to be implemented for more features
    }

}

if(!function_exists('isa_amp_featured_img')) {
    /** Template tag to show featured image on AMP */
    function isa_amp_featured_img($size = ‘medium’)
    {
        global $post;

        if (has_post_thumbnail($post->ID)) {

            $thumb_id = get_post_thumbnail_id($post->ID);
            $img = wp_get_attachment_image_src($thumb_id, $size);
            $img_src = $img[0];
            $w = $img[1];
            $h = $img[2];

            $alt = get_post_meta($post->ID, ‘_wp_attachment_image_alt’, true);

            if (empty($alt)) {
                $attachment = get_post($thumb_id);
                $alt = trim(strip_tags($attachment->post_title));
            } ?>

            <amp-img id=”feat-img”
                     src=”<?php echo esc_url($img_src); ?>” <?php if ($img_srcset = wp_get_attachment_image_srcset($thumb_id, $size)) { ?> srcset=”<?php echo esc_attr($img_srcset); ?>” <?php } ?>
                     alt=”<?php echo esc_attr($alt); ?>” width=”<?php echo $w; ?>” height=”<?php echo $h; ?>”>
            </amp-img>
            <?php
        }
    }
}


/* this function prints thumbnail from Post Thumbnail or Custom field or First post image */
if ( ! function_exists( 'print_thumbnail' ) ) {

    function print_thumbnail($thumbnail = '', $use_timthumb = true, $alttext = '', $width = 100, $height = 100, $class = '', $echoout = true, $forstyle = false, $resize = true, $post='', $et_post_id = '' ) {
        if ( is_array( $thumbnail ) ) {
            extract( $thumbnail );
        }

        if ( $post == '' ) global $post, $et_theme_image_sizes;

        $output = '';

        $et_post_id = '' != $et_post_id ? (int) $et_post_id : $post->ID;

        if ( has_post_thumbnail( $et_post_id ) ) {
            $thumb_array['use_timthumb'] = false;

            $image_size_name = $width . 'x' . $height;
            $et_size = isset( $et_theme_image_sizes ) && array_key_exists( $image_size_name, $et_theme_image_sizes ) ? $et_theme_image_sizes[$image_size_name] : array( $width, $height );

            $thumb_id = get_post_thumbnail_id( $et_post_id );

            $et_attachment_image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $et_post_id ), $et_size );
            $thumbnail = $et_attachment_image_attributes[0];
        } else {
            $thumbnail_orig = $thumbnail;

            $thumbnail = et_multisite_thumbnail( $thumbnail );

            $cropPosition = '';

            $allow_new_thumb_method = false;

            $new_method = true;
            $new_method_thumb = '';
            $external_source = false;

            $allow_new_thumb_method = !$external_source && $new_method && $cropPosition == '';

            if ( $allow_new_thumb_method && $thumbnail <> '' ) {
                $et_crop = get_post_meta( $post->ID, 'et_nocrop', true ) == '' ? true : false;
                $new_method_thumb = et_resize_image( et_path_reltoabs( $thumbnail ), $width, $height, $et_crop );
                if ( is_wp_error( $new_method_thumb ) ) $new_method_thumb = '';
            }

            $thumbnail = $new_method_thumb;
        }

        if ( false === $forstyle ) {


 /*           $output = '<img data-theme="child_theme" src="' . esc_url( $thumbnail ) . '"';

            if ($class <> '') $output .= " class='" . esc_attr( $class ) . "' ";

            $dimensions = apply_filters( 'et_print_thumbnail_dimensions', " width='" . esc_attr( $width ) . "' height='" .esc_attr( $height ) . "'" );

            $output .= " alt='" . esc_attr( strip_tags( $alttext ) ) . "'{$dimensions} />";
*/

            $scrset ='';
            if ($img_srcset = wp_get_attachment_image_srcset($thumb_id, $et_size)) {
                $scrset = ' srcset="'.$img_srcset.'" ';
            }

            $output = '<amp-img id=”feat-img-'.$thumb_id.'”';
            $output .= ' src='.esc_url( $thumbnail ).' ';
            $output .= ' '.$scrset.' ';
          //  if ($class <> '') $output .= " class='" . esc_attr( $class ) . "' ";
            $dimensions = apply_filters( 'et_print_thumbnail_dimensions', " width='" . esc_attr( $width ) . "' height='" .esc_attr( $height ) . "'" );
           // $output .= " alt='" . esc_attr( strip_tags( $alttext ) ) . "'{$dimensions}";
            $output .= ' width="'. esc_attr( $width ) . '"  height="' .esc_attr( $height ) . '" ';
            $output .='> <div fallback>offline</div></amp-img>';


            if ( ! $resize ) $output = $thumbnail;
        } else {
            $output = $thumbnail;
        }

        if ($echoout) echo $output;
        else return $output;
    }

}



include('login-editor.php');
?>