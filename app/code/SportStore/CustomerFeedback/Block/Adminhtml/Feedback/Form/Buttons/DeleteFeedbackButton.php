<?php

namespace SportStore\CustomerFeedback\Block\Adminhtml\Feedback\Form\Buttons;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class DeleteFeedbackButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * @return array
     */
    public function getButtonData()
    {
        $data = [];
        if ($this->getId()) {
            $data = [
                'label' => __('Delete Feedback'),
                'class' => 'delete',
                'on_click' => 'deleteConfirm(\''
                    . __('Are you sure you want to delete this feedback ?')
                    . '\', \'' . $this->getDeleteUrl() . '\')',
                'sort_order' => 60,
            ];
        }
        return $data;
    }

    /**
     * @return string
     */
    public function getDeleteUrl()
    {
        return $this->getUrl('customerfeed/feedback/delete', ['feedback_id' => $this->getId()]);
    }
}
