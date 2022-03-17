<!DOCTYPE html>
<html>
<style>
table {
  font-family: arial, sans-serif; 
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align:lerf ; 
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
<table>
<?php
include 'mysql.php';


/*$sql = "SELECT * FROM basketball";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {?>
    <tr>
        <td>
        <?php    
        echo " " . $row["baskid"]. "  ";
        ?>
        </td>
        <td>
        <?php    
        echo " " . $row["con"]. " ";
        ?>
        </td>
        <td>
        <?php    
        echo " " . $row["team_a"]. " ";
        ?>
        </td>
        <td>
        <?php    
        echo " " . $row["team_b"]. " ";
        ?>
        </td>
        <td>
        <?php    
        echo " " . $row["lose"]. " ";
        ?>
        </td>
        <td>
        <?php    
        echo " " . $row["win"]. " ";
        ?>
        </td>
        </tr>
        <?php
    }
}else{?>
    <tr>
    <th><?php
    echo "no data";
    ?>
    </th>
    </tr><?php
}*/
?>
</table>
</body>
</html>
