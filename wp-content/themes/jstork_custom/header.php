<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php wp_title(''); ?></title>
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<!-- Android chrome thema -->
<meta name="theme-color" content="#58505b">

<?php if ( get_theme_mod( 'opencage_appleicon' ) ) : ?><link rel="apple-touch-icon" href="<?php echo get_theme_mod( 'opencage_appleicon' ); ?>"><?php endif; ?>
<?php if ( get_theme_mod( 'opencage_favicon' ) ) : ?><link rel="icon" href="<?php echo get_theme_mod( 'opencage_favicon' ); ?>"><?php endif; ?>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<!--[if IE]>
<?php if ( get_theme_mod( 'opencage_favicon_ie' ) ) : ?><link rel="shortcut icon" href="<?php echo get_theme_mod( 'opencage_favicon_ie' ); ?>"><?php endif; ?>
<![endif]-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<?php get_template_part( 'head' ); ?>

<?php wp_head(); ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<meta name="google-site-verification" content="FVKOR0YA7xbrTMbaSkq7j7yevTb_7IiHlRq70z-hiUg" />
<script src="https://unpkg.com/current-device/umd/current-device.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js" integrity="sha256-qWt5IwpxZvhegiyvbrx/BIGoPJgJnhAExbm5q6PEdDw=" crossorigin="anonymous"></script>
</head>

<body <?php body_class('drawer drawer--right'); ?>>

<div id="container" class="<?php echo esc_html(get_option('post_options_ttl'));?> <?php echo esc_html(get_option('side_options_sidebarlayout'));?> <?php echo esc_html(get_option('post_options_date'));?>">
<?php if(!is_singular( 'post_lp' ) ): ?>

<?php if ( get_option( 'side_options_description' ) ) : ?><p class="site_description"><?php bloginfo('description'); ?></p><?php endif; ?>
<header class="header animated fadeIn <?php echo esc_html(get_option('side_options_headerbg'));?> <?php if ( wp_is_mobile() ) : ?>headercenter<?php else:?><?php echo get_option( 'side_options_headercenter' ); ?><?php endif; ?>" role="banner">
<div id="inner-header" class="wrap cf">
<div id="logo" class="gf <?php echo esc_html(get_option('opencage_logo_size'));?>">
<?php if ( is_home() || is_front_page() ) : ?>
<?php if ( get_theme_mod( 'opencage_logo' ) ) : ?>
<h1 class="h1 img pclogo"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_theme_mod( 'opencage_logo' ); ?>" alt="<?php bloginfo('name'); ?>"></a></h1>
<h1 class="h1 img splogo"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="http://ando-n.jp/wp-content/uploads/2018/01/ae46b1f460ee46f789c27b264a6cb421.png" alt="<?php bloginfo('name'); ?>"></a></h1>
<?php else : ?>
<h1 class="h1 text"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
<?php endif; ?>
<?php else: ?>
<?php if ( get_theme_mod( 'opencage_logo' ) ) : ?>
<p class="h1 img pclogo"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_theme_mod( 'opencage_logo' ); ?>" alt="<?php bloginfo('name'); ?>"></a></p>
<p class="h1 img splogo"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="http://ando-n.jp/wp-content/uploads/2018/01/ae46b1f460ee46f789c27b264a6cb421.png" alt="<?php bloginfo('name'); ?>"></a></p>
<?php else : ?>
<p class="h1 text"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></p>
<?php endif; ?>
<?php endif; ?>
</div>

<?php if (!is_mobile()):?>
<nav id="g_nav" role="navigation">

    
<div class="in-out">
    <input type="checkbox" id="in-out-checkbox">
    <label for="in-out-checkbox" class="in-out-label">
        <span class="tate"></span>
        <span class="yoko"></span>
    </label>
    <!--<button type="button" class="button4"><span class="inst"><a href="https://www.instagram.com/andon_shirahama/?ref=badge" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></span></button>-->
    <button type="button" class="button3"><span class="tiwt"><a href="https://twitter.com/andon_shirahama" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></span></button>
    <button type="button" class="button2"><span class="face"><a href="https://www.facebook.com/andon.shirahama/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></span></button>
    <button type="button" class="button1"><a href="#searchbox" data-remodal-target="searchbox" class="nav_btn search_btn"></a></button>
</div>
    
<?php wp_nav_menu(array(
     'container' => false,
     'container_class' => 'menu cf',
     'menu' => __( 'グローバルナビ' ),
     'menu_class' => 'nav top-nav cf',
     'theme_location' => 'main-nav',
     'before' => '',
     'after' => '',
     'link_before' => '',
     'link_after' => '',
     'depth' => 0,
     'fallback_cb' => ''
)); ?>
</nav>
<?php elseif(!get_option('side_options_header_search')):?>
<a href="#searchbox" data-remodal-target="searchbox" class="nav_btn search_btn"></a>
<?php endif;?>

