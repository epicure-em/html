<?php get_header(); ?>
<div id="content">
<div id="inner-content" class="wrap page-full wide cf">
<main id="main" class="m-all t-all d-all cf" role="main">
<div class="archivettl">
<?php if (is_category()) { ?>
<h1 class="archive-title">
<?php single_cat_title(); ?>
</h1>
<?php } elseif (is_tag()) { ?>
<h1 class="archive-title h2">
<span class="gf"><?php _e( 'TAG', 'moaretrotheme' ); ?></span> <?php single_tag_title(); ?>
</h1>
<?php } elseif (is_author()) {
global $post;
$author_id = $post->post_author;
?>
<h1 class="archive-title h2">
<span class="author-icon"><?php echo get_avatar(get_the_author_id(), 150); ?></span>
「<?php the_author_meta('display_name', $author_id); ?>」の記事
</h1>
<?php } elseif (is_day()) { ?>
<h1 class="archive-title h2"><?php the_time('Y年n月j日'); ?></h1>
<?php } elseif (is_month()) { ?>
<h1 class="archive-title h2"><?php the_time('Y年n月'); ?></h1>
<?php } elseif (is_year()) { ?>
<h1 class="archive-title h2"><?php the_time('Y年'); ?></h1>
<?php } ?>
</div>
<?php if (category_description() && !is_paged()) : ?>
<div class="taxonomy-description entry-content"><?php echo category_description(); ?></div>
<?php endif; ?>

<!-- カテゴリ用画像 -->
<?php if (function_exists('z_taxonomy_image')) z_taxonomy_image(); ?>



<?php
	$toplayout = get_option('opencage_archivelayout');
	$toplayoutsp = get_option('opencage_sp_archivelayout');
?>
<?php if (is_mobile()) :?>
	<?php if ( $toplayoutsp == "toplayout-big" ) : ?>
	<?php get_template_part( 'parts_archive_big' ); ?>
	<?php elseif ( $toplayoutsp == 'toplayout-card' ) : ?>
	<?php get_template_part( 'parts_archive_card' ); ?>
	<?php elseif ( $toplayoutsp == 'toplayout-magazine' ) : ?>
	<?php get_template_part( 'parts_archive_magazine' ); ?>
	<?php else : ?>
	<?php get_template_part( 'parts_archive_simple' ); ?>
	<?php endif;?>
<?php else : ?>
	<?php if ( $toplayout == "toplayout-big" ) : ?>
	<?php get_template_part( 'parts_archive_big' ); ?>
	<?php elseif ( $toplayout == 'toplayout-card' ) : ?>
	<?php get_template_part( 'parts_archive_card' ); ?>
	<?php elseif ( $toplayout == 'toplayout-magazine' ) : ?>
	<?php get_template_part( 'parts_archive_magazine' ); ?>
	<?php else : ?>
	<?php get_template_part( 'parts_archive_simple' ); ?>
	<?php endif;?>
<?php endif;?>

<?php pagination(); ?>



<!-- カテゴリローカルメニュー -->
<div class="cat-link-all">
<ul>
<?php
$args = array(
'orderby' => 'order',
'order' => 'ASC',
'exclude' => '0' // 「未設定」カテゴリを除外

);
$cat_all = get_categories($args); ?>
<?php foreach($cat_all as $value): ?>
    <li class="cat-<?php echo esc_html($value->category_nicename); ?>"><a href="<?php echo get_category_link($value); /* カテゴリへのリンク */ ?>"><?php echo esc_html($value->name); /* カテゴリ名 */ ?></a></li>
<?php endforeach; ?>
</ul>
</div>
<!--  -->


</main>
</div>
</div>
<?php get_footer(); ?>