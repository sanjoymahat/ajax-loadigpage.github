<?php

$conn = mysqli_connect("localhost","root","","test") or die("Connection Failed");

$sql = "SELECT * FROM `students`";
$result = mysqli_query($conn,$sql) or die("connection Failed");
$output = "";
if(mysqli_num_rows($result) > 0){
    $output ='<table border = "1" width="100%" cellspacing="0" cellpadding="10px" >
    <tr>
    <th>Id</th>
    <th> First Name</th>
    <th>Last Name</th>
    </tr>';
    while($row = mysqli_fetch_assoc($result)){
        $output .="<tr><td>{$row["id"]}</td><td>{$row["first_name"]}</td><td>{$row["last_name"]}</td></tr>";
    }
    $output .="</table>";
    mysqli_close($conn);
    echo $output;
}else{
    echo" <h2>reccord not found</h2>";
}

?>