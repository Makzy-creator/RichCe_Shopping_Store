<?php
    // session_start();

    // Check if the user is already logged in
    // if (isset($_SESSION['user_id'])) {
    //     header("Location: index.php");
    //     exit();
    // }

    //  require_once './includes/connection.php';
    //  require_once './includes/functions.php';

    //check if the form is submitted

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve username and password from the form.
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);

        //connect to database
        $servername = "Localhost";
        $db_username = "root";
        $db_password = " ";
        $tablename = "users";
        $dbname = "richce_cart_system";

        $conn = new mysqli($servername, $db_username, $db_password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        //prepare and execute a query to retrieve the hashed password for the provided username
        $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
        $stmt-> bind_param("s", $username);
        $stmt->execute();
        $stmt-> bind_result($hashed_password);
        $stmt->fetch();
        $stmt->close();

        //verify the password using password_verify option

        if ($hashed_password && password_verify($password, $hashed_password)) {
            //Authentication successful, redirect to a success page
            header("Location: success.php");
            exit();
        }else {
            //Authentication failed, display an error message
            $error_message = "Invalid username or password";
        }
        //close the database connection
        $conn->close();

    }     
?>