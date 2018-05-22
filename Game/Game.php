<?php

namespace Game;

use Deck\Deck;
use Player\Player;

class Game
{
	const NUMBER_OF_CARDS = 6;
	
	protected $deck;
	protected $players = [];
	
	public function setDeck(Deck $deck)
	{
		$this->deck = $deck;
	}
	
	public function getDeck()
	{
		return $this->deck;
	}
	
	public function setPlayer(Player $player)
	{
		$this->players[] = $player;
	}
	
	public function getPlayers()
	{
		return $this->players;
	}
	
	function dealCards()
	{
		$players = $this->getPlayers();
		
		for ($i = 0; $i < self::NUMBER_OF_CARDS; $i++) {
			foreach($players as $player) {
				$this->getDeck()->draw($player);
			}
		}
		
		foreach ($players as $player) {
			echo $player->getName() . PHP_EOL;
			echo $player->getCardsInfo() . PHP_EOL;
		}
	}
}