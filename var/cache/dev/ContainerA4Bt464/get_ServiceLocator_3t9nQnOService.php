<?php

namespace ContainerA4Bt464;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3t9nQnOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3t9nQnO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3t9nQnO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['privates', '.errored.gY4AoLu', NULL, 'Cannot determine controller argument for "App\\Controller\\EventUserController::addAuthor()": the $manager argument is type-hinted with the non-existent class or interface: "App\\Controller\\ManagerRegistry". Did you forget to add a use statement?'],
            'req' => ['privates', '.errored.PSJ_9M9', NULL, 'Cannot determine controller argument for "App\\Controller\\EventUserController::addAuthor()": the $req argument is type-hinted with the non-existent class or interface: "App\\Controller\\Request". Did you forget to add a use statement?'],
        ], [
            'manager' => '?',
            'req' => '?',
        ]);
    }
}
