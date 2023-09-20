<!DOCTYPE html>
<html>
<head>
    <title>Pizza Rendelés</title>
</head>
<body>
    <h1>Online Pizza Rendelés</h1>

    <?php
    // Előre definiált pizzatípusok és feltétek
    $pizzak = array(
        "Margaréta" => 1700,
        "Hawaii" => 2000,
        "Pepperoni" => 3400,
        "Gombás" => 2100
    );

    $feltet = array(
        "Sajt" => 300,
        "Sonka" => 230,
        "Gomba" => 130,
        "Olajbogyó" => 200
    );

    // Változók inicializálása
    $megrendeltPizza = $megrendeltFeltet = "";
    $pizzaAr = $feltetAr = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Megrendelt pizza és hozzávalók beolvasása
        $megrendeltPizza = $_POST["pizza"];
        if (!empty($_POST["feltet"])) {
            $megrendeltFeltet = $_POST["feltet"];
        }

        // Számoljuk ki a rendelés teljes árát
        $pizzaAr = $pizzak[$megrendeltPizza];
        foreach ($megrendeltFeltet as $fel) {
            $feltetAr += $feltet[$fel];
        }

        $vegsoAr = $pizzaAr + $feltetAr;

        // Megjelenítjük a rendelés visszaigazolását
        echo "<h2>Rendelési visszaigazolás</h2>";
        echo "<p>Ön a következőt rendelte:</p>";
        echo "<p>Pizza: $megrendeltPizza - Ár: $pizzaAr Ft</p>";
        if (!empty($megrendeltFeltet)) {
            echo "<p>Feltétek: " . implode(", ", $megrendeltFeltet) . " - Ár: $feltetAr Ft</p>";
        }
        echo "<p>Végösszeg: $vegsoAr Ft</p>";
    }
    ?>
    <h2>Pizza választék:</h2>
    <form method="post" action="">
        <label for="pizza">Válasszon pizzát:</label>
        <select name="pizza" id="pizza">
            <?php
            foreach ($pizzak as $pizza => $ar) {
                echo "<option value='$pizza'>$pizza - $ar Ft</option>";
            }
            ?>
        </select>
        <br>

        <label for="feltet">Válassza ki a feltéteket (opcionális):</label><br>
        <?php
        foreach ($feltet as $fel => $ar) {
            echo "<input type='checkbox' name='feltet[]' value='$fel'>$fel - $ar Ft<br>";
        }
        ?>
        <br>
        <input type="submit" value="Rendelés elküldése">
    </form>
</body>
</html>
