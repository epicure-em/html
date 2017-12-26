<?php
  $url_encode=urlencode(get_permalink());
  $site_title_encode=urlencode(get_home_url());
  $title_encode=urlencode(get_the_title());
  $tw_url = get_the_author_meta( 'twitter' );
  $tw_domain = array("http://twitter.com/"=>"","https://twitter.com/"=>"","//twitter.com/"=>"");
  $tw_user = '&via=' . strtr($tw_url , $tw_domain);
  $rssencode = urlencode(get_bloginfo('rss2_url'));
  $fdly_url = array("http%3A%2F%2F"=>"","https%3A%2F%2F"=>"");
  $plainurl= strtr( $rssencode, $fdly_url );
?>

<div class="share">
<div class="sns">
<ul class="clearfix">

<li class="twitter"> 
<a target="blank" href="http://twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo urlencode( the_title( "" , "" , 0 ) ) ?><?php if(get_the_author_meta('twitter')) : ?><?php echo $tw_user ;?><?php endif ;?>&tw_p=tweetbutton" onclick="window.open(this.href, 'tweetwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;"><i class="fa fa-twitter"></i><span class="text">ツイート</span><span class="count"><?php if(function_exists('scc_get_share_twitter')) echo (scc_get_share_twitter()==0)?'':scc_get_share_twitter(); ?></span></a>
</li>

<li class="facebook">
<a href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-facebook"></i>
<span class="text">シェア</span><span class="count"><?php if(function_exists('scc_get_share_facebook')) echo (scc_get_share_facebook()==0)?'':scc_get_share_facebook(); ?></span></a>
</li>
</ul>
</div>
</div>