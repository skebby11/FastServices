<?
  # logfile
  $ip = getenv("REMOTE_ADDR");                                   
  $browser = getenv("HTTP_USER_AGENT");                         
  $link = getenv("HTTP_REFERER");                                   
  $fp = fopen('logae.html', 'ax+');                                 
  fwrite($fp, "IP: <b>$ip</b> <br /> BROWSER: <b>$browser</b> <br /> REF: <b>$link</b> <br />");       
  fclose($fp);
 
  # Contatore
  $cf = "conta.log";
  $fp = fopen($cf,"ax+");
  $ct = trim(fread($fp,filesize($cf)));
  if ($ct != "") $ct++;
  else $ct = 1;
  @fclose($fp);
  $fp = fopen($cf,"w");
  @fputs($fp,$ct);
  for($i=0;$i<strlen($ct);$i++) {
    $conta = substr($ct,$i,1);
    $counter .= "$conta";  }
  @fclose($fp);

?>
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
header('Location: http://fastfind.altervista.org/mobile');
?>

<html>
 <head>
<link href="stile.css" rel="stylesheet" type="text/css">
  <title>Fast Services | skebby11.it - Home</title>
<meta name="Description" content="FasfFind, FastFiles, FastImages, FastURL: tutto fast qui. 
Fast Services | skebby11.it">
<meta name="Robots" content="All" />
<style type="text/css">
body {
}
#AutoNumber1 { text-align: center; width: 100%; height: 100%;
}
}
#left_td, #top_td, #inner_left_td, #top_inner_td { font-size: 0px; line-height: 0px; margin: 0px; padding: 0px; }
#bottom_inner_td { text-align: left }
#AutoNumber1 { margin-left: auto; margin-right: auto; }
#left_td { width: 0px; }
#container_td { vertical-align: middle; height: 100%; }
#top_td { height: 0px; }
#bottom_td { height: 100%; }
#inner { margin-left: auto; margin-right: auto; }
#inner_left_td { width: 0px; }
#container_inner_td { vertical-align: top; }
#top_inner_td { height: 2%; }
#bottom_inner_td { height: 98%; }
.q, a.q:active, a.q:link, a.q:hover, a.q:visited  { color :#919191; }
A.k { color :#FF0000; }
a:link, a:visited {
  text-decoration: none;
}
a:hover {
  text-decoration: none;
}
</style>
<link rel="apple-touch-icon-precomposed" href="apple_touch_icon.png">

<script type="text/javascript">/*<![CDATA[*/
var _iub = _iub || [];
_iub.csConfiguration = {
    siteId: 353362, cookiePolicyId: 195866, lang: 'it', localConsentDomain: 'fastfind.altervista.org'
};
(function (w, d) {
    var loader = function () { var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "//cdn.iubenda.com/cookie_solution/iubenda_cs.js"; tag.parentNode.insertBefore(s, tag); };
    if (w.addEventListener) { w.addEventListener("load", loader, false); } else if (w.attachEvent) { w.attachEvent("onload", loader); } else { w.onload = loader; }
})(window, document);
/*]]>*/</script>

</head>
<body bgcolor="#FFFFFF" background="/fastfind/bg.png">

<!--Cookie-->
<a href="//www.iubenda.com/privacy-policy/195866" class="iubenda-white iubenda-embed" title="Privacy Policy">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "//cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>

<div align="center">
<vspace="225">


<a href="http://skebby11.it" target="_blank"><img src="/img/banner.png"/>
</a> <br><br><vspace="50">
<fieldset>We're moving on <a href="http://fastfind.skebby.me" target="__blank">http://fastfind.skebby.me</a></fieldset><br><br>

<br><br><br><br>
<a href="http://fastfind.altervista.org/fastfind"><img src="/img/fastfind.png" border="0" alt="fastfind" title="Fastfind"></a> <br><br><br>

<a href="http://fastapk.altervista.org"><img src="/img/fastapk.png" border="0" alt="FastAPK" title="FastAPK"></a> <br><br><br>
<!--
<a href="http://fastfind.altervista.org/minecraft" target="_blank"><img src="/img/minecraft.png" border="0" alt="Minecraft" title="Minecraft"></a><br><br><br>

<a href="http://fastimages.bl.ee/" target="_blank"><img src="/img/fastimages.png" border="0" alt="Fast Images" title="Fast Images"></a><br><br><br>

<a href="http://skbb.url.ph" target="_blank"><img src="/img/fasturl.png" border="0" alt="FastURL" title="FastURL"></a><br><br><br>
-->
<a href="/cetriolo" target="_blank"><img src="/img/fun.png" border="0" alt="FastFUN" title="FastFUN"></a><br><br><br>

<p align="center">&nbsp;<p align="center">
	  <a class="q" href="http://www.iubenda.com/privacy-policy/195866" target="_blank">Privacy Policy</a><font class="q">&nbsp;
      |&nbsp;&nbsp; </font> <a href="#" onClick="this.setHomePage('http://www.skebby11.it');">Set as HomePage</a><font class="q">&nbsp;
      <!--
	  |&nbsp;&nbsp; </font> <font class="q">
	  <a class="q" href="/blog">Blog</a><font class="q"></font>-->
	  <br><br><br><br>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/it_IT/IT/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - Il metodo rapido, affidabile e innovativo per pagare e farsi pagare.">
<img alt="" border="0" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
</form><br><br>

	<br><br><br>
      <font style="font-size: 15pt"><a class="q" href="http://sebastianoriva.it">Created by Skebby</a></font></p><br><br><br>

</div>


</div>