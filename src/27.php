<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "math_homework";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
  die("连接失败: " . $conn->connect_error);
}

// 示例代码，这里假设你有一个简单的PHP数组用于存储数据

$data = array(
  "name" => "张三",
  "age" => 18,
  "score" => 95
);

$sql = "INSERT INTO students (name, age, score) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
if ($stmt->execute($data)) {
  echo "数据插入成功";
} else {
  echo "数据插入失败: " . $conn->error;
}

$conn->close();
?>
