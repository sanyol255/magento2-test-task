<?php
/**
 * Action Feedback/Store for CustomerFeedback

 * @category  SportStore
 * @package   SportStore\CustomerFeedback
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Kovalchuk Oleksandr
 */
namespace SportStore\CustomerFeedback\Controller\Feedback;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultInterface;
use SportStore\CustomerFeedback\Api\Data\FeedbackInterfaceFactory;
use SportStore\CustomerFeedback\Api\FeedbackRepositoryInterface;

/**
 * Class Store
 * @package SportStore\CustomerFeedback\Controller\Feedback
 */
class Store extends Action
{
    /**
     * @var FeedbackInterfaceFactory
     */
    protected $feedbackFactory;

    /**
     * @var FeedbackRepositoryInterface
     */
    protected $feedbackRepository;

    /**
     * Store constructor.
     * @param Context $context
     * @param FeedbackInterfaceFactory $feedbackFactory
     * @param FeedbackRepositoryInterface $feedbackRepository
     */
    public function __construct(
        Context $context,
        FeedbackInterfaceFactory $feedbackFactory,
        FeedbackRepositoryInterface $feedbackRepository
    ) {
        parent::__construct($context);
        $this->feedbackFactory = $feedbackFactory;
        $this->feedbackRepository = $feedbackRepository;
    }

    /**
     * Saving feedback data from form to customers_feedbacks table
     * @return ResultInterface
     */
    public function execute() : ResultInterface
    {
        $model = $this->feedbackFactory->create();
        $model->setFirstname($this->getRequest()->getParam('firstname'))
              ->setLastname($this->getRequest()->getParam('lastname'))
              ->setAge($this->getRequest()->getParam('age'))
              ->setEmail($this->getRequest()->getParam('email'))
              ->setMessage($this->getRequest()->getParam('message'));
        $this->feedbackRepository->save($model);

        $this->_redirect('customer/feedback/index');
        $this->messageManager->addNoticeMessage(__('Your feedback was added'));
    }
}
