<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
    <title>CRUD Project PHP-val</title>
</head>
<body>
<body>
    <div class="section">
        <div class="container">
            <div class="row">                   
                    <div class="card">
                        <div class="card-header">
                            <h4 class="fw-bold text-center" >PHP CRUD</h4>
                            <a href="insert.php" class="btn btn-primary">Adat feltöltése</a>
                        </div>
                    </div>
                    <div class="card-body">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Név</th>
                            <th>E-mail</th>
                            <th>Tel.:</th>
                            <th>Szerkesztés</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php
                        $connection = mysqli_connect("localhost","root","","Crud_project" );
                        $fetch_query = "SELECT * FROM felhasznalo";
                        $fetch_query_run = mysqli_query($connection,$fetch_query);
  
                        if(mysqli_num_rows($fetch_query_run) > 0)
                             {
                                 foreach($fetch_query_run as $row){
                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                 <td>
                                    <a class="btn btn-success" href="edit.php?id=<?php echo $row['id'];  ?> ">Szerkesztés</a>
                                </td>  
                                 <td>
                                        <form action="code.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                         <button type="submit" name="delete_btn">Delete</button>
                                        </form>
                                    </td>
                            </tr>
                                <?php
                                    }
                                    }
                                 else
                                {
                                 ?>
                                <tr>
                                    <td colspan="4">No record found</td>
                                </tr>
                                <?php
                                    }
                                 ?>   
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
function myFunction() {
  alert("Hello! I am an alert box!");
}
</script>
</body>
</html>
