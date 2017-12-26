<?php

// 子テーマのstyle.cssを後から読み込む
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('style')
    );
}

// サーチフォームのソースコード
if (!function_exists('my_search_form')) {
	function my_search_form( $form ) {
		$form = '<form role="search" method="get" id="searchform" class="searchform cf" action="' . home_url( '/' ) . '" >
		<input type="search" placeholder=" Search" value="' . get_search_query() . '" name="s" id="s" />
		<button type="submit" id="searchsubmit" ><i class="fa fa-search"></i></button>
		</form>';
		return $form;
	}
	add_filter( 'get_search_form', 'my_search_form' );
}


// MOREタグの下に広告を表示
add_filter('the_content', 'adMoreReplace');
function adMoreReplace($contentData) {
if (is_mobile()){
$adTags = <<< EOF

<div class="add more">
<!--ここにスマホ用の広告コードをはりつけてください。-->

</div>

EOF;
} else{
$adTags = <<< EOF

<div class="add more">
<!--ここにPC用・タブレット用の広告コードをはりつけてください。-->

</div>
  
EOF;
}
$contentData = preg_replace('/<p><span id="more-([0-9]+?)"><\/span>(.*?)<\/p>/i', $adTags, $contentData);
$contentData = str_replace('', "", $contentData);
$contentData = str_replace('', '', $contentData);
return $contentData;
}