<!DOCTYPE html>

<?php
require '.' . DIRECTORY_SEPARATOR . 'PostsAndRailings.php';
require '.' . DIRECTORY_SEPARATOR . 'getFenceLengthFunction.php';
require '.' . DIRECTORY_SEPARATOR . 'getRailsAndPostsFunction.php';
?>

<html>
    <head>
        <meta charset ="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Posts and rails</title>
    </head>

    <body>
        <div>
            <?php
            if (empty($_POST['fence']) && !empty($_POST['rails']) && !empty($_POST['posts'])) {
                $posts = $_POST['posts'];
                $rails = $_POST['rails'];
                $lengthofFence = getFenceLength($rails, $posts);
                echo '<h1>Fence Length</h1>';
                echo "If you had $rails rails and $posts posts, you could make a fence $lengthofFence meters long.";
            } else if (!empty($_POST['fence']) && empty($_POST['rails']) && empty($_POST['posts'])) {
                $fence = $_POST['fence'];
                echo '<h1>Rails and Posts Required</h1>';
                getRailsAndPosts($fence);
            } else {
                echo "*Please enter either the amount of rails and posts you have, or the length of fence required*";
            }
            ?>
        </div>
    </body>

</html>
<?php
//
//
//if (!empty($_POST['fence']) && !empty($_POST['rails']) && !empty($_POST['posts'])) {
//
//}