<a href="#spnavi" data-remodal-target="spnavi" class="nav_btn"><span class="text gf">menu</span></a>


</div>
</header>

<?php if (is_active_sidebar('sidebar-sp')):?>
<div class="remodal" data-remodal-id="spnavi" data-remodal-options="hashTracking:false">
<button data-remodal-action="close" class="remodal-close"><span class="text">CLOSE</span></button>
<?php dynamic_sidebar( 'sidebar-sp' ); ?>
<button data-remodal-action="close" class="remodal-close"><span class="text">CLOSE</span></button>
</div>

<?php else:?>


<!-- モバイルグローバルナビ -->
<button type="button" class="drawer-toggle drawer-hamburger">
  <span class="sr-only">toggle navigation</span>
  <span class="drawer-hamburger-icon"></span>
</button>

<nav class="drawer-nav">
  <ul class="drawer-menu">
      <li><a class="drawer-menu-item" href="/" title="HOME">HOME</a></li>
      
      <li class="drawer-dropdown">
          <a class="drawer-menu-item" href="#" data-toggle="dropdown" role="button" aria-expanded="false">アンド・ンについて <span class="drawer-caret"></span></a>
          <ul class="drawer-dropdown-menu">
              <li><a class="drawer-dropdown-menu-item" href="/about/" title="アンド・ンとは">アンド・ンとは</a></li>
              <li><a class="drawer-dropdown-menu-item" href="/%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B9/" title="アクセス">アクセス</a></li>
          </ul>
      </li>
      
      <li><a class="drawer-menu-item" href="/category/event/" title="EVENT">イベント</a></li>
      
      <li class="drawer-dropdown">
          <a class="drawer-menu-item" href="#" data-toggle="dropdown" role="button" aria-expanded="false">レンタルスペース <span class="drawer-caret"></span></a>
          <ul class="drawer-dropdown-menu">
              <li><a class="drawer-dropdown-menu-item" href="/%EF%BC%91%E9%9A%8E%E3%81%AE%E3%83%AC%E3%83%B3%E3%82%BF%E3%83%AB%E3%82%B9%E3%83%9A%E3%83%BC%E3%82%B9/" title="1階（借店舗・茶房）">1階（貸店舗・茶房）</a></li>
              <li><a class="drawer-dropdown-menu-item" href="/%EF%BC%92%E9%9A%8E%E3%81%AE%E3%83%AC%E3%83%B3%E3%82%BF%E3%83%AB%E3%82%B9%E3%83%9A%E3%83%BC%E3%82%B9/" title="2階（お稽古事）">2階（お稽古事）</a></li>
          </ul>
      </li>
      
      <li><a class="drawer-menu-item" href="/%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B9/" title="アクセス">アクセス</a></li>
      <li class="last"><a class="drawer-menu-item" href="/%E3%81%8A%E5%95%8F%E3%81%84%E5%90%88%E3%82%8F%E3%81%9B/" title="お問い合わせ">お問い合わせ</a></li>
  </ul>
</nav>


<?php endif; ?>


<?php if(!get_option('side_options_header_search')):?>
<div class="remodal searchbox" data-remodal-id="searchbox" data-remodal-options="hashTracking:false">
<div class="search cf"><dl><dt>キーワードで記事を検索</dt><dd><?php get_search_form(); ?></dd></dl></div>
<button data-remodal-action="close" class="remodal-close"><span class="text gf">CLOSE</span></button>
</div>
<?php endif;?>



<?php if(is_mobile()):?>
<div class="g_nav-sp animated fadeIn">
<?php wp_nav_menu(array(
     'container' => 'nav',
     'container_class' => 'menu-sp cf',
     'menu' => __( 'グローバルナビ（スマートフォン）' ),
     'menu_class' => 'top-nav',
     'theme_location' => 'main-nav-sp',
     'before' => '',
     'after' => '',
     'link_before' => '',
     'link_after' => '',
     'depth' => 0,
     'fallback_cb' => ''
)); ?>
</div>
<?php endif;?>

<?php if ( get_option('other_options_headerunderlink') && get_option('other_options_headerundertext') ) : ?>
<div class="header-info <?php echo esc_html(get_option('side_options_headerbg'));?>"><a<?php if(get_option('other_options_headerunderlink_target')):?> target="_blank"<?php endif;?> href="<?php echo esc_html(get_option('other_options_headerunderlink'));?>"><?php echo esc_html(get_option('other_options_headerundertext'));?></a></div>
<?php endif;?>


<?php get_template_part( 'parts_homeheader' ); ?>

<!-- <?php breadcrumb(); ?> -->
<?php endif; ?>