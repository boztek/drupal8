<?php
/**
 * @file
 * Definition of \Drupal\Core\Executable\ExecutableException.
 */

namespace Drupal\Core\Executable;

use Exception;
use Drupal\Component\Plugin\Exception\ExceptionInterface;

/**
 * Generic executable plugin exception class.
 */
class ExecutableException extends Exception implements ExceptionInterface {
}
