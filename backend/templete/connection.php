<php?

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'database';

$con = mysqli_connect($servername, $username, $password, $database);

if(!$con){
    die("sorry, No connection:" . mysqli_connect_error());
}

else{
echo "connection sucessful!";
}



?>