<?php
/**
 * Feedback Model

 * @category  SportStore
 * @package   SportStore\CustomerFeedback
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Kovalchuk Oleksandr
 */
namespace SportStore\CustomerFeedback\Model;

use Magento\Framework\Model\AbstractModel;
use SportStore\CustomerFeedback\Api\Data\FeedbackInterface;
use SportStore\CustomerFeedback\Model\ResourceModel\Feedback as ResourceModel;

/**
 * Class Feedback
 * @package SportStore\CustomerFeedback\Model
 */
class Feedback extends AbstractModel implements FeedbackInterface
{
    /**
     *Feedback Model initialization with resource model and setting id field name
     */
    public function _construct()
    {
        parent::_construct();
        $this->_init(ResourceModel::class);
        $this->setIdFieldName(FeedbackInterface::ID);
    }

    /**
     * @param string $firstname
     * @return FeedbackInterface
     */
    public function setFirstname(string $firstname): FeedbackInterface
    {
        return $this->setData(FeedbackInterface::FIRSTNAME, $firstname);
    }

    /**
     * @param string $lastname
     * @return FeedbackInterface
     */
    public function setLastname(string $lastname): FeedbackInterface
    {
        return $this->setData(FeedbackInterface::LASTNAME, $lastname);
    }

    /**
     * @param int $age
     * @return FeedbackInterface
     */
    public function setAge(int $age): FeedbackInterface
    {
        return $this->setData(FeedbackInterface::AGE, $age);
    }

    /**
     * @param string $email
     * @return FeedbackInterface
     */
    public function setEmail(string $email): FeedbackInterface
    {
        return $this->setData(FeedbackInterface::EMAIL, $email);
    }

    /**
     * @param string $message
     * @return FeedbackInterface
     */
    public function setMessage(string $message): FeedbackInterface
    {
        return $this->setData(FeedbackInterface::MESSAGE, $message);
    }

    /**
     * @param int $status
     * @return FeedbackInterface
     */
    public function setStatus(int $status): FeedbackInterface
    {
        return $this->setData(FeedbackInterface::STATUS, $status);
    }

    /**
     * @return int
     */
    public function getFeedbackId(): int
    {
        return $this->getData(FeedbackInterface::ID);
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->getData(FeedbackInterface::FIRSTNAME);
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->getData(FeedbackInterface::LASTNAME);
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->getData(FeedbackInterface::AGE);
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->getData(FeedbackInterface::EMAIL);
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->getData(FeedbackInterface::MESSAGE);
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->getData(FeedbackInterface::STATUS);
    }
}

