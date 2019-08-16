<?php

if ( in_category('graduacao')) {

	include 'single-graduacao.php';

} else if( in_category('mba')){

	include 'single-mba.php';

} else if( in_category('blog_acontece')){ 

	include 'single-post.php';

}else {

	include 'single-post.php';

}

?>