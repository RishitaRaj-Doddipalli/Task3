[12:49 PM, 11/23/2024] Yamunasree MCA-A: //styles.css
body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;

}

.container {
    background: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

.form {
    background: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.form h2 {
    margin-bottom: 20px;
    text-align: center;
    color: #333;
}

.form input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.form button {
    width: 100%;
    padding: 10px;
    background-color…
[12:49 PM, 11/23/2024] Yamunasree MCA-A: //db.php
<?php
$servername = "localhost";
$username = "root";
$password = "Sharoon"; 
$dbname = "task_3";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>