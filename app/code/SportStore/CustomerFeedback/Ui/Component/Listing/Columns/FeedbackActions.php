<?php

namespace SportStore\CustomerFeedback\Ui\Component\Listing\Columns;

use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;

class FeedbackActions extends Column
{
    protected $urlBuilder;

    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        UrlInterface $urlBuilder,
        array $components = [],
        array $data = []
    ){
        parent::__construct($context, $uiComponentFactory, $components, $data);
        $this->urlBuilder = $urlBuilder;
    }

    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                $item[$this->getName()] = [
                    'details' => [
                        'href' => $this->urlBuilder->getUrl(
                            $this->getData('config/viewUrl'),
                            [
                                $this->getData('config/idUrlParam') => $item['feedback_id']
                            ]
                        ),
                        'label' => __('Details')
                    ],
                ];
            }
        }
        return $dataSource;
    }
}
