<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Nyaralás tervezés</h1>
    <div class="container">
        <form method="post" action="">
            <label for="uticel">Uticél:</label>
            <input type="text" name="uticel" id="uticel" required><br><br>

            <label for="indulas">Indulási idő:</label>
            <input type="date" name="indulas" id="indulas" required><br><br>

            <label for="visszaindulas">Vissza indulás:</label>
            <input type="date" name="visszaindulas" id="visszaindulas" required><br><br>
            <label for="utazok">Utazók:</label>
            <select id="utazok" name="utazok">
                <option value="1">1 felnőt</option>
                <option value="2">2 felnőt</option>
                <option value="1+1">1 felnőt, 1 gyerek</option>
                <option value="2+1">2 felnőt, 1 gyerek</option>
            </select><br><br>

            <input type="submit" name="foglalas" value="Foglalas">
            <input type="reset"   value="Törlés">
        </form>
    </div>
    <?php
        if(isset($_POST['foglalas'])){
            $uticel=$_POST['uticel'];
            $indulas=$_POST['indulas'];
            $visszaindulas = $_POST['visszaindulas'];
            $utazok = $_POST['utazok'];

        echo "<h2>Az utazás összegzése:</h2><br>";
        echo "Az uticél: $uticel <br>";
        echo "Az indulás dátuma: $indulas <br>";
        echo "A visszérkezés dátuma: $visszaindulas <br>";
        echo "Az utazok: $utazok";
        }
        

        
    ?>

</body>
</html>