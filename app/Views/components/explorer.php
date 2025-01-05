<?php

$basePath =  ROOTPATH;  
$currentDir = isset($_GET['dir']) ? $_GET['dir'] : '';

$dirPath = $currentDir ? $basePath . '/' . $currentDir : $basePath;

if (!is_dir($dirPath)) {
    die("Dizin bulunamadı.");
}

$files = scandir($dirPath);


$items = [];
foreach ($files as $file) {
    if ($file != '.' && $file != '..') {
        $items[] = $file;
    }
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basit Proje Explorer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .file-list {
            list-style-type: none;
            padding: 0;
        }

        .file-item {
            background-color: #fff;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .file-item:hover {
            background-color: #e0e0e0;
        }

        .folder {
            font-weight: bold;
        }

        .file {
            color: #2a2a2a;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .back-button {
            display: inline-block;
            margin-bottom: 20px;
            font-weight: bold;
            color: #007bff;
            cursor: pointer;
        }

        .back-button:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Proje Explorer</h1>

    <?php if ($currentDir): ?>
        <a href="?dir=" class="back-button">Geri Dön</a>
    <?php endif; ?>

    <ul class="file-list">
        <?php foreach ($items as $item): ?>
            <?php
                $itemPath = $dirPath . '/' . $item;
                $isDir = is_dir($itemPath);
                $itemLink = $isDir ? '?dir=' . $currentDir . '/' . $item : $itemPath;
            ?>
            <li class="file-item">
                <?php if ($isDir): ?>
                    <a href="<?php echo $itemLink; ?>" class="folder"><?php echo $item; ?>/</a>
                <?php else: ?>
                    <a href="<?php echo $itemLink; ?>" class="file"><?php echo $item; ?></a>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

</body>
</html>
