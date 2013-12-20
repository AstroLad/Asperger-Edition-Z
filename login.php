<?php 

  # ============================ #
  # Created By AstroLad / BamBam #
  #   Open Source Applies Here   #
  # ============================ #


 $display = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Edition Z | Login System</title>
  <if:seo_enabled>
  <tag:cano />
  <tag:meta />
  <tag:analytic />
  <tag:ggwebmaster />
  </if:seo_enabled>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="/css/05/main.css" type="text/css" />
    <script type="text/javascript" src="/js/ajax.js"></script>
    <script type="text/javascript" src="/js/ajax-poller.js"></script>
    <script type="text/javascript" src="/js/animatedcollapse.js"></script>
    <script type="text/javascript" src="/js/xbtit.js"></script>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/interface.js"></script>
    <script type="text/javascript" src="/js/prototype.js"></script>
    <script type="text/javascript" src="/js/overlib.js"></script>
    <script src="/js/ajaxradio.js" language="JavaScript" type="text/javascript"></script>      
    <script language="JavaScript" src="/js/jq.js"></script>
    <script language="JavaScript" src="/js/jq.color.js"></script>
    
	<script type="text/javascript">

/******************************************
* Snow Effect Script- By Altan d.o.o. (http://www.altan.hr/snow/index.html)
* Visit Dynamic Drive DHTML code library (http://www.dynamicdrive.com/) for full source code
* Last updated Nov 9th, 05' by DD. This notice must stay intact for use
******************************************/
 
  //Configure below to change URL path to the snow image
  var snowsrc="/images/snow.gif"
  // Configure below to change number of snow to render
  var no = 10;
  // Configure whether snow should disappear after x seconds (0=never):
  var hidesnowtime = 0;
  // Configure how much snow should drop down before fading ("windowheight" or "pageheight")
  var snowdistance = "pageheight";

///////////Stop Config//////////////////////////////////

  var ie4up = (document.all) ? 1 : 0;
  var ns6up = (document.getElementById&&!document.all) ? 1 : 0;

    function iecompattest(){
    return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
    }

  var dx, xp, yp;    // coordinate and position variables
  var am, stx, sty;  // amplitude and step variables
  var i, doc_width = 800, doc_height = 600;
 
  if (ns6up) {
    doc_width = self.innerWidth;
    doc_height = self.innerHeight;
  } else if (ie4up) {
    doc_width = iecompattest().clientWidth;
    doc_height = iecompattest().clientHeight;
  }

  dx = new Array();
  xp = new Array();
  yp = new Array();
  am = new Array();
  stx = new Array();
  sty = new Array();
  snowsrc=(snowsrc.indexOf("dynamicdrive.com")!=-1)? "snow.gif" : snowsrc
  for (i = 0; i < no; ++ i) {  
    dx[i] = 0;                        // set coordinate variables
    xp[i] = Math.random()*(doc_width-50);  // set position variables
    yp[i] = Math.random()*doc_height;
    am[i] = Math.random()*20;         // set amplitude variables
    stx[i] = 0.02 + Math.random()/10; // set step variables
    sty[i] = 0.7 + Math.random();     // set step variables
        if (ie4up||ns6up) {
      if (i == 0) {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><a href=\"http://dynamicdrive.com\"><img src='"+snowsrc+"' border=\"0\"><\/a><\/div>");
      } else {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><img src='"+snowsrc+"' border=\"0\"><\/div>");
      }
    }
  }

  function snowIE_NS6() {  // IE and NS6 main animation function
    doc_width = ns6up?window.innerWidth-10 : iecompattest().clientWidth-10;
        doc_height=(window.innerHeight && snowdistance=="windowheight")? window.innerHeight : (ie4up && snowdistance=="windowheight")?  iecompattest().clientHeight : (ie4up && !window.opera && snowdistance=="pageheight")? iecompattest().scrollHeight : iecompattest().offsetHeight;
    for (i = 0; i < no; ++ i) {  // iterate for every dot
      yp[i] += sty[i];
      if (yp[i] > doc_height-50) {
        xp[i] = Math.random()*(doc_width-am[i]-30);
        yp[i] = 0;
        stx[i] = 0.02 + Math.random()/10;
        sty[i] = 0.7 + Math.random();
      }
      dx[i] += stx[i];
      document.getElementById("dot"+i).style.top=yp[i]+"px";
      document.getElementById("dot"+i).style.left=xp[i] + am[i]*Math.sin(dx[i])+"px";  
    }
    snowtimer=setTimeout("snowIE_NS6()", 10);
  }

    function hidesnow(){
        if (window.snowtimer) clearTimeout(snowtimer)
        for (i=0; i<no; i++) document.getElementById("dot"+i).style.visibility="hidden"
    }
        

if (ie4up||ns6up){
    snowIE_NS6();
        if (hidesnowtime>0)
        setTimeout("hidesnow()", hidesnowtime*1000)
        }

</script>
<body>

 <div id='menu-bg'>     <?php include_once('popup.php'); ?>
 
 <div id="boxes">
<div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">
<div style='margin-left:315px;margin-top:-30px;'>
<a href="#" class="close"><img src='/images/closelabel.gif'></img></a> </div>
</div>
<!-- Mask to cover the whole screen -->
<div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>

 
  <table align="center" height="39" cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td valign="middle" align="center" >	<div class="block">
  <div class="block-head">
    
	<div class="block-head-title"></div>   
  </div>

  
  <div class="block-content">
    	
    <div align="justify" class="b-content" style='margin-left:180px;margin-top:-10px;'><div id='menu'>
