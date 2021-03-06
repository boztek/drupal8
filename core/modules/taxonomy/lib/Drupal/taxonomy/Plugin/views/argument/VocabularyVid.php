<?php

/**
 * @file
 * Definition of Drupal\taxonomy\Plugin\views\argument\VocabularyVid.
 */

namespace Drupal\taxonomy\Plugin\views\argument;

use Drupal\Core\Annotation\Plugin;
use Drupal\views\Plugin\views\argument\Numeric;

/**
 * Argument handler to accept a vocabulary id.
 *
 * @ingroup views_argument_handlers
 *
 * @Plugin(
 *   id = "vocabulary_vid",
 *   module = "taxonomy"
 * )
 */
class VocabularyVid extends Numeric {

  /**
   * Override the behavior of title(). Get the name of the vocabulary.
   */
  function title() {
    $vocabulary = entity_load('taxonomy_vocabulary', $this->argument);
    if ($vocabulary) {
      return check_plain($vocabulary->label());
    }

    return t('No vocabulary');
  }

}
