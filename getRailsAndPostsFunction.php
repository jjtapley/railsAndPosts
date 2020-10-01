<?php

//If user inputs length of fence:
/**Function takes in how long a user wants their fence and tells them how many rails and posts are required.
 *
 * @param $userLengthOfFence
 */
function getRailsAndPosts($userLengthOfFence) {
    $railLength = 1.5;
    $postLength = 0.1;
    $result = round(($userLengthOfFence - $postLength)/($railLength + $postLength), 2);
    $totalPosts = ceil($result) + 1;
    $totalRails = ceil($result);
    while ($result < $userLengthOfFence) {
        $result += ($railLength + $postLength);
    }
    $overShot = round(($result - $userLengthOfFence), 2);
    if ($userLengthOfFence<=1) {
        echo "<br>";
        echo "Please enter a value above 1.";
    } else {
        echo "<br>If you had a fence that is $userLengthOfFence meters long, you would need $totalPosts posts, and $totalRails railings.";
        echo "<br>" . "With $totalPosts posts and $totalRails rails, you could build a fence $result meters long. This is over requirements by: $overShot meters.";
    }
}
