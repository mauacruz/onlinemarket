<?php

namespace Market\Controller;
	
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Helper\ViewModel;

class PostController extends AbstractActionController
{
	public  $categories;
	
	public function setCategories($categories)
	{
		$this->categories = $categories;
	}
	
	public function indexAction()
	{
		return new ViewModel(
				array("categories" => $this->categories)
				);
	}
		
}