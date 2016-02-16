<?php

namespace Market\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class PostControllerFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $controllerManager)
	{
		$allServices = $controllerManager->getServiceLocator(); 		
		$sm = $allServices->get('ServiceManager');
		$categories = $sm->get('categories');
		
		$postController = new \Market\Controller\PostController();
		$postController->setCategories($categories);
		
		return $postController;
	}
}