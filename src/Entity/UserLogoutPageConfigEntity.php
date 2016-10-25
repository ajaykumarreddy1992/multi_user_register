<?php

namespace Drupal\multi_user_register\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\multi_user_register\UserLogoutPageConfigEntityInterface;

/**
 * Defines the User Logout entity.
 *
 * @ConfigEntityType(
 *   id = "multi_user_reg_config_entity",
 *   label = @Translation("User Logout "),
 *   handlers = {
 *     "list_builder" = "Drupal\multi_user_register\UserLogoutPageConfigEntityListBuilder",
 *     "form" = {
 *       "add" = "Drupal\multi_user_register\Form\UserLogoutPageConfigEntityForm",
 *       "edit" = "Drupal\multi_user_register\Form\UserLogoutPageConfigEntityForm",
 *       "delete" = "Drupal\multi_user_register\Form\UserLogoutPageConfigEntityDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\multi_user_register\UserLogoutPageConfigEntityHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "multi_user_reg_config_entity",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid",
 *     "username" = "username",
 *     "password" = "password",
 *     "url" = "url"
 *   },
 *   links = {
 *     "canonical" = "/admin/people/multi_user_reg_config_entity/{multi_user_reg_config_entity}",
 *     "add-form" = "/admin/people/multi_user_reg_config_entity/add",
 *     "edit-form" = "/admin/people/multi_user_reg_config_entity/{multi_user_reg_config_entity}/edit",
 *     "delete-form" = "/admin/people/multi_user_reg_config_entity/{multi_user_reg_config_entity}/delete",
 *     "collection" = "/admin/people/multi_user_reg_config_entity"
 *   }
 * )
 */
class UserLogoutPageConfigEntity extends ConfigEntityBase implements UserLogoutPageConfigEntityInterface {

  /**
   * The User Logout  ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The User Logout  label.
   *
   * @var string
   */
  protected $label;

  /**
   * The User Logout  url.
   *
   * @var string
   */
  protected $url;

  /**
   * The User Logout  username.
   *
   * @var string
   */
  protected $username;

  /**
   * The User Logout password.
   *
   * @var string
   */
  protected $password;

  /**
   * {@inheritdoc}
   */
  public function get_username() {
    return $this->username;
  }

  /**
   * {@inheritdoc}
   */
  public function get_password() {
    return $this->password;
  }

  /**
   * {@inheritdoc}
   */
  public function get_url() {
    return $this->url;
  }

}
