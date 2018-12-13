<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
         $db_connection = pg_connect ("  host=ec2-46-51-184-66.eu-west-1.compute.amazonaws.com 
                                        dbname=dbns3a2p2i30bj 
                                        user=zthovxzrbvlazp 
                                        password=2877bd9ce71d8d9b8c0cb27ed2a41c31863f6468a28183867e9c682bed0fc73b"  );




var_dump($db_connection);


 
$query="INSERT INTO Persons (PersonID,LastName,FirstName,Address,City) VALUES (1, 'keyur','khole','narayanpeth','pune');";




pg_query($db_connection, $query);

echo "Hi AVinash";


?>
