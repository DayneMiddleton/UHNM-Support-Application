<html>
<head>
<Title>Breath Input</Title>   
    
</head>
<body>
<?php
    
$bth=$_GET("bth");

mysql_connect("localhost","root","");
mysql_select_db("breath");
mysql_query("insert into breath values('$bth')");
?>
    
    
</body>
</html>