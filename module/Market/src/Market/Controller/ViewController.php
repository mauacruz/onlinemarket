<?php
	namespace Market\Controller;
	
	use Zend\Mvc\Controller\AbstractActionController;
	use Zend\View\Helper\ViewModel;
	
	class ViewController extends AbstractActionController
	{

		public function indexAction()
		{
			return new ViewModel(
					array('category'=>'CATEGORY POSTINGS',)
					);	
		}
	} 