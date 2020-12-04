<?php
/**
 * Block for Feedback Form

 * @category  SportStore
 * @package   SportStore\CustomerFeedback
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Kovalchuk Oleksandr
 */

namespace SportStore\CustomerFeedback\Block;

use Magento\Framework\View\Element\Template;

/**
 * Class FeedbackFormBlock
 * @package SportStore\CustomerFeedback\Block
 */
class FeedbackFormBlock extends Template
{
    /**
     *Action path for processing submitted feedback form
     */
    const FORM_ACTION = 'customer/feedback/store';

    /**
     * @return string
     */
    public function storeFeedback() : string
    {
        return $this->getUrl(self::FORM_ACTION);
    }
}

