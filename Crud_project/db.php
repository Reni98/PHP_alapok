
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
session_start();
$connection = mysqli_connect("localhost","root","","Crud_project" );
if(isset($_POST['insert_btn']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $insert_query= "INSERT INTO felhasznalo(name,email,phone) VALUES('$name','$email','$phone')";
    $insert_query_run = mysqli_query($connection, $insert_query);

    if($insert_query_run)
    {
        $_SESSION['status']= "Data inserted succesfully";
        header('location: index.php');
       
    }
    else{
        $_SESSION['status']="data not inserted succesfully";
        header('location: index.php');
        
    }
}

if(isset($_POST['update_btn'])){
    $user_id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $update_query = "UPDATE felhasznalo SET name='$name', email = '$email', phone='$phone' WHERE id='$user_id'";
    $update_query_run = mysqli_query($connection, $update_query);

    if($update_query_run){
        $_SESSION['status'] = "Data updated succesfully";
        header('location: index.php');
    }
    else{
        $_SESSION['status'] = "Data not updated succesfully";
        header('location: insert.php');
    }
}

?>

