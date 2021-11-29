# Tic Tac Toe

## Skills & concepts

* Use array
* Model a problem using a basic class
* Use class constants
* Use a TDD approach

## Goals

Complete the src/TicTacToeBoard.php file with a TicTacToeBoard class.

This class will represent a Board of tic tac toe and will have at least two methods.

* A move() method with three parameters :

  * The player who's playing this move. This will be :

    * a PLAYER_1 constant (value 1) for the first player
    * a PLAYER_2 constant (value 2) for the second player

  * The two coordinates of the square the player wants to play in

This move method should return true if the move is valid or false if not (for example when trying to play on a non empty square or as a non existing player)

* A state() method which returns :

  * a PLAYER_1_WIN constant (value 1) if the first player won
  * a PLAYER_2_WIN constant (value 2) if the second player won
  * a IN_PROGRESS constant (value 0) if the game is still not decided
  * a DRAW_GAME constant (value -1) if the board is full with no winner.
