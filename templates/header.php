<?php include '/inc/env.php'; ?>
<!DOCTYPE html>
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="no-js eq-ie9 ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <base href="<?php echo $basehref; ?>">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <?php if($page_title == 'Contacts') { ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXSvNhrGGECmJMZKs3Ewbz32jVRvLTTq4&language=en"></script>
    <?php } ?>
    <script type="text/javascript">
        var currentPage = '<?php echo $page_title; ?>';
    </script>
</head>
<body>
    <div class="wrapper clearfix" role="main">
		<header class="clearfix">
			
			<form class="search-form clearfix">
				<input type="text" class="search-bar" name="search" placeholder="Enter your serach..." >
				<input type="submit" class="search-button" value="">
			</form>
			<div class="logo"></div>
			<nav  class="navigation-bar">
			<ul class="clearfix">
				<li class="menu-item"><a href="index.php">HOME</a></li>
				<li class="menu-item"><a href="about.php">ABOUT</a></li>
				<li class="menu-item active"><a href="blog.php">BLOG</a></li>
				<li class="menu-item"><a href="contacts.php">CONTACT</a></li>
			</ul>
			</nav>
		</header>