<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Pepper\Test\Model\Attribute\Source;

class Component extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    /**
     * Get all options
     * @return array
     */
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => __('Component 1'), 'value' => 'component 1'],
                ['label' => __('Component 2'), 'value' => 'component 2'],
                ['label' => __('Component 3'), 'value' => 'component 3'],
                ['label' => __('Component 4'), 'value' => 'component 4'],
                ['label' => __('Component 5'), 'value' => 'component 5'],
                ['label' => __('Component 6'), 'value' => 'component 6'],
            ];
        }
        return $this->_options;
    }
}