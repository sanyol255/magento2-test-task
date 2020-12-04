<?php
/**
 *Interface for Feedback Model

 * @category  SportStore
 * @package   SportStore\CustomerFeedback
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Kovalchuk Oleksandr
 */
namespace SportStore\CustomerFeedback\Api\Data;

/**
 * Interface FeedbackInterface
 * @package SportStore\CustomerFeedback\Api\Data
 */
interface FeedbackInterface
{
    /**#@+
    *Fields for Customers Feedbacks table
    */
    const ID = 'feedback_id';
    const FIRSTNAME = 'firstname';
    const LASTNAME = 'lastname';
    const AGE = 'age';
    const EMAIL = 'email';
    const MESSAGE = 'message';
    const STATUS = 'status';

    /**
     * @return int
     */
    public function getFeedbackId() : int;

    /**
     * @return string
     */
    public function getFirstname() : string;

    /**
     * @return string
     */
    public function getLastname() : string;

    /**
     * @return int
     */
    public function getAge() : int;

    /**
     * @return string
     */
    public function getEmail() : string;

    /**
     * @return string
     */
    public function getMessage() : string;

    /**
     * @return int
     */
    public function getStatus() : int;


    /**
     * @param string $firstname
     * @return $this
     */
    public function setFirstname(string $firstname) : self;

    /**
     * @param string $lastname
     * @return $this
     */
    public function setLastname(string $lastname) : self;

    /**
     * @param int $age
     * @return $this
     */
    public function setAge(int $age) : self;

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email) : self;

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage(string $message) : self;

    /**
     * @param int $status
     * @return $this
     */
    public function setStatus(int $status) : self;
}
