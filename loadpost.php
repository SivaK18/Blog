<?php
include_once 'includes/db.php';
try{
  $query = "SELECT * FROM (SELECT  * FROM  posts WHERE  5 ORDER BY rand() LIMIT 5) q ORDER BY post_id";
  $stmt = $conn->prepare($query);
  $stmt->execute();

  if(!$stmt->rowCount() == 0){
    while($tags = $stmt->fetch(PDO::FETCH_OBJ)){
      $result = "<a href=\"post.php?p_id=$tags->post_id\" class='list-group-item'>$tags->post_title
      <img align='center' class=\"img-responsive\" src='admin/img/$tags->post_img' alt=\"$tags->post_img_alt\"></a>";
      echo $result;

    }
  }
  else {
     echo "<a href=\"#\" class='list-group-item list-group-item-danger'>No Results</a>";
   }
 }
catch(PDOException $ex){
    echo "An error has occured" . $ex->getMessage();
}?>
