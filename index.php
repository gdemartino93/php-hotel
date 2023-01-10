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
    ?>
    <style lang="">
.item {
  width:500px;
  background-color: bisque;
  border-radius: 4px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 10px auto;
  padding: 2rem;
  box-shadow: 5px 5px 10px black;
}
    </style>
</head>
<body>
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
    }
    ?>

    </tbody>
    
</table>

</body>
</html>