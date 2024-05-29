<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertisements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<h1>Advertisements</h1>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Title</th>
    </tr>
    </thead>
    <tbody>
    <?php

    include '../controller/AdvertisementController.php';

    $ads = new AdvertisementController();

    foreach ($ads->getAllAdvertisement() as $ad) {
        echo "<tr>";
        echo "<td>" . $ad->getId() . "</td>";
        echo "<td>" . $ad->getUserName() . "</td>";
        echo "<td>" . $ad->getTitle() . "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>
