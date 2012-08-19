<?php
// Initialize markdown
require_once('assets/php-markdown/markdown.php');
// Get all files from posts directory
$posts = glob("./posts/*.md");
rsort($posts);
function  listPosts($posts) {
  // Grab first line for list
  foreach($posts as $post) {
    $f = fopen($post, 'r');
    $line = fgets($f);
    fclose($f);
    // Process file and output as markdown'd
    echo "<li><a href='".$post."'>".$line."</a></li>";
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>localhost</title>
    <link media="all" rel="stylesheet" href="assets/reset.css" type="text/css" />
    <link media="all" rel="stylesheet/less" href="assets/styles.less" type="text/css" />
    <script src="assets/less.js" type="text/javascript"></script>
  </head>
  <body>
    <h1>Journal</h1>
    <ul>
        <?php listPosts($posts); ?>
    </ul>
  </body>
</html>

