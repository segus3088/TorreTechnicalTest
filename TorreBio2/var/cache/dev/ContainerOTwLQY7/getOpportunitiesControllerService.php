<?php

namespace ContainerOTwLQY7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOpportunitiesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\OpportunitiesController' shared autowired service.
     *
     * @return \App\Controller\OpportunitiesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/OpportunitiesController.php';

        $container->services['App\\Controller\\OpportunitiesController'] = $instance = new \App\Controller\OpportunitiesController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\OpportunitiesController', $container));

        return $instance;
    }
}
