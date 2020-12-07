<?php
/**
 *Interface for Feedback Repository

 * @category  SportStore
 * @package   SportStore\CustomerFeedback
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Kovalchuk Oleksandr
 */
namespace SportStore\CustomerFeedback\Api;

use SportStore\CustomerFeedback\Api\Data\FeedbackInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface FeedbackRepositoryInterface
 * @package SportStore\CustomerFeedback\Api
 */
interface FeedbackRepositoryInterface
{
    /**
     * @param int $id
     * @return mixed
     */
    public function getById(int $id);

    /**
     * @param SearchCriteriaInterface $criteria
     * @return mixed
     */
    public function getList(SearchCriteriaInterface $criteria);

    /**
     * @param int $id
     * @return mixed
     */
    public function deleteById(int $id);

    /**
     * @param FeedbackInterface $model
     * @return mixed
     */
    public function delete(FeedbackInterface $model);

    /**
     * @param FeedbackInterface $model
     * @return mixed
     */
    public function save(FeedbackInterface $model);
}
