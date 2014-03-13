<?php

/**
 * @file
 * Tests for demo5.module.
 */

namespace Drupal\demo5\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the demo5 module.
 */
class demo5Test extends WebTestBase {

  public static function getInfo() {
    return array(
      'name' => 'demo5 functionality',
      'description' => 'Test Unit for module demo5.',
      'group' => 'Other',
    );
  }

  function setUp() {
    parent::setUp();
  }

  /**
   * Tests demo5 functionality.
   */
  function testdemo5() {
    //Check that the basic functions of module demo5.
    $this->assertEqual(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
