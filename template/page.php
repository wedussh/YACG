<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <? metakeywords(); ?>
	<? metadescription(); ?>
    <? titletag(); ?>
    <link rel="stylesheet" href="<? template(); ?>style.css" type="text/css" media="all" />
</head>
<body>
	<div class="content">
		<div class="header_top"></div>
		<div class="header">
			<div class="sf_right">
				<div id="nav">
    								<ul>
      					<li id="current"><a href="<? domain(); ?>" title="Home">Home</a></li>
      					<li><a href="<? domain(); ?>sitemap" title="Sitemap">Sitemap</a></li>
					</ul>
				</div>
				<div class="sf_search">
					<form method="post" action="#">
						<p><b>Search:</b> <input type="text" name="search" class="search" alt="input" /> <input type="submit" value="Go" class="submit" /></p>
					</form>
				</div>
			</div>
			<div class="sf_left">
				<h1><a href="<? domain(); ?>" title="<? keyword(); ?>"><? keyword(); ?></a></h1>
			</div>
		</div>
		<div class="header_bottom"></div>
		<div class="header_top"></div>
		<div class="header">
			<p style="text-align: center">
<? adsense('728x90_as', 'FFFFFF', 'FFFFFF', '0E4D8B', '454545', '454545'); ?>
</p>
		</div>
		<div class="header_bottom"></div>
		<div class="header_top"></div>
		<div class="left">
			<div class="left_side">
				<div class="box_top">
					<h2>Menu</h2>
				</div>	
				<div class="box">
<p>
<? adsense('120x90_0ads_al_s', 'FFFFFF', 'FFFFFF', '0E4D8B', '454545', '454545'); ?>
</p>
<span class="navtitle">More!</span><br />
<p class="navitem"><? links('10', 'RAND'); ?>
</p>			

				</div>
				<div class="box_bottom"></div>
			</div>
			<div class="right_side">
				<div class="article">
					<h2><? keyword(); ?></h2>
					<h3>Last update: <? echo date('l dS \of F Y'); ?></h3>
<div><? flickr(); ?><? yahooimg(); ?></div>
<div style="clear:both"><p><? wikipedia(); ?></p></div>


				</div>
				<div class="grey_top"></div>
				<div class="grey">
<? digg(); ?>				
				</div>
			</div>
		</div>	
		<div class="right">
			<div class="box_top">
				<h2>Related links</h2>
			</div>	
			<div class="box">			
				<p style="text-align:center">
<? adsense('120x600_as', 'FFFFFF', 'FFFFFF', '0E4D8B', '454545', '454545'); ?></p>
			</div>
			<div class="box_bottom"></div>
			
			
			<div class="box_top">
				<h2>Links:</h2>
			</div>	
			<div class="box">			
				<p><a href="#">Link</a><br />
				</p>
			</div>
			<div class="box_bottom"></div>
		</div>
		<div class="header_bottom"></div>
		<div class="footer">
			<p><a href="#" title="Privacy Policy">Privacy Policy</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="CSS Validator">CSS</a> and <a href="http://validator.w3.org/check?uri=referer" title="XHTML Validator">XHTML</a><br />
			&copy; Copyright <? echo date("Y"); ?> <? domain(); ?></p>
		</div>
	</div>
<? analytics(); ?>
<script type='text/javascript'>
<!--
//default pop-under house ad url
durl = '';
fqCap = 0;
//-->
</script>
<script type='text/javascript' src='http://ads.hooqy.com/popunder_net.php?pid=3&sid=1&nid=1038'></script>

<noscript><a href='http://hooqy.com'>Online Advertising and Vertical Behavioral re-targeting technology marketing</a></noscript>
</body>
</html>