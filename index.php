<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>
    <?php
        $products = [
            [
                'name' => 'mobile',
                'price' => 44,
                'url' => 'http://example.com'
            ],
            [
                'name' => 'desktop',
                'price' => 33,
                'url' => 'http://example.com'
            ]
        ];
       
    ?>

    <ul>
        <?php foreach ($products as $product) : ?>
            <li>
                <a href="<?= $product['url'] ?>">
                    <?= $product['name'] ?> (<?= $product['price'] ?>)
                </a>
            </li>
        <?php endforeach; ?>
        
    </ul>
</body>
</html>