<?php
/**
 * Feedback Repository

 * @category  SportStore
 * @package   SportStore\CustomerFeedback
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Kovalchuk Oleksandr
 */
namespace SportStore\CustomerFeedback\Model;

use Exception;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterfaceFactory;
use Magento\Framework\Exception\NoSuchEntityException;
use SportStore\CustomerFeedback\Api\Data\FeedbackInterface;
use SportStore\CustomerFeedback\Api\Data\FeedbackInterfaceFactory;
use SportStore\CustomerFeedback\Api\FeedbackRepositoryInterface;
use SportStore\CustomerFeedback\Model\ResourceModel\Feedback as ResourceModel;
use SportStore\CustomerFeedback\Model\ResourceModel\Feedback\CollectionFactory;

/**
 * Class FeedbackRepository
 * @package SportStore\CustomerFeedback\Model
 */
class FeedbackRepository implements FeedbackRepositoryInterface
{
    /**
     * @var ResourceModel
     */
    protected $resourceModel;
    /**
     * @var FeedbackInterfaceFactory
     */
    protected $modelFactory;
    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;
    /**
     * @var CollectionProcessorInterface
     */
    protected $processor;
    /**
     * @var SearchResultsInterfaceFactory
     */
    protected $searchResultsFactory;

    /**
     * FeedbackRepository constructor.
     * @param FeedbackInterfaceFactory $modelFactory
     * @param ResourceModel $resourceModel
     * @param CollectionFactory $collectionFactory
     * @param CollectionProcessorInterface $processor
     * @param SearchResultsInterfaceFactory $searchResultsFactory
     */
    public function __construct(
        FeedbackInterfaceFactory $modelFactory,
        ResourceModel $resourceModel,
        CollectionFactory $collectionFactory,
        CollectionProcessorInterface $processor,
        SearchResultsInterfaceFactory $searchResultsFactory
    ) {
        $this->resourceModel = $resourceModel;
        $this->modelFactory = $modelFactory;
        $this->collectionFactory = $collectionFactory;
        $this->processor = $processor;
    }

    /**
     * @param int $id
     * @return mixed|void
     * @throws NoSuchEntityException
     */
    public function getById(int $id)
    {
        $model = $this->modelFactory->create();
        $this->resourceModel->load($model, $id, FeedbackInterface::ID);
        if (!$model->getId()) {
            throw new NoSuchEntityException(__('There is no such entity %1!', $id));
        }
    }

    /**
     * Getting list of feedbacks
     * @param SearchCriteriaInterface $criteria
     * @return mixed
     */
    public function getList(SearchCriteriaInterface $criteria)
    {
        $collection = $this->collectionFactory->create();

        $this->processor->process($criteria, $collection);

        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        return $searchResults;
    }

    /**
     * @param int $id
     * @return mixed|void
     */
    public function deleteById(int $id)
    {
        try {
            $model = $this->getById($id);
            $this->delete($model);
        } catch (NoSuchEntityException $e) {
        }
    }

    /**
     * @param FeedbackInterface $model
     * @return mixed|void
     */
    public function delete(FeedbackInterface $model)
    {
        try {
            $this->resourceModel->delete($model);
        } catch (Exception $e) {
        }
    }


    /**
     * @param FeedbackInterface $model
     * @return FeedbackInterface
     * @throws \Magento\Framework\Exception\AlreadyExistsException
     */
    public function save(FeedbackInterface $model) : FeedbackInterface
    {
        $this->resourceModel->save($model);

        return $model;
    }
}
