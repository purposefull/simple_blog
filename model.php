<?php
// model.php
function open_database_connection()
{
$link = new PDO("mysql:host=localhost;dbname=blog_db", 'root', '9112oleg');

return $link;
}
?>
<?php function close_database_connection(&$link)
{
$link = null;
}
{
function get_all_posts()
    {}
?>
<?php $link = open_database_connection();

$result = $link->query('id1, tittle FROM post1');

$posts = array();
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
$posts[] = $row;
}
close_database_connection($link);

return $posts;}
?>