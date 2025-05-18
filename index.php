<?php

$root = __DIR__;

function listDirectory($dir) {
    $items = scandir($dir);
    $items = array_diff($items, ['.', '..']);

    echo "<ul>";

    foreach ($items as $item) {
        $fullPath = "$dir/$item";
        $relativePath = str_replace(__DIR__ . '/', '', $fullPath);

        if (is_dir($fullPath)) {
            echo "<li><strong>$item/</strong>";
            listDirectory($fullPath);
            echo "</li>";
        } elseif (pathinfo($item, PATHINFO_EXTENSION) === 'php' && $item !== 'index.php') {
            echo "<li><a href=\"/$relativePath\">$item</a></li>";
        }
    }

    echo "</ul>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Algorithm Patterns</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 2rem;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        ul {
            list-style-type: none;
            padding-left: 1.2rem;
        }
        li {
            margin: 0.3rem 0;
        }
    </style>
</head>
<body>
    <h1>📁 Algorithm Patterns</h1>
    <p>Click a PHP file to run it:</p>

    <?php listDirectory($root); ?>
</body>
</html>
