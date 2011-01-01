<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head> 
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/> 
    <meta name="author" content="Gian Carlo Val Ebao"/> 
 
    <title>PHP code QA: PHP CodeSniffer UI</title> 
    <style type="text/css">
        p, div, ul, li, label,form, fieldset {
            padding: 0;
            margin: 0;
            position: relative;
        }
        
        body {
            font-family: "Verdana";
        }
        
        form input#path {
            width: 100%;
            clear: both;
            border: 0;
        }
        
        form div {
            overflow-x: none;
            overflow-y: auto;
            height: 200px;
        }
        
        iframe {
            width: 100%;
            height: 500px;
            border: 0;
        }
    </style>
</head>

<body id="home">
    <h1>PHP code QA</h1>
    <?php require 'scripts/browser.php'?>
    <div id="container">
        <form action="sniff.php" target="list-frame" method="get">
            <fieldset>
                <p><label for="path">Start in: </label><input type="text" id="path" name="path" value="<?php echo $root?>"/></p>
                <p><input type="submit" name="process" value="sniff!"/></p>
                <div>
                    <ul>
                    <?php foreach($tree as $entry):?>
                        <li class="<?php echo $entry['type']?>"><a href="?root=<?php echo $entry['path']?>"><?php echo $entry['name']?></a></li>
                    <?php endforeach?>
                    </ul>
                </div>
            </fieldset>
        </form>
        <iframe src="about:blank" name="list-frame" id="list-frame">
        </iframe>
    </div>
</body>
</html>