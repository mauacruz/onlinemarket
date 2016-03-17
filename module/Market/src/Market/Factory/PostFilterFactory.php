<?php
namespace Market\Factory;
use Market\Form\PostFilter;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
class PostFilterFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $sm)
	{
		$filter = new PostFilter();
		/*
		* Isto é um exemplo de como realizar a configurações do filtro,
		* O importante é registrar o campos do formulário pedidos no exercícios
		*/
		$filter->setCategories($sm->get('categories'));
		$filter->setExpireDays($sm->get('expireDays'));
		$filter->buildFilter();
		return $filter;
	}
}