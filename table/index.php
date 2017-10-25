<?php
      require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
        <!---meta-->
        <meta charset="utf-8"><!--ภาษาไทย-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

        <!--font-->
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

        <!--link-->
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head> 
    <body> 
        <form action="test.php" method="post">
            <table>
                <tr class="head-time">
                    <th>
                        TIME
                    </th>
                    <th>
                        08.30-09.30
                    </th>
                    <th>
                        09.30-10.30
                    </th>
                    <th>
                        10.30-11.30
                    </th>
                    <th>
                        11.30-12.30
                    </th>
                    <th>
                        12.30-13.30
                    </th>
                    <th>
                        13.30-14.30
                    </th>
                    <th>
                        14.30-15.30
                    </th>
                    <th>
                        15.30-16.30
                    </th>
                    <th>
                        16.30-17.30
                    </th>
                    <th>
                        17.30-18.30
                    </th>
                    <th>
                        18.30-19.30
                    </th>
                    <th>
                        19.30-20.30
                    </th>
                </tr>
                
                <?php
                    $sql = "SELECT * FROM summary";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['hour'];
                        echo "<tr>";
                        echo "<td colspan='$hour'>" . $row['subject'] . "</td>";
                        echo "<td>" . $row['sec'] . "</td>";
                        echo "<td>" . $row['year'] . "</td>";
                        echo "</tr>";
                    }

                    mysqli_close($con);
                ?>
            </table>
        </form>
        
    </body>                                     

</html>