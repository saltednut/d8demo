<?php

/**
 * @file
 * SimpleTests for our Demo module.
 */

namespace Drupal\demo\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Default test case for our demo module.
 *
 * @ingroup demo
 */
class DemoSimpleTest extends WebTestBase {

  public static $modules = array('demo');

  public static function getInfo() {
    return array(
      'name' => 'Demo',
      'description' => 'Functional tests for our Demo module',
      'group' => 'Examples',
    );
  }

  /**
   * Demo SimpleTest for our module.
   *
   * Enable demo module and return the "/demo" page.
   */
  public function testController() {
    $this->drupalGet('demo');
    $this->assertResponse(200, 'The Demo page is available.');
  }

}
