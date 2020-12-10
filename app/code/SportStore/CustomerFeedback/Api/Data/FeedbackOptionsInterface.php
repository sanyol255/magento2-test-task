<?php
/**
 *Interface for Feedback Options

 * @category  SportStore
 * @package   SportStore\CustomerFeedback
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Kovalchuk Oleksandr
 */
namespace SportStore\CustomerFeedback\Api\Data;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Interface FeedbackOptionsInterface
 * @package SportStore\CustomerFeedback\Api\Data
 */
interface FeedbackOptionsInterface extends OptionSourceInterface
{
    /**
     *Default value for integer type in options
     */
    const EMPTY_VALUE = 0;
    /**
     *Default value for string type in options
     */
    const EMPTY_TEXT = 'Choose option';
}
