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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <?php foreach ($hotels as $hotelNumber => $hotel) {
    ?>
        <ul>
            <li>
                <div>
                    Name: <?php echo($hotel["name"]); ?>
                    <br>
                    Desc: <?php echo($hotel["description"]); ?>
                    <br>
                    Has parking: <?php echo($park = $hotel["parking"] ? "si" : "no"); ?>
                    <br>
                    Vote: <?php echo($hotel["vote"]); ?>
                    <br>
                    Distance to Center: <?php echo($hotel["distance_to_center"]." km"); ?>
                </div>
                <div>
                    <table class="table-auto">
                        <thead>
                            <tr>
                            <th>Name</th>
                            <th>Desc</th>
                            <th>Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                            <td>Malcolm Lockyer</td>
                            <td>1961</td>
                            </tr>
                            <tr>
                            <td>Witchy Woman</td>
                            <td>The Eagles</td>
                            <td>1972</td>
                            </tr>
                            <tr>
                            <td>Shining Star</td>
                            <td>Earth, Wind, and Fire</td>
                            <td>1975</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </li>
        </ul>
        
    <?php } ?>
</body>
</html>