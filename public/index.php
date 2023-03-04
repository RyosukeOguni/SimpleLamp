<html>
<head><title>PHP TEST</title></head>
<link rel="icon" href="data:,">
<body>

<?php

$dsn = 'mysql:dbname=dbname;host=db';
$user = 'dbuser';
$password = 'dbpassword';

try{
    $dbh = new PDO($dsn, $user, $password);

    print('接続に成功しました。<br>');

    $sql = 'select * from users';
    foreach ($dbh->query($sql) as $row) {
        print($row['name'].', '.$row['age'].', '.$row['gender'].'<br>');
    }
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}

$dbh = null;

?>

</body>
</html>
