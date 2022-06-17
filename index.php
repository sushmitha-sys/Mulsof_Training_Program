<?php
$conn=mysqli_connect("localhost","root","","movies");
if($conn){
    echo"";

}else{
    echo "error";
}

$query="select * from movies";
$connect=mysqli_query($conn,$query);

$num=mysqli_num_rows($connect);

?>




<!DOCTYPE html>
<head>
    <title>MOVIE TABLE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <table>
        <tr>
           <th style="background-color:#8e7cc3">MOVIE NAME</th>
           <th style="background-color:#8e7cc3">Actor</th>
           <th style="background-color:#8e7cc3">Actress</th>
           <th style="background-color:#8e7cc3">Release Year</th>
           <th style="background-color:#8e7cc3">Director</th>
        </tr>
        <?php

        if($num>0)
        {
            while($data=mysqli_fetch_assoc($connect))
            {
                echo" 
                <tr>
                <td >".$data['mov_name']."</td>
                <td >".$data['actror']."</td>
                <td>".$data['actress']."</td>
                <td>".$data['year']."</td>
                <td>".$data['director']."</td>
                </tr>
                ";
            }
        }
        ?>
    </table>
</div>
</body>