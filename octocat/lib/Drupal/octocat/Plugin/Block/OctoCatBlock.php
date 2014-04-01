<?php

/**
 * @file
 * Contains \Drupal\octocat\Plugin\Block\OctoCatBlock
 */

namespace Drupal\octocat\Plugin\Block;

use Drupal\block\BlockBase;
use Drupal\block\Annotation\Block;
use Drupal\Core\Annotation\Translation;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a demo block.
 *
 * @Block(
 *   id = "octocat_block",
 *   admin_label = @Translation("Octocat")
 * )
 */
class OctoCatBlock extends BlockBase implements ContainerFactoryPluginInterface  {

  /**
   * Contains the configuration object factory.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * Constructs a new OctoCatBlock instance.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param array $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The configuration factory object.
   */
  public function __construct(array $configuration, $plugin_id, array $plugin_definition, ConfigFactoryInterface $config_factory) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->configFactory = $config_factory;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, array $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('config.factory')
    );
  }

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
    $form['type'] = array(
      '#type' => 'select',
      '#title' => t('Octocat type'),
      '#options' => $this->configFactory->get('octocat.settings')->get('octocats'),
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
