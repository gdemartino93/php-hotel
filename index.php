<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Hotels</title>

    <?php
        $hotels = [
            [
                'name' => 'Hotel Belvedere',
                'description' => 'Hotel Belvedere Descrizione',
                'parking' => true,
                'vote' => 4,
                'distance_to_center' => 10.4
            ],
            [
                'name' => 'Hotel Futuro',
                'description' => 'Hotel Futuro Descrizione',
                'parking' => true,
                'vote' => 2,
                'distance_to_center' => 2
            ],
            [
                'name' => 'Hotel Rivamare',
                'description' => 'Hotel Rivamare Descrizione',
                'parking' => false,
                'vote' => 1,
                'distance_to_center' => 1
            ],
            [
                'name' => 'Hotel Bellavista',
                'description' => 'Hotel Bellavista Descrizione',
                'parking' => false,
                'vote' => 5,
                'distance_to_center' => 5.5
            ],
            [
                'name' => 'Hotel Milano',
                'description' => 'Hotel Milano Descrizione',
                'parking' => true,
                'vote' => 2,
                'distance_to_center' => 50
            ],
        ];
        $filteredArray = array_filter(
            $hotels,
            function($hotel){
                return $hotel['vote'] == $_GET["vote"];
            }
        );
        // var_dump($filteredArray);
    ?>

</head>
<body>
<div class="container">
    <div class="row d-flex justify-content-start align-items-center my-5">
        <form class="d-flex flex-column col-4 ">
            <label>Parcheggio Disponibile <input type="checkbox" name="parking" id="yes" class="mx-4"></label>
            
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Inserisci il voto da 1 a 5" aria-label="Recipient's username" aria-describedby="button-addon2" name="vote">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >Button</button>
            </div>

            
        </form>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nome </th>
                <th scope="col">Descrizione </th>
                <th scope="col">Parcheggio </th>
                <th scope="col">Voto </th>
                <th scope="col"> Distanza dal centro </th>
            </tr>
        </thead>
        <tbody>
        <?php

        if (isset($_GET["vote"]) === false){

       
            foreach ($hotels as $hotel){
                $name = $hotel["name"];
                $description = $hotel["description"];
                $parking = $hotel["parking"];
                $vote = $hotel["vote"];
                $distanceToCenter = $hotel["distance_to_center"];
                echo
                '<tr>' .
                    '<th scope="row">' . $name . '</th>' .
                    '<td>' . $description .'</td>' .
                    '<td>' . $parking .'</td>' .
                    '<td>' . $vote .'</td>' .
                    '<td>' . $distanceToCenter .'</td>' .
                    
                    
                '</tr>';
            };
        }else{
            foreach ($filteredArray as $hotel){
                $name = $hotel["name"];
                $description = $hotel["description"];
                $parking = $hotel["parking"];
                $vote = $hotel["vote"];
                $distanceToCenter = $hotel["distance_to_center"];
                echo
                '<tr>' .
                    '<th scope="row">' . $name . '</th>' .
                    '<td>' . $description .'</td>' .
                    '<td>' . $parking .'</td>' .
                    '<td>' . $vote .'</td>' .
                    '<td>' . $distanceToCenter .'</td>' .
                    
                    
                '</tr>';
            };
    }
        echo $userVote;
        ?>

        </tbody>
        
    </table>
</div>

</body>
</html>