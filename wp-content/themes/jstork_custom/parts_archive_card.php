<div class="post-list-card cf">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article <?php post_class('post-list cf animated fadeIn'); ?> role="article">
<?php
$days = 30; //Newを表示させたい期間の日数
$today = date_i18n('U');
$entry = get_the_time('U');
$kiji = date('U',($today - $entry)) / 86400 ;
if( $days > $kiji ){
echo '<span class="card_new">New</span>';
}
?>
<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

<?php
$cat = get_the_category();
$cat = $cat[0];
?>

<?php if ( has_post_thumbnail()) : ?>
<figure class="eyecatch">
<?php the_post_thumbnail('home-thum'); ?>
</figure>
<?php else: ?>
<figure class="eyecatch noimg">
<img src="<?php echo get_template_directory_uri(); ?>/library/images/noimg.png">
</figure>
<?php endif; ?>

<section class="entry-content cf">
<span class="cat-name cat-id-<?php echo $cat->cat_ID;?>"><?php echo $cat->name; ?></span>
<p class="byline entry-meta vcard">
<span class="date gf updated"><?php the_time('Y.m.d'); ?></span>
<span class="writer name author"><span class="fn"><?php the_author(); ?></span></span>
</p>
<h1 class="h2 entry-title"><?php the_title(); ?></h1>


<div class="description"><?php the_excerpt(); ?></div>

<span class="date gf updated"><?php the_time('Y.m.d'); ?></span>
</section>
</a>
</article>

<?php endwhile; ?>


<?php elseif(is_search()): ?>
<article id="post-not-found" class="hentry cf">
<header class="article-header">
<h1>記事が見つかりませんでした。</h1>
</header>

<section class="entry-content">

<p>お探しのキーワードで記事が見つかりませんでした。別のキーワードで再度お探しいただくか、カテゴリ一覧からお探し下さい。</p>

<div class="search">
<h2>キーワード検索</h2>
<?php get_search_form(); ?>
</div>


<div class="cat-list cf">
<h2>カテゴリーから探す</h2>
<ul>
<?php $args = array(
'title_li' => '',
); ?>
<?php wp_list_categories($args); ?>
</ul>
</div>

</section>

</article>

<?php else : ?>

<article id="post-not-found" class="hentry cf">
<header class="article-header">
<h1>まだ投稿がありません！</h1>
</header>
<section class="entry-content">
<p>表示する記事がまだありません。</p>
</section>
</article>

<?php endif; ?>
</div>
