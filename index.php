<h1>Welcome to ANT Toys</h1> 
<h2>Enter data into table</h2> 
<ul> 
 <form name="InsertData" action="InsertData.php" method="POST"> 
  <li> toyID:</li><li><input type="text" name="toyid"/></li> 
  <li>Toy Name:</li><input type="text" name="toyname"/></li> 
  <li><input type="submit"/></li> 
 </form> 
</ul> 
<?php 
if (empty(getenv("DATABASE_URL"))) 
{ 
 echo '<p>The DB does not exist</p>'; 
 $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb','postgres','123456'); 
}else{ 
 $db = parse_url(getenv("DATABASE_URL")); 
 $pdo = new PDO("pgsql:" . sprintf("ec2-54-86-170-8.compute-1.amazonaws.com;
 port=5432;
 user=fgfjvddasygorg;password=054f935ebb5384f6eaa169ef96ff3d0768cfeb5918139bd588d885556a997c02;
 dbname=d935q1p1jmdqtl", 
     $db["host"], 
     $db["port"], 
     $db["user"], 
     $db["pass"], 
     lstrim($db["path"],"/"))); 
} 
if($pdo ===false){ 
 echo "ERROR:Could not connect Database"; 
} 
$sql="INSERT INTO Toys(toyid, toyname)" 
     . " VALUES('$_POST[toyid]','$_POST[toyname]')"; 
$stmt = $pdo-> prepare($sql); 
if (is_null($_POST[toyid])){ 
 echo "toyid must be not null"; 
} else{ 
 echo "Error inserting record: "; 
} ?> 
