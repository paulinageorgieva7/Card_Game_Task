<?php

namespace Deck;

use Player\Player;

class Deck
{
	protected $cards = [];
	
	protected static $suits = array(
			"Hearts",
			"Diamonds",
			"Spades",
			"Clubs"
	);
	
	protected static $rank = array(
			'Ace'=> 1, 
   			 2 => 2, 
   			 3 => 3, 
			 4 => 4, 
			 5 => 5, 
			 6 => 6, 
			 7 => 7, 
			 8 => 8, 
			 9 => 9, 
			 10 => 10, 
			 'Jack' => 11, 
			 'Queen'=>12, 
			 'King'=>13
			);	

	
	public function __construct()
	{
		$this->generateDeck();
		$this->shuffle();
	}
	
	public function addCard(Card $card)
	{
		$this->cards[] = $card;
	}
	
	public function generateDeck()
	{
		foreach (self::$suits as $suit) {
			foreach (self::$rank as $key => $rank) {
				$this->addCard(new Card($suit, $key));
			}
		}
		
		return $this->cards;
	}
	
	public function count()
	{
		$count = count($this->cards);	
		return $count;
	}
	
	public function shuffle()
	{
		shuffle($this->cards);		
	}
	
	public function draw(Player $player)
	{
		$card = array_pop($this->cards);
  		$player->addCard($card);

	}
	
	public function getInfo()
	{
		foreach ($this->cards as $card) {
			echo $card;
		}
	}
	
}