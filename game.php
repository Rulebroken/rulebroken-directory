<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Rulebroken</title>
    </head>
    <body>
        <?php
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
                    break;
                default: echo "whoops! try again";
            };
        ?>
    </body>
</html>