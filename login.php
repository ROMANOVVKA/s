<?php 
session_start(); 
$servername = "localhost";
$username = "romanohe_kollege";
$password = "Qwerty123";
$dbname = "romanohe_kollege"; 

// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname); 

// Check connection 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = $_POST['username']; 
    $password = $_POST['password']; 

    // SQL query to check user credentials 
    $query = "SELECT name, pswd, id_roles FROM authorization WHERE name = ? AND pswd = ?"; 
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $name, $password);
    $stmt->execute();
    $user_authentication_result = $stmt->get_result();

    if ($user_authentication_result->num_rows > 0) { 
        $row = mysqli_fetch_array($user_authentication_result); 
        $_SESSION['username'] = $name; 
        $_SESSION['role'] = $row['id_roles'];  

        switch ($row['id_roles']) {
            case 1:
                header('location: admin.php');
                break;
            case 2:
                header('location: stud.php');
                break;
            case 3:
                header('location: teach.php');
                break;
            default:
                header('location: index.php');
                break;
        }
    } else {
        header('location: index.php');  
    }
} 
?>