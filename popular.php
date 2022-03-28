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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Movie LK21</title>
</head>
<body>
<?php foreach($result as $mv): ?>
    <ul>
        <img src="<?= $mv['options']['image'] ?>" alt="">
        <li>Nama : <?= $mv['options']['name']?></li>
        <li>Tahun : <?= $mv['categories']?> </li>
        <li>Kualitas : <?= $mv['quality']?> </li>
        <li>Link : <?= $mv['downloadLink']?> </li>
        <li>Tahun : <?= $mv['categories']?> </li>
    </ul>
<?php endforeach;?>
</body>
</html>