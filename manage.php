<?php

// Function to retrieve the current board state
function getBoardState()
{
  return file_get_contents('board_state.txt');
}

// Function to save the current board state
function saveBoardState($boardState)
{
  file_put_contents('board_state.txt', $boardState);
}

if ($_SERVER['REMOTE_ADDR'] === '97.120.83.255') :

  // Handle query parameters
  if (isset($_GET['reward_title'])) {
    file_put_contents('reward_title.txt', $_GET['reward_title']);
  }

  if (isset($_GET['addstar'])) {
    $boardState = getBoardState();
    $boardState .= '1';
    saveBoardState($boardState);
    exit;
  }

  if (isset($_GET['clearboard'])) {
    saveBoardState('');
    exit;
  }

endif;
