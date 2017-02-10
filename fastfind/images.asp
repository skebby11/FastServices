<link href="/include/style-new.css" rel="stylesheet" type="text/css"><![endif]-->
<script type="text/javascript">
function setHomepage()
{
	if (document.all)
	{
		document.body.style.behavior='url(#default#homepage)';
		document.body.setHomePage('http://www.fastfind.skebby11.it/');
		document.body.setHomePage('');
	}
	else if (window.sidebar)
	{
		if(window.netscape)
		{
			try
			{  
			netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");  
			}  
			catch(e)  
			{  
			alert("This action was avoided by your browser. There is no harm in enabling this component. Please enter about:config in your address line,and change the value of signed.applets.codebase_principal_support to true");  
			}
		} 
	var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components. interfaces.nsIPrefBranch);
	prefs.setCharPref('browser.startup.homepage','http://www.fastfind.skebby11.it');
	}
}
</script>
</head>
<body>
<div id="header">

<table cellpadding="0" cellspacing="0" style="float:left;padding-left:10px;color:#ffffff;font-size:11px;">
<tr>
	<td>
	
			<a href="/?u=skebby">Home</a>|
	
				<a href="http://www.facebook.com" target="_blank">Facebook</a> | 
				<a href="http://www.orkut.com" target="_blank">Orkut</a> | 
				<a href="http://www.youtube.com" target="_blank">Youtube</a> | 
				<a href="http://www.gmail.com" target="_blank">Gmail</a> | 
				<a href="http://www.yahoo.com" target="_blank">Yahoo!</a> | 
			
		<a href="/customize-url.asp" style="color:#FFFFFF">Customize URL</a>
	</td>
</tr>
</table>
<table cellpadding="0" cellspacing="0" style="float:right;color:#ffffff;font-size:11px;">
<tr>
	<td>
		 <b style="color:yellow;">Welcome skebby</b> |  <a href="javascript:setHomepage();">Make MyDailySearch your homepage</a> |  <a href="/myaccount.asp">My Account</a>   | <a href="/logout.asp">Logout</a> 
	</td>
</tr>
</table>
</div>
<!--[if IE]><link href="/include/ie-search.css" rel="stylesheet" type="text/css"><![endif]-->
<!--[if !IE]>--><link href="/include/search.css" rel="stylesheet" type="text/css"><!--<![endif]-->
<script src="https://www.google.com/jsapi?key=ABQIAAAAaCVYlw6d3zxZ1-SR9mfmPBSGsJOIg2NWRBrvKQQs2NHn0it4CRSouAHaV1B0-UQNlKOUsalAtLTy1g" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">
	google.load("search", "1", {"nocss" : true});
	function m_image_event(){
	$("a.gs-image").bind("click", function(e){
	$("#imageContainer").html('<iframe src="' + $(this).attr('href') + '"  frameborder=0 style=width:100%;height:850px; name=imagePreview id=sa />');
	$("a.gs-image img").removeClass();
	$("a.gs-image img").addClass("gs-image");
	$(this).find("img").removeClass();
	$(this).find("img").addClass("selectImage");
	
	if($(".gs-imageResult").length <= 0){
		$("#gsearchErr").css("display","block");
	}else{
		$("#gsearchErr").css("display","none");
	}          
	
	return false;
	});
        
        $("div.gsc-cursor").prepend("<div class='clear' style='margin-top:10px;clear:both;'></div>");
        $(".gsc-trailing-more-results").css("display","none");
        
    }
    
    function OnLoad() 
    {
    	var query = document.getElementById('search-query').innerHTML;
        var mySearch = new google.search.SearchControl();      
        mySearch.setResultSetSize(google.search.Search.LARGE_RESULTSET);
        mySearch.addSearcher(new google.search.ImageSearch());
        mySearch.setSearchCompleteCallback(this, m_image_event);
        var imagedrawOptions = new google.search.DrawOptions();
        imagedrawOptions.setDrawMode(google.search.SearchControl.DRAW_MODE_TABBED);
        mySearch.draw(document.getElementById("imgSearchControl"), imagedrawOptions);
        mySearch.execute(query);
    }
    google.setOnLoadCallback(OnLoad);
