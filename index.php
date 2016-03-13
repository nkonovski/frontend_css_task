<?php
	$page_title = 'Home';
	$active = array("active","","","");
	include('templates/header.php');
?>
<?php include('templates/slider.php') ?>
<section id="blog_wrapper">
    <h1>A Theme Unlike Any Other. Simply Fantastic!</h1>
	<?php include('templates/blog.php') ?>
</section>
<nav class="pagination clearfix">
    <a href="javascript:void(0)" class="current">1</a>
    <a href="javascript:void(0)" class="">2</a>
    <a href="javascript:void(0)" class="">3</a>
    <a href="javascript:void(0)" class="">4</a>
</nav>
<?php include('templates/footer.php') ?>