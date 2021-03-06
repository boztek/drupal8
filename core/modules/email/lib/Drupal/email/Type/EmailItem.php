<?php

/**
 * @file
 * Contains \Drupal\email\Type\EmailItem.
 */

namespace Drupal\email\Type;

use Drupal\Core\Entity\Field\FieldItemBase;

/**
 * Defines the 'email_field' entity field item.
 */
class EmailItem extends FieldItemBase {

  /**
   * Definitions of the contained properties.
   *
   * @see EmailItem::getPropertyDefinitions()
   *
   * @var array
   */
  static $propertyDefinitions;

  /**
   * Implements ComplexDataInterface::getPropertyDefinitions().
   */
  public function getPropertyDefinitions() {

    if (!isset(static::$propertyDefinitions)) {
      static::$propertyDefinitions['value'] = array(
        'type' => 'email',
        'label' => t('E-mail value'),
      );
    }
    return static::$propertyDefinitions;
  }
}
