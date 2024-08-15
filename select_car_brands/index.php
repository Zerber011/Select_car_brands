<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
</head>
<body>
    
    <form method="GET">
        <select name="brand">
        <option value="ALL">ALL</option>
        <option value="Audi">Audi</option>
        <option value="Mercedes">Mercedes</option>
        <option value="BMW">BMW</option>
        <option value="Opel">Opel</option>
        </select>

        <button type="submit">Select</button>
    </form>

    <?php
        require_once "select_brands.php";
    ?>

</body>
</html>