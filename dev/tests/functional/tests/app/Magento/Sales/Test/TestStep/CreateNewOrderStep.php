<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */

namespace Magento\Sales\Test\TestStep;

use Magento\Sales\Test\Page\Adminhtml\OrderIndex;
use Mtf\TestStep\TestStepInterface;

/**
 * Class CreateNewOrderStep
 * Create new order
 */
class CreateNewOrderStep implements TestStepInterface
{
    /**
     * Sales order index page
     *
     * @var OrderIndex
     */
    protected $orderIndex;

    /**
     * @constructor
     * @param OrderIndex $orderIndex
     */
    public function __construct(OrderIndex $orderIndex)
    {
        $this->orderIndex = $orderIndex;
    }

    /**
     * Create new order
     *
     * @return void
     */
    public function run()
    {
        $this->orderIndex->getGridPageActions()->addNew();
    }
}