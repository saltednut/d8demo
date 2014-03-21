<?php

/**
 * @file
 * Contains \Drupal\octocat\Tests\Routing\OctoCatRoutesTest.
 */

namespace Drupal\octocat\Tests\Routing;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Tests\UnitTestCase;
use Drupal\octocat\Routing\OctoCatRoutes;

/**
 * Tests our dynamic routing component.
 */
class OctoCatRoutesTest extends UnitTestCase {

  /**
   * The config factory.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface|\PHPUnit_Framework_MockObject_MockObject
   */
  protected $configFactory;

  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => 'Octocat Routes Test',
      'description' => 'Unit tests for our Octocat routes',
      'group' => 'D8 Demos',
    );
  }

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    $this->configFactory = $this->getMock('Drupal\Core\Config\ConfigFactoryInterface');
    parent::setUp();
  }

  /**
   * Test the OctoCatRoutes::routes() method.
   */
  public function testRoutes() {
    $types = array('one', 'two');
    $config = $this->getMockBuilder('Drupal\Core\Config\Config')
      ->disableOriginalConstructor()
      ->getMock();
    $config->expects($this->once())
      ->method('get')
      ->with('octocats')
      ->will($this->returnValue($types));
    $this->configFactory->expects($this->once())
      ->method('get')
      ->with('octocat.settings')
      ->will($this->returnValue($config));

    $octocat_routes = new OctoCatRoutes($this->configFactory);
    $routes = $octocat_routes->routes();
    $this->assertCount(2, $routes);
    $this->assertArrayHasKey('octocat.page.one', $routes);
    $this->assertArrayHasKey('octocat.page.two', $routes);
  }

}
