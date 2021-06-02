<?php require('partials/head.php');?>

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

<?php require('partials/footer.php');?>