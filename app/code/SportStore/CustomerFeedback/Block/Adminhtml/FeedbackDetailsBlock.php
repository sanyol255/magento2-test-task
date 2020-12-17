<?php
/**
 * Block for getting action url for storing data from form to database

 * @category  SportStore
 * @package   SportStore\CustomerFeedback
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Kovalchuk Oleksandr
 */
namespace SportStore\CustomerFeedback\Block\Adminhtml;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use SportStore\CustomerFeedback\Api\Data\FeedbackInterface;
use SportStore\CustomerFeedback\Api\FeedbackRepositoryInterface;
use SportStore\CustomerFeedback\Model\StatusOptions;

/**
 * Class FeedbackDetailsBlock
 * @package SportStore\CustomerFeedback\Block\Adminhtml
 */
class FeedbackDetailsBlock extends Template
{
    /**
     * Feedback Repository Interface variable
     *
     * @var FeedbackRepositoryInterface
     */
    protected $repository;

    /**
     * Variable for storing object with specified feedback data
     *
     * @var FeedbackRepositoryInterface
     */
    protected $_model;

    /**
     * FeedbackDetailsBlock constructor
     *
     * @param Context $context
     * @param FeedbackRepositoryInterface $repository
     * @param array $data
     */
    public function __construct(
        Context $context,
        FeedbackRepositoryInterface $repository,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->repository = $repository;
    }

    /**
     * Getting model data
     *
     * @return mixed
     */
    public function getModel()
    {
        if (is_null($this->_model)) {
            $this->_model = $this->repository->getById($this->getRequest()->getParam(FeedbackInterface::ID));
        }

        return $this->_model;
    }

    /**
     * Returning string status title
     *
     * @return string
     */
    public function getStatusTitle() : string
    {
        $statusTitle = "";
        $status = $this->getModel()->getStatus();
        if ($status == StatusOptions::ANSWERED) {
            $statusTitle = StatusOptions::ANSWERED_TITLE;
        } elseif ($status == StatusOptions::NOT_ANSWERED) {
            $statusTitle = StatusOptions::NOT_ANSWERED_TITLE;
        }
        return $statusTitle;
    }
}
