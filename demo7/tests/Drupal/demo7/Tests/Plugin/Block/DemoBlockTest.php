<?php

/**
 * @file
 * Contains \Drupal\demo7\Tests\Plugin\Block\DemoBlockTest.
 */

namespace Drupal\demo7\Tests\Plugin\Block;

use Drupal\Tests\UnitTestCase;
use Drupal\demo7\Plugin\Block\DemoBlock;

/**
 * Tests our Demo block.
 */
class DemoBlockTest extends UnitTestCase {

  public static function getInfo() {
    return array(
      'name' => 'Demo Block',
      'description' => 'Unit tests for our demo block',
      'group' => 'D8 Demos',
    );
  }

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
  }

  /**
   * Test the DemoBlock::build() method.
   */
  public function testBlock() {
    $config = array();
    $plugin = array('module' => 'demo7', 'id' => 'demo7_demo');
    $block_plugin = new DemoBlock($config, 'demo7_demo', $plugin);

    $build = $block_plugin->build();
    $this->assertEquals('demo7_demo_block', $build['#theme']);
    $this->assertEquals('Default text', $build['#text']);
  }

}
