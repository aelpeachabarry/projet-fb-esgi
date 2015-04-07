<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<h1>Mon app facebook</h1>
<?php
require 'vendor/autoload.php';

//namespace pour facebook session
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;

const APPID = '1572855576323141';
const APPSECRET = 'cc2b3626ebc9c1ebe60764c7d9762db0';
$urlRedirect = 'http://localhost:8888/';

FacebookSession::setDefaultApplication(APPID, APPSECRET);

$helper = new FacebookRedirectLoginHelper($urlRedirect);
$loginUrl = $helper->getLoginUrl();

echo '<a href="'.$loginUrl.'">connectez vous</a>';
?>
<div
    class="fb-like"
    data-share="true"
    data-width="450"
    data-show-faces="true">
</div>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : <?php echo APPID; ?>,
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_FR/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>	
</body>
</html>