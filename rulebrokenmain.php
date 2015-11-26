


<!-- The Rulebroken site:
     Original coding: Andrew Hussie
     Rewriting: Orange Karpusi -->


<!doctype html>

<html>
<head>
<meta charset="utf8">
<title>Rulebroken</title>
<?php

$game = $_COOKIE["game"];
$id = 000001;
$saveID = $_COOKIE["pgid"];
// checks for autosave
if ($game == "autosave"){
    // checks if the saved value is less than the id of the page
    if ($id > $saveID){
        setcookie("pgid", $id);
    };
};

?>

<link rel="stylesheet" type="text/css" href="s/content.css">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

<!-- references for mobile device images n stuff -->

<link rel="apple-touch-icon" sizes="57x57" href="i/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="i/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="i/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="i/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="i/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="i/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="i/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="i/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="i/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="i/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="i/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="i/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="i/favicon/favicon-16x16.png">
<link rel="manifest" href="i/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="i/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- end image refs -->

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="c/blogupdatesmain.js"></script>
<script type="text/javascript" src="c/pagesupdatemain.js"></script>

</head>





<body bgcolor="5a5a5a" bottommargin="0" topmargin="0" >

<center>

<table width="" height="" cellpadding="0" cellspacing="0" border="0" bgcolor="" background="">








<!--  FULL LOGO HEADER  -->

<tr>
<td>
    <!-- begin header -->
	<table width="950" height="" border="0" cellpadding="0" cellspacing="0">
    	<tr>
    		<td background="i/other/bannerframe.png" bgcolor="efefef" height="110">
				<center>
					<!-- <script type="text/javascript">
					var images = [],
					index = 0;					
					images[0] = "<a href='http://www.welovefine.com/homestuck-69.html' target='_blank'><img src='http://cdn.mspaintadventures.com/images/WLFtopbanner1.jpg' alt='' border='0'></a>";					
					images[1] = "<a href='http://www.welovefine.com/homestuck-69.html' target='_blank'><img src='http://cdn.mspaintadventures.com/images/WLFtopbanner3.jpg' alt='' border='0'></a>";
					images[2] = "<a href='http://www.welovefine.com/homestuck-69.html' target='_blank'><img src='http://cdn.mspaintadventures.com/images/WLFtopbanner2.jpg' alt='' border='0'></a>";					
					images[3] = "<a href='http://www.welovefine.com/homestuck-69.html' target='_blank'><img src='http://cdn.mspaintadventures.com/images/WLFtopbanner3.jpg' alt='' border='0'></a>";					
					index = Math.floor(Math.random() * images.length); 					
					document.write(images[index]);					
					</script>		-->
				</center>
		</td>
    	</tr>

    	<tr>
    		<td bgcolor="efefef">
    			<a href="rulebrokenmain.html"><img src="i/other/headertitle.gif" width="950" height="66" alt="" border="0"></a></td>
    	</tr>
    	<tr>
    		<td bgcolor="#c6c6c6" height="7"></td>
    	</tr>
    </table>
		<!-- end header -->
</td>
</tr>


<tr>
<td>
    <!-- begin nav -->
    <table width="950" height="17" cellpadding="0" cellspacing="0" border="0" bgcolor="5a5a5a" background="">
    <tr><td></td></tr>
    <tr>
    <td border="0" bgcolor="" height="0" valign="top" style="font-family: arial; font-size: 11px; color: #ffffff;">
        <center style="font-family: arial; size: 11px; color: #ffffff"><b>
    <a href="http://www.mspaintadventures.com/" style="color:#ffffff">RULEBROKEN</a>
     &nbsp; <img src="i/other/candycorn.gif" border="0" align="absmiddle"> &nbsp;    <a href="?viewpage=archive" style="color: #29ff4a;">ARCHIVE</font></a>
     | 
    <a href="?viewpage=new"><font color="29ff4a">NEW READER?</font></a>
     &nbsp; <img src="i/other/candycorn.gif" border="0" align="absmiddle"> &nbsp;    <a href="?viewmap=menu"><font color="39d5f6">MAP</font></a> 
    | 
    <a href="?viewlog=menu"><font color="39d5f6">LOG</font></a> 
    | 
    <a href="?search=menu"><font color="39d5f6">SEARCH</font></a> 
      &nbsp; <img src="i/other/candycorn.gif" border="0" align="absmiddle"> &nbsp;    <a href="?viewpage=shop" class="menuanchorclass" rel="shop"><font color="f7f72a">SHOP</font></a> 
    | 
    <a href="http://homestuck.bandcamp.com/"><font color="f7f72a">MUSIC</font></a> 
      &nbsp; <img src="i/other/candycorn.gif" border="0" align="absmiddle"> &nbsp;    <a href="http://mspaforums.com"><font color="ffb529">FORUMS</font></a> 
    | 
    <a href="unlock.html"><font color="ffb529">SECRETS</font></a> 
    | 
    <a href="credits.html"><font color="ffb529">CREDITS</font></a>
    </b></font></center></td>
    </tr>
    <tr><td></td></tr>
    </table>
    <!-- end nav -->
