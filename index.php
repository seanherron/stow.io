<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>stow.io</title>
        <meta name="description" content="Simple storage box for the internet">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
		<div id="wrap">
			<h1><span>stow</span>.io</h1>
		<?php 
		$dir = 'images/'; 
		$files = preg_grep('/^([^.])/', scandir($dir));
		foreach($files as $ind_file){ 
		?> 
		<img src="/<?php echo $ind_file;?>" alt="<?php echo $ind_file;?>" />
		<?php 
		} 
		?>
		<p class="credit">By <a href="http://seanherron.com">Sean Herron</a></p>
		</div>
        <script>
            var _gaq=[['_setAccount','UA-34051870-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>