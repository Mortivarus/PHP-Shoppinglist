<?php require('partials/head.php');?>


<h1>Grocery shopping is so much fun! Hold the phone, you're not done!</h1>




<form method="POST" action="/groceries">
    <label for="name">Name</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="price">Price</label><br>
    <input type="text" id="price" name="price"><br>
    <label for="number">Amount</label><br>
    <input type="number" id="number" name="number" min="1" max="100"><br>
    <input type="submit">
</form>

<?php require('partials/footer.php');?>


