<?php 
session_start();
?>

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
                            <?php
                            if(isset($_GET['id'])){
                                $connection = mysqli_connect("localhost","root","","Crud_project" );
                                $id = $_GET['id'];
                                $fetch_data = "SELECT * FROM felhasznalo WHERE id='$id'";
                                $fetch_data_run = mysqli_query($connection,$fetch_data);

                                if(mysqli_num_rows($fetch_data_run) > 0)
                                {
                                    foreach($fetch_data_run as $row){
                                        
                                        ?>
            <form action="db.php" method="POST">
            <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>">
                <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Teljes név</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">   
                </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">E-mail</label>
                    <input type="e-amil" class="form-control" name="email" value="<?php echo $row['email'];?>">
                    </div>
                    <div class="mb-3 form-check">
                        <label for="exampleInputEmail1" class="form-label">Telefonszám</label>
                        <input type="number" class="form-control" name="phone" value="<?php echo $row['phone'];?>">
                 </div>
                    <button type="submit" name="update_btn"class="btn btn-primary">Adat feltöltése</button>
            </form>
                    <?php
                        }
                         }else
                            {                                 
                            echo "no record found"; 
                            header('location: ./index.php');
                            }
                            }else{
                                echo "something went wrong";
                                header('location: ./edit.php');
                            }
                            ?>      
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>