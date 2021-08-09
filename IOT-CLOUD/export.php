<?php
//export.php  
include_once("api/db_connect.php");
$output = '';
if (isset($_POST["export"])) {
    $query = "SELECT * FROM weather";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                    <th>Id</th>
                    <th>Temprature</th>
                    <th>Humidity</th>
                    <th>TimeStamp</th>
                    </tr>
  ';
        while ($row = mysqli_fetch_array($result)) {
            $output .= '
    <tr>  
         <td>' . $row["id"] . '</td>  
         <td>' . $row["temp"] . '</td>  
         <td>' . $row["hum"] . '</td>
         <td>' . $row["time_stamp"] . '</td> 
                    </tr>
   ';
        }
        $output .= '</table>';
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=download.xls');
        echo $output;
    }
}
