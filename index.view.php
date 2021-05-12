<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Aantal</th>
            <!-- <th>Subtotaal</th> -->
        </tr>
    
    <?php foreach($groceries as $item): ?>
        <tr>
            <td><?= $item["Product"];  ?></td>
            <td><?= $item["Prijs"];  ?></td>
            <td><?= $item["Aantal"];  ?></td>
        </tr>
    <?php endforeach; ?>

    </table>
    
</body>
</html>