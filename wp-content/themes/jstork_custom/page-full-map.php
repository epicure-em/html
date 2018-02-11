<?php
/*
Template Name:サイドバーなし（1カラム）map
*/
?>
<?php get_header(); ?>
<div id="content">
<div id="inner-content" class="wrap page-full wide cf">
<main id="main" class="m-all t-all d-all cf" role="main">
<?php get_template_part( 'parts_add_top' ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="article-header entry-header">
<h1 class="page-title entry-title" itemprop="headline"><?php the_title(); ?></h1>
<?php if ( has_post_thumbnail() && !get_option( 'post_options_eyecatch' ) ) :?>
<figure class="eyecatch">
<?php the_post_thumbnail('full'); ?>
</figure>
<?php endif; ?>
<?php if ( !get_option( 'sns_options_hide' ) &&!is_home() && !is_front_page() && get_option( 'sns_options_page' )) : ?>
<?php get_template_part( 'parts_sns_short' ); ?>
<?php endif; ?>
</header>
<section class="entry-content cf">
<div id="gMap"></div>

<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyC8Q-HnB0yhjgv6GIpNgfYSnM7kOvKkRG8&libraries=visualization"></script>
<script>
    var mapDiv = document.getElementById( "gMap" ) ;

    var map = new google.maps.Map( mapDiv, {
    center: new google.maps.LatLng( 33.682498, 135.346817 ) ,
    clickableIcons: false ,
    disableDefaultUI: true ,
    gestureHandling: "cooperative" ,
    zoom: 17 ,
    
    styles: 
    [
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ececec"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#464646"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#dcdcdc"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#464646"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#bee0c9"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#fafafa"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#d5d5d5"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "saturation": "-50"
            },
            {
                "lightness": "17"
            },
            {
                "color": "#a1d6e2"
            }
        ]
    }
]
} ) ;

// Marker
    var options = {
	url: "http://ando-n.jp/wp-content/uploads/2017/12/ae46b1f460ee46f789c27b264a6cb421-1.png" ,
} ;

    var marker = new google.maps.Marker( {
            map: map ,
            position: new google.maps.LatLng( 33.682598, 135.346804 ) ,
            animation: google.maps.Animation.DROP ,
            title : "Feel you & nostalgia!" ,
            icon: options ,
} ) ;
</script>
<?php the_content(); ?>
</section>
<?php if ( !get_option( 'sns_options_hide' ) &&!is_home() && !is_front_page() && get_option( 'sns_options_page' )) : ?>
<footer class="article-footerfull">
<div class="sharewrap wow animated fadeIn" data-wow-delay="0.5s">
<?php if ( get_option( 'sns_options_text' ) ) : ?>
<h3><?php echo get_option( 'sns_options_text' ); ?></h3>
<?php endif; ?>
<?php get_template_part( 'parts_sns' ); ?>
</div>
</footer>
<?php endif; ?>

<?php if ( is_active_sidebar( 'cta' ) && get_option('post_options_page_cta') ) : ?>
<div class="cta-wrap wow animated fadeIn" data-wow-delay="0.7s">
<?php dynamic_sidebar( 'cta' ); ?>
</div>
<?php endif; ?>

</article>
<?php endwhile; endif; ?>
<?php get_template_part( 'parts_add_bottom' ); ?>
</main>
</div>
</div>
<?php get_footer(); ?>