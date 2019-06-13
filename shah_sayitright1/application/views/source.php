<?php 
include "dbconnect.php";
$id = $_GET['id'];
$query = "SELECT 'p_image' from 'products' WHERE id=$id"; 
$stmt = $conn->prepare( $query );

// bind the id of the image you want to select

$stmt->execute();

$num = $stmt->rowCount();
 
if( $num ){
    // if found
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // specify header with content type,
    // you can do header("Content-type: image/jpg"); for jpg,
    // header("Content-type: image/gif"); for gif, etc.
    header("Content-type: image/jpg");
    
    //display the image data
    echo $row['data'];
    exit;
}else{
    //if no image found with the given id,
    //load/query your default image here
}

?>