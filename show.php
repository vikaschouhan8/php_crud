
<?php
    include('session.php');    
    $result = mysqli_query($connection, "SELECT * FROM players")
    or die(mysqli_error($connection));
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show table</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
<div class="mydiv scroll">
    <ul>
        <li><a href="logout.php">logout</a></li>
    </ul>

<?php

    // display data in table
    echo "<a href='page.php?page=1'>custom pagination</a>";
    echo "<p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p>";
    echo '<br><p class="button"><a href="new.php">Add a new record</a></p>';    
    echo "<table border='1' cellpadding='10'>";
        echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th></th> <th></th></tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysqli_fetch_array( $result )) {

        // echo out the contents of each row into a table
        echo "<tr>";
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['firstname'] . '</td>';
            echo '<td>' . $row['lastname'] . '</td>';
            echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';
            echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
        echo "</tr>";

    }

    // close table>
    echo "</table>";


?>


</div>
</body>
</html>