<?php

use Player\Player;
use Deck\Deck;
use Game\Game;

require_once 'autoload.php';

$deck = new Deck();

$player1 = new Player('Player 1');
$player2 = new Player('Player 2');

$game = new Game();
$game->setDeck($deck);
$game->setPlayer($player1);
$game->setPlayer($player2);

$game->dealCards();

echo $deck->count() . ' cards in the deck';