</td>
</tr>









		

<tr>
<td>
    <table width="" height="" cellpadding="0" cellspacing="0" border="0" bgcolor="" background="">
    <tr>
    <td height="100%" valign="top">
        <!-- begin sidebar -->
        <table width="" height="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="" background="">
        <tr>
        <td width="255" height="100%" bgcolor="" valign="top">
            <table width="255" height="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="c6c6c6" background="">
            <tr>
            <td height="7" bgcolor="efefef"></td>
            </tr>
            <tr>
            <td bgcolor="" valign="top" height="45">
        		<center>
        		<img src="i/other/spacer.gif" height="10" alt=""><br>
        		<img src="i/other/latestpages.png" alt="" height="25"><br>
        		<img src="i/other/spacer.gif" height="10" alt=""><br></center>
        		</td>
        		</tr>
        		<tr>
        		<td valign="top" height="1">

								<!-- LATEST PAGES -->
					            <table width="100%" cellpadding="2" cellspacing="0" border="0">
					            <tr>
					            <td valign="top">
								<p style="font-size: 10px;"><b id="pages">Latest Pages:<br>
<span id="pagesUpdate">
</span></p>
						    </td>
						    </tr>
						    </table>
								<!-- END LATEST PAGES -->
	
        		</td>
        		</tr>
        		<tr>
        		<td valign="top">
            <center><font size="3"><a href="?viewlog=6"><b>VIEW ALL PAGES</b></a></font></center><br>
            				
            <center>
				<!-- ADVENTURE DROPDOWN (unneeded)

            			 <span style="font-size: 10px; line-height: normal">
				 -- <select size="1" name="cid" language="JavaScript" onchange="gotoSite(this)">  <option selected value="http://www.mspaintadventures.com/">Jump to adventure!</option>  <option value="http://www.mspaintadventures.com/?s=1">Jail Break</option>  <option value="http://www.mspaintadventures.com/?s=2">Bard Quest</option>  <option value="http://www.mspaintadventures.com/?s=4">Problem Sleuth</option>  <option value="http://www.mspaintadventures.com/?s=6">Homestuck</option>  </select>  --<br> 
				 </span>
		                 ADVENTURE DROPDOWN -->
						<br>						
        		<!-- cutting out ads n stuff for now. might use it for other things


        		<a href="http://www.paradoxspace.com/" target="_blank"><img src="http://cdn.mspaintadventures.com/scraps2/paradoxspacelogo_side.gif" alt="" border="0"></a><br>
        		<img src="i/other/spacer.gif" height="10" alt=""><br>
        		<img src="http://cdn.mspaintadventures.com/images/merchandise.png" alt=""><br>
        		<img src="i/other/spacer.gif" height="10" alt=""><br>
        		<a href="http://www.whatpumpkin.com/Books/" target="_blank"><img src="http://cdn.mspaintadventures.com/images/sidebanner2012_1.gif" alt="" border="0"></a><br>
        		<img src="i/other/spacer.gif" height="10" alt=""><br>
        		<a href="http://www.topatoco.com/merchant.mvc?Screen=CTGY&Store_Code=TO&Category_Code=MSPA" target="_blank"><img src="http://cdn.mspaintadventures.com/images/sidebanner2012_2.gif" alt="" border="0"></a><br>
        		<img src="i/other/spacer.gif" height="10" alt=""><br>
        		<a href="http://whatpumpkin.com/home.php" target="_blank"><img src="http://cdn.mspaintadventures.com/images/sidebanner2012_3.gif" alt="" border="0"></a><br>
        		<img src="i/other/spacer.gif" height="10" alt=""><br>
        		<a href="http://homestuck.bandcamp.com/" target="_blank"><img src="http://cdn.mspaintadventures.com/images/merchbandcamp.png" alt="" border="0"></a><br> -->
        		<img src="i/other/spacer.gif" height="10" alt=""><br>


        		<img src="i/other/spacer.gif" height="10" alt=""><br>

        		</center>
        		</td>
            </tr>
            <tr>
            <td height="7" bgcolor="#efefef"></td>
            </tr>
            </table> 
        </td>
        <td width="7" bgcolor="efefef"></td>
        </tr>
        </table> 
        <!-- end sidebar -->		
	</td>
    <td width="12"></td>
    <td valign="top">
        <table width="" height="" cellpadding="0" cellspacing="0" border="0" bgcolor="" background="">




        <tr>
        <td>
			<!-- begin comic content -->            
	    <table width="676" height="" cellpadding="0" cellspacing="0" border="0" bgcolor="" background="">
            <tr>
            <td width="7" height="100%" bgcolor="c6c6c6"></td>
            <td width="669" height="100%" bgcolor="efefef">
                <table width="669" height="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="" background="">
                <tr>
                <td height="7" bgcolor="c6c6c6"></td>
                </tr>
                <tr>
                <td>
								<center>
			<!-- COMIC STUFF -->

	  <table width="650" border="0" align="center" cellpadding="0" cellspacing="0" >

	    <tr>

	    <td bgcolor="#EEEEEE" width="100%">
	        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
	          <tr>
	            <td>
	  		<img src="i/other/v2_blankstrip.gif" border="0">
	            </td>
	          <td>
	            <center>
		      	<p style="font-weight: bold; font-family: courier, monospace; color:#000000"><font size="6">Rulebroken
