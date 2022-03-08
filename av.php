<?php
include "hexicon.php";
ini_set("display_errors", true);


if ( isset($_GET['link']) ) {
    $link = $_GET['link'];
    $type = "alph";
    if ($type == "alph") {
        $n = random_int(1, 2);
        $name = xxx($n);

        do {
            $name = xxx($n);
        } while (is_dir($name));

        $data = "
        <!doctype html>
        <html>
        
        <head>
            <title>AV Cutter: $link</title>
            <link rel=\"icon\" type=\"image/png\" href=\"./favicon.ico\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
            <meta http-equiv=\"refresh\" content=\"3; URL=$link\" />
            <link rel=\"stylesheet\" href=\"assets/css/main.css\" />
        </head>
        
        <body>
            <!-- Logo -->
            <div class=\"logo\">
                <img src=\"assets/img/logo.png\" height=\"200px\" alt=\"AV Cutter\" srcset=\"assets/img/logo_transparent.png\">
            </div>
        
            <!-- Input -->
            <div class=\"input\">
                <h1>Redirrecting to $link</h1>
            </div>
        </body>
        ";
        mkdir($name);
        file_put_contents($name . "/index.html", $data);
    }
?>
<!doctype html>
<html>

<head>
    <title>AV Cutter | Creating link</title>
    <link rel="icon" type="image/png" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
    <!-- Logo -->
    <div class="logo">
        <img src="assets/img/logo.png" height="200px" alt="AV Cutter" srcset="assets/img/logo_transparent.png">
    </div>

    <!-- Input -->
    <div class="input">
        <form action="av.php" method="get">
            <h2>Your shortend link is <a href="<?="/" . $name?>"><?="http://localhost/" . $name?></a></h2>
        </form>
    </div>
</body>

<?php
}