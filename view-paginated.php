<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
    <title>View Records</title>
    <link rel="stylesheet" href="style.css">    
    </head>
    <body>
        <div class="mydiv">
            <a href="logout.php">logout</a>
            <?php
            /*
            VIEW-PAGINATED.PHP
            Displays all data from 'players' table
            This is a modified version of show.php that includes pagination
            */
            // connect to the database
            include('session.php');         
            // number of results to show per page
            $per_page = 10;
            // figure out the total pages in the database
            $result = mysqli_query($connection, "SELECT * FROM players");
            $total_results = mysqli_num_rows($result);
            $total_pages = ceil($total_results / $per_page);
            // check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
            if (isset($_GET['page']) && is_numeric($_GET['page'])){
                $show_page = $_GET['page'];
                // make sure the $show_page value is valid
                if ($show_page > 0 && $show_page <= $total_pages){
                    $start = ($show_page -1) * $per_page;
                    $end = $start + $per_page;
                }
                else{
                    // error - show first set of results
                    $start = 0;
                    $end = $per_page;
                }
            }
            else{
                // if page isn't set, show first set of results
                $start = 0;
                $end = $per_page;
            }
            // display pagination
            echo "<p><a href='show.php'>View All</a> | <b>View Page:</b> ";
            for ($i = 1; $i <= $total_pages; $i++)
            {
            echo "<a href='view-paginated.php?page=$i'>$i</a> ";
            }
            echo "</p>";
            function mysqli_result($res,$row=0,$col=0){ 
                $numrows = mysqli_num_rows($res); 
                if ($numrows && $row <= ($numrows-1) && $row >=0){
                    mysqli_data_seek($res,$row);
                    $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
                    if (isset($resrow[$col])){
                        return $resrow[$col];
                    }
                }
                return false;
            }
            // display data in table
            echo "<table border='1' cellpadding='10'>";
            echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th></th> <th></th></tr>";
            // loop through results of database query, displaying them in the table
            for ($i = $start; $i < $end; $i++){
                // make sure that PHP doesn't try to show results that don't exist
                if ($i == $total_results) { break; }
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . mysqli_result($result, $i, 'id') . '</td>';
                echo '<td>' . mysqli_result($result, $i, 'firstname') . '</td>';
                echo '<td>' . mysqli_result($result, $i, 'lastname') . '</td>';
                echo '<td><a href="edit.php?id=' . mysqli_result($result, $i, 'id') . '">Edit</a></td>';
                echo '<td><a href="delete.php?id=' . mysqli_result($result, $i, 'id') . '">Delete</a></td>';
                echo "</tr>";
            }
            // close table>
            echo "</table>";
            // pagination
            ?>
            <p><a href="new.php">Add a new record</a></p>
            <p><a href="page.php">go to page.php</a></p>
            
        </div>
    </body>
</html>