</font></p>
	            </center>
	          </td>
	            <td>
	  		<img src="i/other/v2_blankstrip.gif" border="0">
	            </td>
	          </tr>
	        </table>
	    </td>


	    </tr>

	    <tr>
	    <td bgcolor="#EEEEEE">
		<img src="http://cdn.mspaintadventures.com/storyfiles/hs2/00001.gif">
	    </td>
	    </tr>

	    <tr>
	    <td bgcolor="#EEEEEE">
		<img src="i/other/v2_blanksquare2.gif" border="0">
	    </td>
	    </tr>

	    <tr>
	    <td bgcolor="#EEEEEE">
	        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
	          <tr>
	          <td>
	            <center>
		      	<p style=" font-weight: bold; font-family: courier, monospace;color:#000000">
	
			A young man stands in his bedroom. It just so happens that today, the 13th of April, 2009, is this young man's birthday. Though it was thirteen years ago he was given life, it is only today he will be given a name!
<br>

<br>
What will the name of this young man be?

			</p>
	            </center>
	          </td>
	        </tr>
	        </table>
	    </td>
	    </tr>

    	    <tr>
    	    <td width="100%"><img src="i/other/v2_blanksquare3.gif" border="0"></td>
    	    </tr>

	    <tr>
	    <td bgcolor="#EEEEEE">
		  <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EEEEEE">
		    <tr>
		    <td>
			<font size="5">&gt; <a href="?s=6&p=001902
