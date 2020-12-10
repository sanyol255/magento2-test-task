<?php
/**
 *Interface for Feedback Repository

 * @category  SportStore
 * @package   SportStore\CustomerFeedback
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Kovalchuk Oleksandr
 */
namespace SportStore\CustomerFeedback\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use SportStore\CustomerFeedback\Api\Data\FeedbackInterface;

/**
 * Interface FeedbackRepositoryInterface
 * @package SportStore\CustomerFeedback\Api
 */
interface FeedbackRepositoryInterface
{
    /**
     * Method for getting data by id
     * @param int $id
     * @return mixed
     */
    public function getById(int $id);

    /**
     * Method for getting list of data specified by search criteria
     * @param SearchCriteriaInterface $criteria
     * @return mixed
     */
    public function getList(SearchCriteriaInterface $criteria);

    /**
     * Method for deleting data by id
     * @param int $id
     * @return mixed
     */
    public function deleteById(int $id);

    /**
     * Method for deleting data
     * @param FeedbackInterface $model
     * @return mixed
     */
    public function delete(FeedbackInterface $model);

    /**
     * Method for saving data
     * @param FeedbackInterface $model
     * @return mixed
     */
    public function save(FeedbackInterface $model);
}
