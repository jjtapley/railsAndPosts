<!DOCTYPE html>
    <head>
    <title>Posts and rails</title>
    </head>
<body>
    <h1>Posts and Rails Challenge</h1><br>
    <p>Please use this handy guide to help you build your Fence!</p>
    <h4>If you know how many Posts and Rails you have, enter them below to calculate the length of Fence you are able to build:</h4>
    <form method="post">
        <label for "rails">How many Rails do you have?</label><br>
        <input type="text" name="rails"><br>
        <label for "posts">How many Posts do you have?</label><br>
        <input type="text" name="posts"><br>
        <input type="submit" value="Submit">
    </form>
    <h4>If you know how long your fence will be, enter the length in meters to calculate the number of Posts and Rails that will be required:</h4>
    <form method="post">
        <label for "fence">How long would you like your fence to be?</label><br>
        <input type="text" name="fence"><br>
        <input type="submit" value="Submit">
    </form>
</body>



<?php

require '../railsAndPosts/getFenceLengthFunction.php';
require '../railsAndPosts/userLengthOfFenceFunction.php';

$lengthofFence = getFenceLength($_POST['rails'],$_POST['posts']);

echo '<br>' . "If you had " . $_POST['rails'] . " rails and " . $_POST['posts'] . " posts, you could make a fence $lengthofFence meters long." . '<br>';

$noOfPostsandRails = getRailsAndPosts($_POST['fence']);

echo $noOfPostsandRails;

?>

</html>


