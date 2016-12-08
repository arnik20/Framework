<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $SERVER; ?>style/articles.css" />
</head>
<body>

	<div id="content">
		<ul id="menu">
			<li><a href="http://frame1551.esy.es/">Home</a></li>
			<?php echo $menu;?>
		</ul>
	
		<?php 
			$DB = Dbconnect::instance()->getConnect(); 
			$user = $DB->select('SELECT * FROM `article`');
			echo '<div class="post">';
			foreach($user as $shit => $do) 
			{
			
			echo ("<p><b>$do[title]</b></p>");
			echo ("<p>$do[description]</p>");
			echo ("<p style='font-style: italic;'>$do[update]</p>");
			}
			echo '</div>';
			echo '<p>Copyright &copy;</p>';
		?>
		
			
	</div>
</body>
</html>