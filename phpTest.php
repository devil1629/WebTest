
<?php
session_start();

$database;  // variable consisting info about database.

if(!$database)          // Check if the connection to database is sucessfull.
{
    echo "Error";
}

//Sql statement to join tables and sort the names by date.

$sql = "SELECT tableOne.p_name, tableTwo.m_name    
FROM tableOne
INNER JOIN tableTwo
ON tableOne.p_id=tableTwo.p_id
ORDER BY tableOne.p_date";

$result= mysqli_query($database,$sql);     //run the query on the database


if(mysqli_num_rows($result)>0)
{

while($row = $result->fetch_assoc()){          
// Print names
echo $row["p_name"] . $row["m_name"];    
}
}

else{
 echo "Nothing found";
}



?>