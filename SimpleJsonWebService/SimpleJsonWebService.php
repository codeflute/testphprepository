<?php

$format = 'json';

$link = mysql_connect('localhost', 'root', '') or die('Cannot connect to the DB');
mysql_select_db('webservicedb', $link) or die('Connot select the DB');

$query = "SELECT * from testposts";
$result = mysql_query($query, $link) or die('Error in query');

$posts = array();
if (mysql_num_rows($result)) {
  while ($post = mysql_fetch_assoc($result)) {
    $posts[] = array('post'=>$post);
  }
}

header('Content-type: application/json');
echo json_encode(array('post_list' => $posts));

@mysql_close($link);
?>
