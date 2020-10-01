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
    if ($userPosts > $userRailings) {
        $lengthofFence = (($userRailings+1) * $postLength) + ($userRailings * $railLength);
    } else if ($userRailings > $userPosts) {
        $lengthofFence = ($userPosts * $postLength) + (($userPosts-1) * $railLength);
    } else if ($userRailings === $userPosts) {
        $lengthofFence = ($userPosts * $postLength) + (($userPosts-1) * $railLength);
    }
    return $lengthofFence;
}