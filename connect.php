<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $conn = mysqli_connect('localhost', 'root', '', 'my-spa-website-db') or die('connection failed:' .mysqli_connect_error());
if(isset($_POST['email']) && isset($_POST['password'])){
    $email= $_POST['email'];
    $password= $_POST['password'];
    

    $sql = "INSERT INTO `login-page` (`email`, `password`) VALUES ('$email', '$password')"; 

    $query = mysqli_query($conn, $sql);   
    if($query) {
    echo "<h1>".'Entry Successfull'."<h1>";
}     
else {
    echo "<h1>"."Error Occured"."<h1>";
        }
    }
}
?>

<?php 

// sign up page
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $conn = mysqli_connect('localhost', 'root', '', 'my-spa-website-db') or die('connection failed:' .mysqli_connect_error());
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['gender']) && isset($_POST['password']) && isset($_POST['password2'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $gender= $_POST['gender'];
    $password= $_POST['password'];
    $password2= $_POST['password2'];


    $sql = "INSERT INTO `signup-page` (`name`, `email`, `phone`, `gender`, `password`, `password2`) VALUES ('$name', '$email', '$phone', '$gender', $password, $password2)"; 

    $query = mysqli_query($conn, $sql);   
    if($query) {
    echo "<h1>".'Entry Successfull'."<h1>";
}     
else {
    echo "<h1>"."Error Occured"."<h1>";
        }
    }
}

?>
