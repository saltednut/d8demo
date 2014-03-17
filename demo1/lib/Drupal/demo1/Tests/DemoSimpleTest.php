<?php

/**
 * @file
 * SimpleTests for our module.
 */

namespace Drupal\demo1\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Default test case for our demo module.
 *
 * @ingroup demo
 */
class DemoSimpleTest extends WebTestBase {

  public static $modules = array('demo1');

  public static function getInfo() {
    return array(
      'name' => 'Demo Controller',
      'description' => 'Functional tests for our first Demo module',
      'group' => 'D8 Demos',
    );
  }

  /**
   * Demo SimpleTest for our module.
   *
   * Enable demo module and return the "/demo1" page.
   */
  public function testController() {
    $this->drupalGet('demo1');
    $this->assertResponse(200, 'The first demo page is available.');
  }

}
