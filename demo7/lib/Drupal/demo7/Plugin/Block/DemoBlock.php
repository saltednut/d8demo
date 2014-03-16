<?php

/**
 * @file
 * Contains \Drupal\demo7\Plugin\Block\DemoBlock
 */

namespace Drupal\demo7\Plugin\Block;

use Drupal\block\BlockBase;
use Drupal\block\Annotation\Block;
use Drupal\Core\Annotation\Translation;

/**
 * Provides a demo block.
 *
 * @Block(
 *   id = "demo7_demo",
 *   admin_label = @Translation("Demo Block")
 * )
 */
class DemoBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return array(
      'text' => 'Default text',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, &$form_state) {
    $form['text'] = array(
      '#type' => 'textfield',
      '#title' => t('Text'),
      '#maxlength' => 50,
      '#default_value' => $this->configuration['text'],
      '#required' => TRUE,
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, &$form_state) {
    $this->configuration['text'] = $form_state['values']['text'];
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#theme' => 'demo7_demo_block',
      '#text' => $this->configuration['text'],
    );
  }
}
