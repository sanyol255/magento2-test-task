<?php
namespace SportStore\CustomerFeedback\Block\Adminhtml\Feedback\Form\Buttons;

use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Registry;


class GenericButton
{

    protected $urlBuilder;


    protected $registry;


    public function __construct(
        Context $context,
        Registry $registry
    ) {
        $this->urlBuilder = $context->getUrlBuilder();
        $this->registry = $registry;
    }


    public function getId()
    {
        $feedback = $this->registry->registry('feedback');
        return $feedback ? $feedback->getId() : null;
    }


    public function getUrl($route = '', $params = [])
    {
        return $this->urlBuilder->getUrl($route, $params);
    }
}
