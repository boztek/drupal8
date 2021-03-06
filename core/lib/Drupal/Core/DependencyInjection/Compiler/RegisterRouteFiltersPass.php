<?php

/**
 * @file
 * Contains Drupal\Core\DependencyInjection\Compiler\RegisterNestedMatchersPass.
 */

namespace Drupal\Core\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

/**
 * Adds services tagged 'nested_matcher' to the tagged_matcher service.
 */
class RegisterRouteFiltersPass implements CompilerPassInterface {

  /**
   * Adds services tagged 'nested_matcher' to the tagged_matcher service.
   *
   * @param \Symfony\Component\DependencyInjection\ContainerBuilder $container
   *   The container to process.
   */
  public function process(ContainerBuilder $container) {
    if (!$container->hasDefinition('router.matcher')) {
      return;
    }
    $nested = $container->getDefinition('router.matcher');
    foreach ($container->findTaggedServiceIds('route_filter') as $id => $attributes) {
      $nested->addMethodCall('addRouteFilter', array(new Reference($id)));
    }
  }
}
