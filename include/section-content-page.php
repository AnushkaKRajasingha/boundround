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

<?php include_once 'page-banner.php'; ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="section-1 fz-18">
        <div class="main-title text-center"><?php the_title(); ?></div>
        <div class="row">
            <div class="col-md-12 pb-5">
<?php the_content(); ?>

             </div>
            </div>

    </div>
    <?php endwhile; ?>
</div>