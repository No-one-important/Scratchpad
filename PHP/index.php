<html>
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.10.2/p5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.10.2/addons/p5.sound.min.js"></script>
    <meta charset="utf-8" />
    <link rel="icon" href="icon.ico">
    <?php
        function get($name, $default)
        {
            $out = $_GET[$name];
            if ($out == "")
            {
                $out = $default;
            }
            return $out;
        }

        $title = get('title', "Scratchpad");
        $mobile = get('mobile', "0");
        echo "<title>$title</title>";
        if ($mobile == "1")
	        {
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"mobile.css\">";
        }
        else
        {
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">";
        }
    ?>
  </head>

  <body>
    <?php
        $baseColor = get('baseClr', "cyan");
        $text = get('text', "firebrick");
        $channel = get('ch', "0");
        $font = get('font', "arial");
        $conf = get('conf', "0");
        
        
        if ($mobile == "1")
        {
            $size = get('size', "25");
        }
        else
        {
             $size = get('size', "16");
        }
        
        if ($conf == "1") {
            echo "<script>window.addEventListener(\"beforeunload\", function (e) {
                    let confirmationMessage = \"\o/\";
                    (e || window.event).returnValue = confirmationMessage; //Gecko + IE
                    return confirmationMessage;                            //Webkit, Safari, Chrome
                });
            </script>";
        }
        
        echo "<h1>Welcome To Scratchpad</h1>";
        if ($mobile == "true")
        {
            echo "<div id=\"editor\" contenteditable=\"true\" style=\"height: 100%; width: 70%; border: 1px solid; padding: 10px; background-color: $baseColor; color: $text; font-size: $size; font-family: $font, arial; border-radius: 3px;\"></div>";
            echo "<script>let channel = $channel;</script>";
            echo "<script src=\"mobile.js\"></script>";
            echo "<script src=\"save.js\"></script>";

        }

        else
        {
            echo "<div id=\"editor\" contenteditable=\"true\" style=\"height: 100%; width: 70%; border: 1px solid; padding: 10px; background-color: $baseColor; color: $text; font-size: $size; font-family: $font, arial; border-radius: 3px;\"></div>";
            echo "<script>let channel = \"$channel\";</script>";
            echo "<script src=\"src.js\"></script>";
            echo "<script src=\"save.js\"></script>";
        }
    ?>
  </body>

</html>