</script>

<style type="text/css">
body{
	color:#888;
}
.search-control {
	width : auto;
	font-size:0.9em;
	color:#777;
}
.gs-text-box, .gsc-tabhActive, .gs-watermark, .gsc-branding, .gsc-twiddle, .gsc-stats, .gsc-results-selector, .gsc-all-results-active{
	display:none;
}
.gsc-input input[type="text"]{
	width:200px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	margin: 0em;
	font: -webkit-small-control;
	color: initial;
	letter-spacing: normal;
	word-spacing: normal;
	line-height: normal;
	text-transform: none;
	text-indent: 0px;
	text-shadow: none;
	display: inline-block;
	text-align: -webkit-auto;
 }
input.gsc-search-button, .ui-widget button{
	margin-left:10px;
	border: 0;
	background: #ED0A0A;
	background-image: url(/images/gradient.png);
	background-repeat: repeat-x;
	width: 60px;
	height: 20px;
	cursor: pointer;
	color: white;
	font-weight: bold;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.25);
}
input.gsc-search-button:hover, .ui-widget button:hover{
	background: #434242;
	background-image: url(/images/gradient.png);
}
img.gs-image{
	float:left;
	margin:10px 10px 20px 0px; 
	width:90px; 
	height:80px;
	border:2px solid #fff; 
	padding:1px; 
	-moz-border-radius:4px; 
	-webkit-border-radius:4px;
  }
img.gs-image:hover{
	border:2px solid #aaa;
}
img.selectImage{
	float:left; 
	margin:10px 10px 20px 0px; 
	width:90px; 
	height:80px;
	border:5px solid #aaa; 
	padding:1px; 
	-moz-border-radius:4px; 
	-webkit-border-radius:4px;
}
.gsc-cursor-page{
	float:left; text-shadow: 1px 1px 1px #fff; 
	cursor: pointer; 
	margin: 0px 8px 10px 0px;
	padding: 3px 7px 3px 7px; 
	background: #ddd;
	background-image: url(/images/gradient.png);
	color:#000; 
	border:1px solid #999; 
	-moz-border-radius:2px; 
	-webkit-border-radius:2px;
}
.gsc-cursor-page:hover{
	background: #e50d26;
	background-image: url(/images/gradient.png);
	color:#fff;
}
.gsc-cursor-current-page{
	background: #e50d26;
	background-image: url(/images/gradient.png);
	color:#fff;
}
.clear{
	clear: both;
}
#imageContainer img{
	padding:1px; 
	border:1px solid #ddd;
	width: auto; 
	height: auto;
}               
</style>

<table border="0" cellpadding="0" cellspacing="0" style="padding-top:4px" width="100%">
<tr>
<td>

<a href="/"><img src="/customize-logo/display-logo-search.asp" border="0"></a>
	
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
<tr>
	<td style="padding-bottom:20px;border-bottom:1px solid #dbdbdb;"></td>
	<td colspan="2" align="left" style="padding-bottom:10px;border-bottom:1px solid #dbdbdb;">
		<div style="margin-left:20px;float:left;margin-top:10px;">
			
		</div>
	</td>
</tr>
<tr>
	<td valign="top" align="center" style="padding-top:30px;" >
		
	</td>
	<td align="left" style="padding-top:30px;" valign="top">
		<div id="search-query" style="display:none;"></div>
		<div id="imgSearchControl" class="search-control"><img src="/images/gif_loading.gif" title="Searching Images"></div>
		<div class="clear"></div>	
		<br/>
		<hr noshade size=1 color=#dbdbdb><span>FastFind Image Preview</span><hr noshade size=1 color=#dbdbdb>
		<div id='imageContainer'></div>
	</td>
</tr>
</table>
<br/><br/>
<center>
