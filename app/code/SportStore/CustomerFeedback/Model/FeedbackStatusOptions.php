<?php
/**
 * Replacing integer statuses with their string equivalent

 * @category  SportStore
 * @package   SportStore\CustomerFeedback
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Kovalchuk Oleksandr
 */
namespace SportStore\CustomerFeedback\Model;

use SportStore\CustomerFeedback\Api\Data\FeedbackOptionsInterface;

/**
 * Class FeedbackStatusOptions
 * @package SportStore\CustomerFeedback\Model
 */
class FeedbackStatusOptions implements FeedbackOptionsInterface
{
    /**
     *String representation for status 9
     */
    const NOT_ANSWERED = 'Not answered';
    /**
     *String representation for status 7
     */
    const ANSWERED = 'Answered';

    /**
     *Associative array with integer status values in database and string labels for displaying in grid
     * @return array[]
     */
    public function toOptionArray()
    {
        return [['value' => 9, 'label' => self::NOT_ANSWERED], ['value' => 7, 'label' => self::ANSWERED]];
    }
}
