<?php
    /*
    * Author : Vikas Chouhan
    */
include('session.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pagination</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
    </head>
    <body>
        <a href="logout.php">logout</a><br>
        <a href="show.php">Home</a>        
    </body>
</html>
<?php
    $page = $_GET['page'];

    /*
    * #1 get all the records from the db, table players with limit 5 rows per page
    */
    $result = mysqli_query($connection, "SELECT * FROM players limit $page, 5");
    while($row = mysqli_fetch_array( $result )){
        echo $row['id']."   ". $row['firstname']. "<br>";
    }
    /*
    * #2 Get total rows,
    *    Set per page record, say 5,
    *    loop to get number of pages, say $i.
    */
    $res = mysqli_query($connection, "SELECT * from players");
    $count = mysqli_num_rows($res);
    $count = ceil($count/5);
    for ($i=0; $i < $count ; $i++) { 
        ?><a href="page.php?page=<?php echo $i; ?>"><?php echo $i." ";?></a><?php
    }

?>