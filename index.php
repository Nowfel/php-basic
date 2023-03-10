<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>
    <?php
        $movies = [
            [
                'name' => 'Back to the Future',
                'releaseYear' => 1985,
            ],

            [
                'name' => "Weekend at Bernie's",
                'releaseYear' => 1989,
            ],

            [
                'name' => 'Pirates of the Caribbean',
                'releaseYear' => 2003,
            ],

            [
                'name' => 131,
                'releaseYear' => 2014,
            ],
        ];

       
        $filteredBooks = array_filter($movies, function ($movie) {
            return $movie['name'] != 'Back to the Future';
        });
    ?>

    <ul>
        <?php foreach ($filteredBooks as $movie) : ?>
            <li>
                <?= $movie['name'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>