">Enter name.
</a></font><br>
		
			<br><br>
			<span style="font-size: 10px;"><b><a href="/game.php?game=save&pgid=000001"><font color="#0000FF">Save Game</font></a> <a href="" onClick="window.open('popups/save.php', 'popup', 'width=300,height=300,scrollbars=yes')"><font color="#0000FF">(?)</font></a></b> | <b><a href="/game.php?game=autosave&pgid=000001"><font color="#0000FF">Auto-Save!</font></a> <a href="" onClick="window.open('popups/autosave.php', 'popup', 'width=300,height=300,scrollbars=yes')"><font color="#0000FF">(?)</font></a></b> | <b><a href="/game.php?game=load"><font color="#0000FF">Load Game</font></a></b> | <b><a href="/game.php?game=delete&pgid=001901"><font color="#0000FF">Delete Game Data</font></a></b></span>	
			<br>	
		    </td>
		    </tr>
		  </table>
	    </td>
	    </tr>


	  </table>



								<!-- COMIC STUFF -->
								</center>
            		</td>
								</tr>
                <tr>
                <td><img src="i/other/spacer.gif" height="20" alt=""></td>
                </tr>								
								<tr>
								<td>
                		<center>
            				<table width="639" height="" cellpadding="0" cellspacing="0" border="0" bgcolor="" background="">
                    </table>
            				</center>								
								</td>
								</tr>
                <tr>
                <td><img src="i/other/spacer.gif" height="10" alt=""></td>
                </tr>
                <tr>
                <td height="7" bgcolor="c6c6c6"></td>
                </tr>
                </table> 
            </td>
            </tr>
            </table> 
						<!-- end comic content -->				
	</td>
        </tr>



        <tr>
        <td>
            <table width="676" height="" cellpadding="0" cellspacing="0" border="0" bgcolor="" background="">


            <tr>
	    <td colspan="2" height="12" bgcolor=""></td>
	    </tr>
	    <tr>
            <td height="100%" valign="top">
                <!-- begin news  -->
		<table width="468" height="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="c6c6c6" background="">
                <tr>
                <td bgcolor="efefef" valign="top">
                    <table width="454" height="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="" background="">
                    <tr>
                    <td valign="middle" height="100"> 
                    <center><img src="i/other/news.gif" alt=""></center>
                    </td>
                    </tr>
                    <tr>
                    <td valign="top">
                        <div id="blog">
                        </div>
                    </td>
                    </tr>
                    </table>
                </td>
                </tr>
                </table>
								<!-- end news  -->						
						</td>
            <td valign="top">
									
						</td>
            </tr>
            </table> 				
				</td>
        </tr>
        </table> 		
    </td>
    </tr>
    </table> 
</td>
</tr>





<tr>
<td>
    <!-- begin nav -->
    <table width="950" height="17" cellpadding="0" cellspacing="0" border="0" bgcolor="5a5a5a" background="">
    <tr><td></td></tr>
    <tr>
    <td border="0" bgcolor="" height="0" valign="top" style="font-family: arial; font-size: 11px; color: #ffffff;">
        <center style="font-family: arial; size: 11px; color: #ffffff"><b>
    <a href="http://www.mspaintadventures.com/" style="color:#ffffff">RULEBROKEN</a>
     &nbsp; <img src="i/other/candycorn.gif" border="0" align="absmiddle"> &nbsp;    <a href="?viewpage=archive" style="color: #29ff4a;">ARCHIVE</font></a>
     | 
    <a href="?viewpage=new"><font color="29ff4a">NEW READER?</font></a>
     &nbsp; <img src="i/other/candycorn.gif" border="0" align="absmiddle"> &nbsp;    <a href="?viewmap=menu"><font color="39d5f6">MAP</font></a> 
    | 
    <a href="?viewlog=menu"><font color="39d5f6">LOG</font></a> 
    | 
    <a href="?search=menu"><font color="39d5f6">SEARCH</font></a> 
      &nbsp; <img src="i/other/candycorn.gif" border="0" align="absmiddle"> &nbsp;    <a href="?viewpage=shop" class="menuanchorclass" rel="shop"><font color="f7f72a">SHOP</font></a> 
    | 
    <a href="http://homestuck.bandcamp.com/"><font color="f7f72a">MUSIC</font></a> 
      &nbsp; <img src="i/other/candycorn.gif" border="0" align="absmiddle"> &nbsp;    <a href="http://mspaforums.com"><font color="ffb529">FORUMS</font></a> 
    | 
    <a href="unlock.html"><font color="ffb529">SECRETS</font></a> 
    | 
    <a href="credits.html"><font color="ffb529">CREDITS</font></a>
    </b></font></center></td>
    </tr>
    <tr><td></td></tr>
    </table>
    <!-- end nav -->
</td>
</tr>



<tr>
<td>
    <!-- begin footer -->
		<table width="950" height="" border="0" cellpadding="0" cellspacing="0">
    	<tr>
    	<td bgcolor="#c6c6c6" height="7"></td>
    	</tr>
    	<tr>
    	<td bgcolor="efefef" height="65" valign="bottom"><a href="../rulebrokenmain.html"><img src="i/other/title.png" width="950" height="66" alt="" border="0"></a></td>
			</tr>
			
    	</tr>
			<tr>
			<td> </td>
			</tr>
    </table>
		<!-- end footer -->
</td>
</tr>
</table> 
</center>




</body>
</html>










