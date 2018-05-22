<?php

namespace Player;

use Deck\Card;

class Player
{
	protected $name;
	protected $cards = [];
	
	public function __construct($name)
	{
		$this->name = $name;
	}
	
	public function addCard(Card $card)
	{
		$this->cards[] = $card;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getCardsInfo()
	{
		foreach ($this->cards as $card) {
			echo $card;
		}
	}
}