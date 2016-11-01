<?
require ('sql.php');
$link = connect_link();

$id = $_GET['id'];
$type = $_GET['type'];

$result = sql($id,$link);
if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {
        $response['id'] = $row["id"];
        $response['type'] = $row["type"];
        $response['job'] = $row['job'];
        $response['email'] = $row["email"];
    }
} else {
    echo "0 个结果";
}

echo json_encode($response);

?>