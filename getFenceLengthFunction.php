<?php

//If User inputs no of rails and posts
/** Function takes in how many posts and rails the user wants to user and returns how long a fence they can build.
 *
 * @param $userRailings
 * @param $userPosts
 *
 * @return float|int
 */
function getFenceLength($userRailings, $userPosts) {
    $railLength = 1.5;
    $postLength = 0.1;
    if ($userRailings <= 1) {
        echo "<br>";
        echo "You need at least 1 railing to make a fence!";
    } else if ($userPosts <= 2) {
        echo "<br>";
        echo "You need at least 2 posts to make a fence!";
    } else if ($userPosts > $userRailings) {
        $lengthofFence = (($userRailings + 1) * $postLength) + ($userRailings * $railLength);
        return $lengthofFence;
    } else if ($userRailings > $userPosts) {
        $lengthofFence = ($userPosts * $postLength) + (($userPosts - 1) * $railLength);
        return $lengthofFence;
    } else if ($userRailings === $userPosts) {
        $lengthofFence = ($userPosts * $postLength) + (($userPosts - 1) * $railLength);
        return $lengthofFence;
    }
}