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
                'name' => 'Interstellar',
                'releaseYear' => 2014,
            ],
        ];

        // Extra Credit:
        // Research and apply the array_filter() function on your own.
        function filterByRecent($movies)
        {
            $filteredMovies = [];
            foreach ($movies as $movie) {
                if ($movie['releaseYear'] >= 2000) {
                    $filteredMovies[] = $movie;
                    // echo $movie['name']."<br>";
                    // echo $filteredMovies[0]['releaseYear'];

                }
            }

            return $filteredMovies;
        }
    ?>

    <ul>
        <?php foreach (filterByRecent($movies) as $movie) : ?>
            <li>
                <?= $movie['name'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html><!doctype html>
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
                'name' => 'Interstellar',
                'releaseYear' => 2014,
            ],
        ];

      
  
        // function filterByRecent($movies)
        // {
        //     $filteredMovies = [];
        //     foreach ($movies as $movie) {
        //         if ($movie['releaseYear'] >= 2000) {
        //             $filteredMovies[] = $movie;
        //             // echo $movie['name']."<br>";
        //             // echo $filteredMovies[0]['releaseYear'];

        //         }
        //     }

        //     return $filteredMovies;
        // }

        $filteredBooks = array_filter($movies, function ($movie) {
            return $movie['name'] != 'Bac to the Future';
        });
    ?>

    <ul>
        <?php foreach ( $filteredBooks as $movie) : ?>
            <li>
                <?= $movie['name'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>