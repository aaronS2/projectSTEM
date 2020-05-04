<?php

/**
 * Banner LP Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id = 'banner-lp-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'banner-lp';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}
if (get_field('spacing_top')) {
    $className .= ' p-top';
}
if (get_field('spacing_bottom')) {
    $className .= ' p-bottom';
}
$heading = get_field('banner_lp_heading');
$copy = get_field('banner_lp_copy');
$image = get_field('banner_lp_image');
$type = get_field('banner_lp_design_color');
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-lp--copy">
                <?php if ($heading): ?>
                <h1><?php echo $heading ?></h1>
                <?php endif; ?>
                <?php echo $copy ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-lp--img" style="background-image:url(<?php echo esc_url($image['url']); ?>);">
                    
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .banner-lp{
        position:relative;
    }
    .banner-lp--img{
        position:absolute;
        top:0;
        right:0;
        background: linear-gradient(0deg, rgba(136, 88, 163, 0.2), rgba(136, 88, 163, 0.2));
        height:100%;
        width:1000px;
    }
    .banner-lp--img:before{
        /* Vector */
        position: absolute;
        left: 94.24%;
        right: -84%;
        top: 30.87%;
        bottom: 45.41%;

        /* Lighter Gray */
        background: #F1F3F6;
        transform: rotate(-142.87deg);
    }
</style>