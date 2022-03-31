<?php
require 'lib.php';

$response = client_http()->request('GET', 'popular');
$result = json_decode($response->getBody()->getContents(), true)['data'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular Movie LK21</title>
</head>
<body>
<div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
        <?php foreach($result as $mv): ?>
            <div class="max-w-sm rounded overflow-auto shadow-lg">
                <img class="w-full" src="<?= $mv['options']['image'] ?>">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2"><?= $mv['options']['name']?> <?= $mv['quality']?></div>
                    <a href="<?= $mv['downloadLink']?> " class="text-gray-700 text-base"> Klik disini untuk mendownload</a>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><?= $mv['categories'] ?></span>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</body>
</html>