<div style='margin-left:330px;margin-top:12px;'>
<ul class='level2'>
<li><a href='index.php?page=viewnews'>New Features</a></li></ul></div>
<div style='margin-left:130px;margin-top:-24px;'>
<ul class='level2'><li><a href='#'>Screen Shots</a></li></ul></div>
</ul>
</div></div>
  </div>
  </div>
  </div>
  <div class="block-foot">
    
    
  </div>
</div></td>
	
      
   
       </tr>
    </table>
	</div>
	<div id="menu-under"></div>
	
<div id="body-bg">	<br />

<div style='margin-left:-1295px;'>
 <div style='".sha1(_false_keys_)."'>
	<?php require_once('poster_scroll.php'); ?>	
 </div>
</div>
 
<div id="main"> 	
	<table width='100%' align='center' cellpadding='0' cellspacing='0' border='0'>
        <tr>
          <td valign='top' width='5' rowspan='2'></td>
          <td valign="top" ><tag:main_adarea /></td>
          <td valign='top' width='5' rowspan='2'></td>
        </tr>
      </table>
  
    <div id="header">
      <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td valign="top" width="5" rowspan="2"></td>
          <td valign="top"><div>	<div class="block">
  <div class="block-head">
    
	<div class="block-head-title"></div>   
  </div>

  
  <div class="block-content">
    	
    <div align="justify" class="b-content"><script type="text/javascript">
function newpm() {
<!--
var answer = confirm("You got unread mail ! , go to your inbox to read it before you proceed , else this popup will keep pestering you ;)")
if (answer)
window.location='index.php?page=usercp&uid=1&do=pm&action=list'
// -->
}
</script>
    
    </div>
<div style='margin-top:-350px;'>	
	<form action="index.php?page=login" name="login" method="post">
    <table border="0" width="100%" cellpadding="4" cellspacing="1">
    <tr>
    <td align="left">
      <table border="0" cellpadding="0" cellspacing="0">
      <tr>
      <td  style="padding-left:5px;">
	  <div style='margin-left:-80px;margin-bottom:30px;'>
	  <img width='20' height='20' src='/images/usera.png'/></div><div style='margin-top:-55px;margin-left:-60px;'>
	  <input placeholder='Enter ID' type="text" size="15" name="uid" value="" maxlength="10" style="font-size:10px;" /></div></td>
	  <td align="right"  style="padding-left:10px;">
	  
<div style='margin-top:-5px;margin-left:-5px;'>
	 
      <input placeholder='Enter Password' type="password" size="15" name="pwd" maxlength="40" style="font-size:10px;" /></div>
      <td  align="center" style="padding-left:10px;"><div style='margin-top:-5px;'>
	  <input type="submit" value="Login" style="font-size:10px;" /></div></td>
      </tr>
      </table>
           </td>
<td style="text-align:center;"><div id='menu' style='margin-left:1157px;margin-top:-4px;'><ul class='level2'><a href="index.php?page=account ">Create account</a></ul></div></td>
    <td style="text-align:center;"><div id='menu' style='margin-left:-3px;margin-top:-4px;'><ul class='level2'><a class="mainuser"  href="index.php?page=recover">Recover password</a></ul></div></td>
    </tr>
    </table>
    </form>	
</div>
	
  </div>
  </div>
  </div>
  <div class="block-foot">
    
    
  </div>
</div></div></td>
          <td valign="top" width="5" rowspan="2"></td>
        </tr>
      </table>
    </div>
  
  
  <div id="bodyarea" style="padding:1ex 0 0 0;">  <br />
    <table border="0" align="center" cellpadding="0" cellspacing="0" width="100%">
      <tr>
        <td valign="top" width="5" rowspan="2"></td>
        <if:HAS_LEFT><td id="lcol" valign="top" width="180"><tag:main_left /></td></if:HAS_LEFT>
        <td valign="top" width="5" rowspan="2"></td>
        <td id="mcol" valign="top">	<div class="block">
  <div class="block-head" style='width:550px; margin-top:-300px;margin-left:550px;'>
    
	<div class="block-head-title">Donations For [Invitations] Accepted! - $0.67 Per Invites you want.</div>   
  </div>

  
  <div class="block-content">
    	
    <div align="justify" class="b-content"><center><h2><font color=red>SIGNUPS ARE CURRENTLY CLOSED TILL - 5th May 2014</center></font><center>
</div>
  </div>
  </div>
  </div>
  <div class="block-foot">
    
    
  </div>
</div></td>
        <td valign="top" width="5" rowspan="2"></td>
        <if:HAS_RIGHT><td id="rcol" valign="top" width="180"><tag:main_right /></td></if:HAS_RIGHT>
        <td valign="top" width="5" rowspan="2"></td>
      </tr>
    </table><br />    
         
    <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td valign="top" width="10" rowspan="2"></td>
        <td id="fcol" valign="top"><br />
</td>
        <td valign="top" width="10" rowspan="2"></td>
      </tr>
    </table>
		 </tr>
    </table>
   </div></div>
<table width="100%" height="46" align="center" cellpadding="0" cellspacing="0" border="0" >
<tr>
<div style='margin-top:545px;'>
<td class="footbg" align="left" valign="middle">
&nbsp; Created By: <a href="https://github.com/AstroLad/" target="_blank">AstroLad</a>&nbsp;&nbsp;&nbsp;"Aspergers Edition Z" &copy; 2013 ALL RIGHTS RESERVED.
</td>
</div>
</tr>
</table>

 </div>  


  

<if:anon_enabled>
  <script src="<tag:protected />/jscript/anon.js" type="text/javascript"></script>

  <script type="text/javascript"><!--
  protected_links = "<tag:protected />";
  auto_anonymize();
  //--></script>
</if:anon_enabled>
</body>
</html>';

         echo $display;
?>
