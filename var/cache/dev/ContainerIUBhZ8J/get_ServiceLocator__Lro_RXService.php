<?php

namespace ContainerIUBhZ8J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__Lro_RXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..Lro.rX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..Lro.rX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\EventuserRepository', 'getEventuserRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\EventuserRepository',
        ]);
    }
}
