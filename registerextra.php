<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>

<?php
//this script will handle login
session_start();
//check if user is already login
if(isset($_SESSION['username']))
{
    header("location:welcome.php");
    exit;
}
require_once "config.php";
$username = $password ="";
$err ="";
//if request method is post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username']))  || empty(trim($_POST['password'])))
    {
        $err =" username or password is empty please ENTER again"; 
    }
    else{
        $username=trim($_POST['username']);
        $password=trim($_POST['password']);
    }
    if(empty($err))
    {
        $sql ="SELECT id,username, password FROM  users WHERE username= ?";
        $stmt =mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt,"s" ,$param_username);
        $param_username=$username;
        //try to execute the statement
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) == 1)
            {
                mysqli_stmt_bind_result($stmt,$id,$username,$hashed_password);
                if(mysqli_stmt_fetch($stmt))
                {
                    if(password_verify($password,$hashed_password))
                    {
                        //this meanns password is correct.
                        session_start();
                        $_SESSION["username"]=$username;
                        $_SESSION["id"]= $id;
                        $_SESSION["loggedin"]= true;
                     //redirect user to welcome page.
                     header("location:welcome.php"); 
                    }

                }
            }
        }
    }
}
?>