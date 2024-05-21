<?php 

$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'profilediri';

function getPostTitleById($conn, $id) {
    $sql = "SELECT judul FROM article WHERE id=" . $id;
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row["judul"];
    } else {
      return "0 results";
    }
  }

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $title1 = getPostTitleById($conn, 1);
  $title2 = getPostTitleById($conn, 2);
  $title3 = getPostTitleById($conn, 3);

  function getPostDescById($conn, $id) {
    $sql = "SELECT content FROM article WHERE id=" . $id;
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row["content"];
    } else {
      return "0 results";
    }
  }

  $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $desc1 = getPostDescById($conn, 1);
  $desc2 = getPostDescById($conn, 2);
  $desc3 = getPostDescById($conn, 3);

  function getPostURLById($conn, $id) {
    $sql = "SELECT link FROM article WHERE id=" . $id;
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row["link"];
    } else {
      return "0 results";
    }
  }
  
  $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Call functions with different IDs
  $url1 = getPostURLById($conn, 1);
  $url2 = getPostURLById($conn, 2);
  $url3 = getPostURLById($conn, 3);

$conn->close();
?>