<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termékek</title>
</head>
<body>
    <h3>Termékek hozzáadása</h3>
    <form method="post" action="./termekek/add.php">
        <input type="text" name="tipus" placeholder="A termék tipusa">
        <input type="text" name="termek" placeholder="A termék neve">
        <button>Hozzá ad</button>
    </form>

    <h3>Termékek törlése</h3>
    <form method="post" action="./termekek/delete.php">
        <input type="text" name="tipus" placeholder="A termék tipusa">
        <input type="text" name="termek" placeholder="A termék neve">
        <button>Törlés</button>
    </form>
</body>
</html>