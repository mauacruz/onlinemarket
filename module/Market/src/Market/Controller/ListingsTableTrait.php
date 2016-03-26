<?php
namespace Market\Controller;

trait ListingsTableTrait{
	
	private $listingsTable;
	
	public function setListingsTrable($listingsTrable) {
		
		$this->listingsTable = $listingsTrable;
	}
}