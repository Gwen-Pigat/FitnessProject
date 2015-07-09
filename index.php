<html>
<head>
	<title>Textr</title>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64874376-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
</body>
</html>

<?php 

$link = mysqli_connect("localhost","root","motdepasselocalhostgwen","Textr")or die("Erreur de connexion");

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

	$a = rand(1,6);

 	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

  if ($lang != 'fr')
      $index = '$lang/index.php';

	header("Location :version_1/$lang/$index",TRUE,301);

// else{
//  	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

//   if ($lang != 'fr')
//       $index = 'index.php';

// 	header("url: /$lang/$index",TRUE,301);	

// }

 ?>