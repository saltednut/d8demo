<?php

/**
 * @file
 * Tests for demo4.module.
 */

namespace Drupal\demo4\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the demo4 module.
 */
class demo4Test extends WebTestBase {

  public static function getInfo() {
    return array(
      'name' => 'demo4 functionality',
      'description' => 'Test Untit for module demo4.',
      'group' => 'Other',
    );
  }

  function setUp() {
    parent::setUp();
  }

  /**
   * Tests demo4 functionality.
   */
  function testdemo4() {
    //Check that the basic functions of module demo4.
    $this->assertEqual(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
