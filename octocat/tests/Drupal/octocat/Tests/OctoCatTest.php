<?php

/**
 * @file
 * Contains \Drupal\octocat\Tests\Routing\OctoCatTest.
 */

namespace Drupal\octocat\Tests;

use Drupal\octocat\Routing\OctoCatRoutes;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Tests\UnitTestCase;


/**
 * Tests our dynamic routing component.
 */
class OctoCatTest extends UnitTestCase {

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
      'name' => 'Octocat Test',
      'description' => 'Unit tests for our Octocat module',
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
   * Test the getOctoCats method.
   */
  public function getOctoCatsTest() {
    $types = array('spectrocat', 'octobiwan');
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

    $octocatRoutes = new OctoCatRoutes($this->configFactory);
    $octocats = $octocatRoutes->getOctoCats();
    $this->assertNotEmpty($octocats);
    $this->assertCount(2, $octocats);
  }

}
