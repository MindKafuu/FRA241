<?php
      require 'dbconfig/page6.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--meta-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    
    <!--shortcut-->
    <link rel="shortcut icon" href="images/icon.png" title="Favicon"/>
    
    <!--style-->
    <link rel="stylesheet" type="text/css" href="css/page6-2.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro|Work+Sans" rel="stylesheet">

    <title>Classroom Schedule</title>
  </head>
  <body>
    <header>
        <img src="images/FIBO_logo.jpg" width="55" height="62" style="margin-top: 10px; margin-left: 10px">
        <div style="font-size: 1.8em; margin-top: -50px; margin-left: 80px">
        <b>Classroom Schedule</b>
        </div><br>
        </header>
        <div style="margin-top: -30px; margin-left: 450px">
            <button class="btn1"><b>Home</b></button>
            <button class="btn1"><b>User Info</b></button>
            <button class="btn1"><b>Class Info</b></button>
            <button class="btn1"><b>Class Management</b></button>
            <button class="btn1"><b>Summary</b></button>
            <button class="btn1"><b>User Status</b></button>
            <button class="btn1"><b>Complete Schedule</b></button>
        </div>
        <div style="margin-top: -84px; margin-left: 1160px">
            <a href="index.html" class="btn"><b>logout</b></a>
        </div>
        <div style="margin-top: 50px;">
            <br><b class="topics">Complete Schedule</b><br><br>
            <a href="ALL Schedule.php" class="btn2"><b>ALL Schedule</b></a>
            <br><br>
            <a href="Years Schedule.php" class="btn2"><b>Years Schedule</b></a>
            <br><br>
            <a href="Name list.php" class="btn2"><b>Name list</b></a>
        </div>
        <div  style="margin-top: -230px; margin-left: 320px" class="show">
        <h1>Year 1 Sec A</h1>
        <table>
            <tr class="head">
                <th rowspan="2">
                    Day
                </th>
                <th colspan="10">
                    Time
                </th>

            </tr>
            <tr  class="head-time">
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
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Monday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "1" ) {
                            if($row['subject_sec'] == "A") {
                                if($row['Day'] == "0"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Tuesday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "1" ) {
                            if($row['subject_sec'] == "A") {
                                if($row['Day'] == "1"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Wednesday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "1" ) {
                            if($row['subject_sec'] == "A") {
                                if($row['Day'] == "2"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Thurday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "1" ) {
                            if($row['subject_sec'] == "A") {
                                if($row['Day'] == "3"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Friday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "1" ) {
                            if($row['subject_sec'] == "A") {
                                if($row['Day'] == "4"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                            
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Saturday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "1" ) {
                            if($row['subject_sec'] == "A") {
                                if($row['Day'] == "5") {
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                            
                        }
                    }
                ?>
            </tr>
            </table>
            <h1>Year 1 Sec B</h1>
            <table>
            <tr class="head">
                <th rowspan="2">
                    Day
                </th>
                <th colspan="10">
                    Time
                </th>

            </tr>
            <tr  class="head-time">
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
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Monday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "1" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "0"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Tuesday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "1" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "1"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Wednesday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "1" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "2"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Thurday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "1" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "3"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Friday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "1" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "4"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                            
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Saturday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "1" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "5") {
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                            
                        }
                    }
                ?>
            </tr>
            </table>
            <h1>Year 2 Sec A</h1>
            <table>
            <tr class="head">
                <th rowspan="2">
                    Day
                </th>
                <th colspan="10">
                    Time
                </th>

            </tr>
            <tr  class="head-time">
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
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Monday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "2" ) {
                            if($row['subject_sec'] == "A") {
                                if($row['Day'] == "0"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Tuesday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "2" ) {
                            if($row['subject_sec'] == "A") {
                                if($row['Day'] == "1"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Wednesday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "2" ) {
                            if($row['subject_sec'] == "A") {
                                if($row['Day'] == "2"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Thurday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "2" ) {
                            if($row['subject_sec'] == "A") {
                                if($row['Day'] == "3"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Friday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "2" ) {
                            if($row['subject_sec'] == "A") {
                                if($row['Day'] == "4"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                            
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Saturday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "2" ) {
                            if($row['subject_sec'] == "A") {
                                if($row['Day'] == "5") {
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                            
                        }
                    }
                ?>
            </tr>
            </table>
            <h1>Year 2 Sec B</h1>
            <table>
            <tr class="head">
                <th rowspan="2">
                    Day
                </th>
                <th colspan="10">
                    Time
                </th>

            </tr>
            <tr  class="head-time">
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
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Monday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "2" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "0"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Tuesday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "2" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "1"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Wednesday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "2" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "2"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Thurday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "2" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "3"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Friday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "2" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "4"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                            
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Saturday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "2" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "5") {
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                            
                        }
                    }
                ?>
            </tr>
            </table>
            <h1>Year 3 Sec A</h1>
        <table>
            <tr class="head">
                <th rowspan="2">
                    Day
                </th>
                <th colspan="10">
                    Time
                </th>

            </tr>
            <tr  class="head-time">
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
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Monday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "3" ) {
                            if($row['subject_sec'] == "A") {
                                if($row['Day'] == "0"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Tuesday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "3" ) {
                            if($row['subject_sec'] == "A") {
                                if($row['Day'] == "1"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Wednesday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "3" ) {
                            if($row['subject_sec'] == "A") {
                                if($row['Day'] == "2"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Thurday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "3" ) {
                            if($row['subject_sec'] == "A") {
                                if($row['Day'] == "3"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Friday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "3" ) {
                            if($row['subject_sec'] == "A") {
                                if($row['Day'] == "4"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                            
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Saturday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "3" ) {
                            if($row['subject_sec'] == "A") {
                                if($row['Day'] == "5") {
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                            
                        }
                    }
                ?>
            </tr>
            </table>
            <h1>Year 3 Sec B</h1>
        <table>
            <tr class="head">
                <th rowspan="2">
                    Day
                </th>
                <th colspan="10">
                    Time
                </th>

            </tr>
            <tr  class="head-time">
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
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Monday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "3" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "0"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Tuesday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "3" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "1"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Wednesday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "3" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "2"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Thurday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "3" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "3"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Friday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "3" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "4"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                            
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Saturday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "3" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "5") {
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                            
                        }
                    }
                ?>
            </tr>
            </table>
            <h1>Year 4 Sec A</h1>
        <table>
            <tr class="head">
                <th rowspan="2">
                    Day
                </th>
                <th colspan="10">
                    Time
                </th>

            </tr>
            <tr  class="head-time">
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
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Monday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "4" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "0"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Tuesday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "4" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "1"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Wednesday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "4" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "2"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Thurday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "4" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "3"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Friday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "4" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "4"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                            
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow">
                    Saturday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "4" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "5") {
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;' colspan='10'></td>";
                                    }
                                }
                            } 
                            
                        }
                    }
                ?>
            </tr>
            </table>
            <h1>Year 4 Sec B</h1>
        <table>
            <tr class="head">
                <th rowspan="2">
                    Day
                </th>
                <th colspan="10">
                    Time
                </th>

            </tr>
            <tr  class="head-time">
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
            </tr>
            <tr>
                <td style="background-color: yellow;">
                    Monday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "4" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "0"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A;text-align: center;' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A;text-align: center;' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow;">
                    Tuesday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "4" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "1"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A;text-align: center;' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A;text-align: center;' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow;">
                    Wednesday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "4" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "2"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A;text-align: center;' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A;text-align: center;' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='10'></td>";
                                    }
                                }
                            }
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow;">
                    Thurday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "4" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "3"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A;text-align: center;' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A;text-align: center;' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='10'></td>";
                                    }
                                }
                            } 
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow;">
                    Friday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "4" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "4"){
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A;text-align: center;' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A;text-align: center;' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='10'></td>";
                                    }
                                }
                            } 
                            
                        }
                    }
                ?>
            </tr>
            <tr>
                <td style="background-color: yellow;">
                    Saturday
                </td>
                <?php
                    $sql = "SELECT * FROM table_subject_description";
                    $smyData = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($smyData)) {
                        $hour = (int)$row['subject_hour_per_week'];
                        $time = (int)$row['start_time'];
                        if($row['subject_level'] == "4" ) {
                            if($row['subject_sec'] == "B") {
                                if($row['Day'] == "5") {
                                    if($time > 0 && $time < 99) {
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='$time'></td>";
                                        echo "<td style='background-color: #00FA9A;text-align: center;' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 0) {
                                        echo "<td style='background-color: #00FA9A;text-align: center;' colspan='$hour'>" . $row['subject_name'] . "</td>";
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='10-$time'></td>";
                                    }
                                    else if($time == 99) {
                                        echo "<td style='background-color: wheat;text-align: center;' colspan='10'></td>";
                                    }
                                }
                            } 
                            
                        }
                    }
                ?>
            </tr>
            </table>
        </div>

  </body>
</html>