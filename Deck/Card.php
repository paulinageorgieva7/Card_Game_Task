<?php

namespace Deck;

class Card
{
	protected $suit;
	protected $rank;
		
	public function __construct($suit, $rank)
	{
		$this->suit = $suit;
		$this->rank = $rank;
	}
	
	public function __toString() 
	{
		return $this->rank . ' of ' . $this->suit . ' (' . $this->faceCard() . ')' . PHP_EOL;
	}
	
	public function faceCard() 
	{
		if($this->rank >= 2 && $this->rank <= 10) {
			return 'Numerical card';
		} else {
			return 'Face card';
		}
	}
}