<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script type="text/javascript" src="js/code.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64874376-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<html>
    <body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.3&appId=104375239900632";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php

session_start();
$link = mysqli_connect("localhost","root","motdepasselocalhostgwen","Textr")or die("Erreur de connexion");
$row = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM Catcher WHERE adresse_ip='$_SERVER[REMOTE_ADDR]'"));

if ($row == 0) {
	header('Location: index.php');
}

 ?>

<title><?php echo $row['email']; ?></title>

<div class="container text-center">

  <div class="bloc col-md-6 col-md-offset-3">
  <p class="small">Merci de votre inscription !</p>
  <p class="medium">Invitez vos amis et gagnez un abonnement gratuit</p>
  
<?php 

$row = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM Catcher WHERE adresse_ip='$_SERVER[REMOTE_ADDR]'"));
$url = "index.php?token_invite=$row[identifiant]";
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

echo "<h5>Partagez ce lien par mail à vos amis ou partagez avec facebook</h5><span class='box' href=''>http://www.gettextr.com/$lang/version_$row[version]/index.php?token_invite=$row[identifiant]</span>
    <br><a target='_blank' href='http://www.facebook.com/share.php?u=http://www.gettextr.com/version_$row[version]/$lang/index.php?token_invite=$row[identifiant]'><img class='facebook_share' src='img/share_facebook.png'></a>"; ?>
    
    </div>
</div>
    </body>
</html>   