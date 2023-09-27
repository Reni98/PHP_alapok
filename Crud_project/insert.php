<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=.s, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Insert</title>
</head>
<body>
    <div class="section">
    <div class="container">
         <div class="row">
                <div class="card">
                    <h4>Adat feltöltése</h4>
                    <div class="card-body">
            <form action="db.php" method="post">
            <div class="mb-3 mt-3">
            <label for="exampleInputEmail1" class="form-label">Teljes név</label>
            <input type="text" class="form-control" name="name">
   
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                <input type="e-amil" class="form-control" name="email">
            </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefonszám</label>
                <input type="number" class="form-control" name="phone">
            </div>
            <button type="submit" name="insert_btn"class="btn btn-primary">Adat hozzáadása</button>
            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>