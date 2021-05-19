<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav>
        <ul>
            <li><a href="views/create.view.php">Add Groceries</a></li>
            <li><a href="views/index.view.php">View Groceries</a></li>
        </ul>
    </nav>

    <table>
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Aantal</th>
            <th>Subtotaal</th>
        </tr>
    
    <?php foreach($groceries as $item): ?>
        <tr>
            <td><?= $item->name;  ?></td>
            <td><?= $item->price;  ?></td>
            <td><?= $item->number;  ?></td>
            <td><?= $item->number * $item->price;  ?></td>
        </tr>
    <?php endforeach; ?>

    </table>
    
</body>
</html>