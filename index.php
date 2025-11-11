<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploring WordPress Customization</title>
</head>
<body>
   
    <h1>Exploring WordPress Customization</h1>
    <p>Samuel London</p>
    <p>11/10/2025</p>

    <?php
    
    $themeName = "Ocean Breeze";   String
    $numPlugins = 12;              Integar
    $isResponsive = true;          Boolean

    // User-defined function using two variables
    function describeTheme($name, $plugins) {
        return "The theme <strong>$name</strong> currently uses <strong>$plugins</strong> plugins for customization.";
    }

    
    echo "<h2>" . describeTheme($themeName, $numPlugins) . "</h2>";

    
    echo "<p><strong>Comparison:</strong> Javascript is client side, scrpited language. while php is server sided.</p>";
    ?>
</body>
</html>
