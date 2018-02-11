<?php
if ( in_category('noservice') ) { //特定のカテゴリの場合
  get_template_part( 'archive_common' , false );
} elseif ( in_category('school') ) { //特定のカテゴリ2の場合
  get_template_part( 'archive_school' , false );
} elseif ( in_category('shop') ) { //特定のカテゴリ2の場合
  get_template_part( 'archive_shop' , false );
} else { //それ以外の場合
  get_template_part( 'archive_common' , 'common');
}
?>