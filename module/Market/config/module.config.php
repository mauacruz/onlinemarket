<?php
return array(
    'controllers' => array(
        'invokables' => array(
        ),
    	'factories' => array(
    		'market-post-controller' => 'Market\Factory\PostControllerFactory',
            'market-index-controller' => 'Market\Factory\IndexControllerFactory',
        	'market-view-controller'  => 'Market\Factory\ViewControllerFactory',
    			
    	),
    	'aliases' => array(
    		'alt'=>	'market-view-controller',
    	),	
    ),
    'router' => array(
        'routes' => array(
        	'home' => array (
        		'type' => 'Literal',
        		'options' => array (
        			'route' => '/',
        			'defaults' => array(
        				'controller' => 'market-index-controller',
        				'action' => 'index'
        			)
        		)
        	),
       		'market' => array(
   				'type' => 'Literal',
   				'options' => array(
					'route' => '/market',
					'defaults' => array(
						'controller' => 'market-index-controller',
						'action' => 'index'
    				)
	      		),

    	    	'may_terminate' => true,
 				
			    'child_routes' => array(
		    		
					'view' => array(
						'type' => 'Literal',
						'options' => array(
							'route' => '/view',
							'defaults' => array(
								'controller' => 'market-view-controller',
								'action' => 'index'
							)
						),	
								
				    	'may_terminate' => true,
		    			
				    	'child_routes' => array(
					    	'main' => array(
					    		'type' => 'Segment',
			    				'options' => array(
		    						'route' => '/main[/:category]',
		    						'defaults' => array(
		    							'action' => 'index'
			    					)
			    				)
			    			),		
		    	 		    		
			    			'item' => array(
			    				'type' => 'Segment',
			    				'options' => array(
			    					'route' => '/item[/:itemId]',
				   					'defaults' => array(
				   						'action' => 'item'		
				   					),
				   					'constraints' => array(
			    						'itemId' => '[0-9]*'
			    					)
			    				)
			    			),
			    			'slash' => array(
		    					'type' => 'Literal',
		    					'options' => array(
	    							'route' => '/',
	    							'defaults' => array(
	    									'controller' => 'market-view-controller',
	    									'action' => 'index'
	    							)
		    					),
			    			)
            			)
					),
		    		'post' => array(
		    			'type' => 'Literal',
		    			'options' => array(
			    			'route' => '/post',
			    			'defaults' => array(
			    				'controller' => 'market-post-controller',
		    					'action ' => 'index'
		    				)
		    			
						),
				    	'may_terminate' => true,
				    		
			    		'child_routes' => array(
			   				'slash' => array(
								'type' => 'Literal',
								'options' => array(
									'route' => '/',
				    				'defaults' => array(
				    					'controller' => 'market-post-controller',
				    					'action' => 'index'	
				    				)
				    			),
			    			)	
				    	)
		    		),
		    		'slash' => array(
	    				'type' => 'Literal',
	    				'options' => array(
    						'route' => '/',
    						'defaults' => array(
    								'controller' => 'market-index-controller',
    								'action' => 'index'
    						)
	    				),
		    		)
			    )
            )
        )
    ),
	'service_manager' => array(
		'factories' => array(
			'market-post-form' 		=> 'Market\Factory\PostFormFactory',
			'market-post-filter' 	=> 'Market\Factory\PostFilterFactory',
			'general-adapter' 		=> 'Zend\Db\Adapter\AdapterServiceFactory',
			'listings-table'        => 'Market\Factory\ListingsTableFactory',	
				
		),
		'services' => array(
			'expireDays' => array('15/03/2016', '30/03/2016', '15/04/2016',
			) ,
			'captchaOptions' => array('e3r4', 'zx34', '7n0m',
			) ,
				
				
		),
				
	),
			
    'view_manager' => array(
        'template_path_stack' => array(
            'Market' => __DIR__ . '/../view',
        ),
    ),
);
