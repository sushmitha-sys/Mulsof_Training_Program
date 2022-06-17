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
    <form  >
    <p>Insert the new Movie Details</p>
  <label for="mov_name">Movie name:</label><br>
  <input type="text" id="mov_name" name="mov_name"><br>
  <label for="actror">Actor name:</label><br>
  <input type="text" id="actror" name="actror"><br>
  <label for="actress">Actress name:</label><br>
  <input type="text" id="actress" name="actress"><br>
  <label for="Year">Released Year:</label><br>
  <input type="text" id="Year" name="Year"><br>
  <label for="Director">Director name:</label><br>
  <input type="text" id="Director" name="Director"><br><br>
  <input type="submit" name="submit" value="Submit Information" class="btn btn-primary">
</form>
<?php

if(isset($_POST['submit']))
{
    //get all the details from the form
    $mov_name=$_POST['mov_name'];
    $actror=$_POST['actror'];
    $actress=$_POST['actress'];
    
    $year=$_POST['Year'];
    
    $director=$_POST['Director'];
    

    $sql2="INSERT INTO movies SET 
            mov_name='$mov_name',
            actror=$actror,
            actress=$actress,
            year=$Year,
            
            director='$Director',
            
            ";
        //echo $sql2;die();
    $res2=mysqli_query($conn,$sql2);
}
?>


</div>
</body>
</html>
