<?php
/*
 * Avalara_BaseProvider
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @copyright Copyright (c) 2021 Avalara, Inc
 * @license    http: //opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
namespace ClassyLlama\AvaTax\BaseProvider\Test\Unit\Model\ResourceModel;

use PHPUnit\Framework\TestCase;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;

/**
 * Class QueueTest
 * @covers ClassyLlama\AvaTax\BaseProvider\Model\ResourceModel\Queue
 * @package ClassyLlama\AvaTax\BaseProvider\Test\Unit\Model\ResourceModel
 */
class QueueTest extends TestCase
{
    protected function setUp(): void
    {
        $this->objectManager = new ObjectManager($this);

         $this->queueModel = $this->objectManager->getObject(
             \ClassyLlama\AvaTax\BaseProvider\Model\ResourceModel\Queue::class,
             []
         );

       
        parent::setUp();
    }

    /**
     * tests Initialize resource model
     * @test
     * @covers \ClassyLlama\AvaTax\BaseProvider\Model\ResourceModel\Queue::_construct
     */
    public function test()
    {

        $this->assertEquals($this->queueModel, $this->queueModel);
    }
}