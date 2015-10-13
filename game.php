<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Rulebroken</title>
    </head>
    <body>
        <?php
            // in theory, our url would be rulebroken.net
            // if it's not, ill have to change this
            $game = htmlspecialchars($_GET["game"])
            $pgid = htmlspecialchars($_GET["pgid"])
            
            switch ($game){
                case 'save':
                    setcookie("pgid", $pgid);
                    header('Location: http://www.rulebroken.net/p/'. $pgid . '.php');
                    break;
                case 'autosave':
                    setcookie("pgid", $pgid);
                    setcookie("game", "autosave");
                    header('Location: http://www.rulebroken.net/p/'. $pgid . '.php');
                    break;
                case 'load':
                    $loadPGID = htmlspecialchars($_COOKIE["pgid"]);
                    header('Location: http://www.rulebroken.net/p/'. $loadPGID . '.php');
                    break;
                case 'delete':
                    setcookie("pgid", "", time() - 3600);
                    setcookie("game", "", time() - 3600);
                    header('Location: http://www.rulebroken.net/p/'. $pgid . '.php');
                    break;
                default: echo <html>


<head>
<title>MS Paint Adventure</title>
<style type="text/css">

body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
	margin-top: 0px;
	margin-bottom: 0px;
}
body {
	background-color: #DDDDDD;
}

</style></head>

<body>
<table width="100%" border="0" align="center" cellpadding="10" cellspacing="0" bgcolor="#EEEEEE">
  <tr>
  <td>

<span> whoops! try again. youre not supposed to have got here like this.</span><br><br>


  </td>
  </tr>
</table>


</center>




</html>
            
        ?>
    </body>
</html>