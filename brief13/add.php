<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>

<body>
    


    <form action="index.php" method="POST">

        <input type="text" name="titre" required placeholder="titre"><br><br>

        <input type="file"  name="image" required placeholder="image"><br><br>

        <textarea rows="4" cols="50" name="description" required placeholder="description"></textarea><br><br>

        <input type="number" name="superficie" required placeholder="superficie"><br><br>

        <textarea rows="4" cols="50" name="adress" required placeholder="adresse"></textarea><br><br>

        <input type="number" name="montant" required placeholder="montant"><br><br>

        <input type="date" name="date_dannonce" required placeholder="Annone_Date"><br><br>

        <input type="text" name="type_dannonce" required placeholder="Type_Annonce"><br><br>

        <input type="submit" name="insert" value="Add Data To Database">

        </form>
    <?php
    
    ?>
</body>

</html>