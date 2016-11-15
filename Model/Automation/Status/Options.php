<?php

namespace Dotdigitalgroup\Email\Model\Automation\Status;

class Options implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * @var null|array
     */
    protected $options;

    /**
     * @return array|null
     */
    public function toOptionArray()
    {
        $options = [
            [
                'label' => 'pending',
                'value' => 'Pending'
            ],
            [
                'label' => 'suppressed',
                'value' => 'Suppressed'
            ],[
                'label' => 'Active',
                'value' => 'Active'
            ],[
                'label' => 'Draft',
                'value' => 'Draft'
            ],[
                'label' => 'Deactivated',
                'value' => 'Deactivated'
            ],[
                'label' => 'ReadOnly',
                'value' => 'ReadOnly'
            ],[
                'label' => 'NotAvailableInThisVersion',
                'value' => 'NotAvailableInThisVersion'
            ],
            [
                'label' => 'Failed',
                'value' => 'Failed'
            ],
        ];

        return $options;
    }
}