<?
function connect_link(){

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test';
$con = new mysqli($server,$username,$password,$dbname);

if($con -> connect_error){
	die('连接失败：'.$con->connect_error);
}

return $con;
}

function sql($id,$con){
	$sql = 'SELECT * FROM info where id = '.$id.'';
	$result = $con->query($sql);
	$con->close();
	return $result;
}

?>