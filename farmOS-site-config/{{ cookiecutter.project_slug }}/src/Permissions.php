<?php

namespace Drupal\{{ cookiecutter.project_slug }};

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\farm_role\ManagedRolePermissionsManagerInterface;
use Drupal\user\RoleInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Permissions callback for managed role permissions.
 */
class Permissions implements ContainerInjectionInterface {

  /**
   * The managed role permissions manager.
   *
   * @var \Drupal\farm_role\ManagedRolePermissionsManagerInterface
   */
  protected $managedRolePermissionsManager;

  /**
   * Constructs a Permissions object.
   *
   * @param \Drupal\farm_role\ManagedRolePermissionsManagerInterface $managed_role_permissions_manager
   *   The managed role permissions manager.
   */
  public function __construct(ManagedRolePermissionsManagerInterface $managed_role_permissions_manager) {
    $this->managedRolePermissionsManager = $managed_role_permissions_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.managed_role_permissions'),
    );
  }

  /**
   * Add permissions to the farm_admin role.
   *
   * @param \Drupal\user\RoleInterface $role
   *   The role to add permissions to.
   *
   * @return array
   *   An array of permission strings.
   */
  public function permissions(RoleInterface $role) {

    // Only add permissions to the farm_admin role.
    if ($role->id() != 'farm_admin') {
      return [];
    }

    // Grant the ability to assign managed farmOS roles.
    return array_values(array_map(function (RoleInterface $role) {
      return 'assign ' . $role->id() . ' role';
    }, $this->managedRolePermissionsManager->getMangedRoles()));
  }

}
