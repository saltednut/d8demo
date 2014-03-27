<?php

/**
 * @file
 * Contains \Drupal\octocat\Plugin\Block\OctoCatBlock
 */

namespace Drupal\octocat\Plugin\Block;

use Drupal\block\BlockBase;
use Drupal\block\Annotation\Block;
use Drupal\Core\Annotation\Translation;

/**
 * Provides a demo block.
 *
 * @Block(
 *   id = "octocat_block",
 *   admin_label = @Translation("Octocat")
 * )
 */
class OctoCatBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return array(
      'type' => 'original',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, &$form_state) {
    $options = \Drupal::config('octocat.settings')->get('octocats');
    $form['type'] = array(
      '#type' => 'select',
      '#title' => t('Octocat type'),
      '#options' => $options,
      '#default_value' => $this->configuration['type'],
      '#required' => TRUE,
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, &$form_state) {
    $this->configuration['type'] = $form_state['values']['type'];
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#theme' => 'octocat_display',
      '#type' => $this->configuration['type'],
    );
  }
}
