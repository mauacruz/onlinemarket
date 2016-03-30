<?php
namespace Market\Model;

use Zend\Db\TableGateway\TableGateway;

class ListingsTable extends TableGateway{

	public static $tableName = "listings";
	
	public function getListingsByCategory($category){
		return $this->select(['category'=>$category]);
	}
}


?>