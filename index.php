<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Page</title>
</head>
<body>
    <h1>Welcome to My Simple PHP Page</h1>
    <p>
        <?php
            echo "Hello, today is " . date("l, F j, Y") . ".";
        ?>
    </p>
    <p>
        <?php
            $hour = date("H");
            if ($hour < 12) {
                echo "Good morning!";
            } elseif ($hour < 18) {
                echo "Good afternoon!";
            } else {
                echo "Good evening!";
            }
        ?>
    </p>
    <p>
        <?php
            echo "The current server time is " . date("h:i:s A") . ".";
        ?>
    </p>
</body>
</html>