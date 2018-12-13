<?php
/**
 * Created by Anushka K R.
 * Dev. Ref: http://www.anushkar.com
 * Dev. Public Profile: https://www.upwork.com/fl/anushkakrajasingha
 * Date: 12/14/2017
 * Time: 5:38 PM
 */
?>
<div class="container">

<?php include_once 'home-banner.php'; ?>

    <div class="section-1 fz-18">
       <!-- <div class="main-title text-center">About Bound Round</div> -->
        <div class="row">
            <div class="col-md-12 pb-5">
                <?php dynamic_sidebar( 'br_f_h_main_widget' ); ?>
        <!--<p>Bound Round started as a kids travel app and over six years has evolved to become the parent company of the largest, integrated family travel platform in Asia Pacific familytravel.com.au.
            </p><p>The Bound Round team of in-house technology, communications and consulting specialists now support travel and tourism clients to achieve their business objectives.  We leverage our travel industry lessons learned, connections and the corporate backgrounds of our team to deliver projects and campaigns that have measureable results for our clients.
        </p>-->
                </div>
            </div>
        <div class="row">
            <div class="col-md-4 pb-5">
                <div class="block-wrap block-wrap-1 d-flex justify-content-end align-items-end">
                    <div class="logo-wrap d-flex p-4"><amp-img src="<?php echo  get_stylesheet_directory_uri(); ?>/img/1.1.png" width="154" height="154" alt="AMP" class="m-auto"><div fallback>offline</div></amp-img></div>
                    <amp-img src="<?php echo  get_stylesheet_directory_uri(); ?>/img/1.jpg" width="380" height="180" alt="AMP">
                        <div fallback>offline</div>
                    </amp-img>
                </div>
                <p>
                    <?php dynamic_sidebar( 'br_f_h_col1_widget' ); ?>
                </p>
            </div>
            <div class="col-md-4 pb-5">
                <div class="block-wrap block-wrap-2 d-flex align-items-end">
                    <div class="logo-wrap d-flex p-4"><amp-img src="<?php echo  get_stylesheet_directory_uri(); ?>/img/3.png" width="237" height="51" alt="AMP" class="m-auto"> <div fallback>offline</div></amp-img></div>
                    <amp-img src="<?php echo  get_stylesheet_directory_uri(); ?>/img/3.jpg" width="280" height="270" alt="AMP"> <div fallback>offline</div></amp-img>
                </div>
                <p class="mb-big">
                    <?php dynamic_sidebar( 'br_f_h_col2_widget' ); ?>
                </p>
            </div>
            <div class="col-md-4 pb-5">
                <div class="block-wrap block-wrap-3 d-flex justify-content-end">
                <div class="logo-wrap d-flex p-4"><amp-img src="<?php echo  get_stylesheet_directory_uri();?>/img/2.2.png" width="300" height="41" alt="AMP" class="m-auto"> <div fallback>offline</div></amp-img></div>
                    <amp-img src="<?php echo  get_stylesheet_directory_uri(); ?>/img/2.jpg" width="320" height="270" alt="AMP"> <div fallback>offline</div></amp-img>
                    
                </div>
                <p class="mb-big">
                    <?php dynamic_sidebar( 'br_f_h_col3_widget' ); ?>
                    </p>
            </div>
        </div>
    </div>

</div>