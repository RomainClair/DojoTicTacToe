<?php
/*
 * The main/test script
 */

 require_once __DIR__ . '/src/TicTacToeBoard.php';

 $game = new TicTacToeBoard();

 switch ($game->state()) {
     case TicTacToeBoard::PLAYER_1 :
        echo "Player 1 won !" . PHP_EOL;
     break;
    case TicTacToeBoard::PLAYER_2 :
        echo "Player 2 won !" . PHP_EOL;
    break;
    case TicTacToeBoard::IN_PROGRESS :
        echo "Game in progress" . PHP_EOL;
    break;
    case TicTacToeBoard::DRAW_GAME :
        echo "The game is a draw" . PHP_EOL;
    break;
    default : 
        echo "This should not happen !" . PHP_EOL;
 }
 