<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeCategory
 *
 * @method string getCategoryId()
 */
class DescribeCategory extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Chatbot';

    /**
     * @var string
     */
    public $version = '2017-10-11';

    /**
     * @var string
     */
    public $action = 'DescribeCategory';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

    /**
     * @deprecated deprecated since version 2.0, Use withCategoryId() instead.
     *
     * @param string $categoryId
     *
     * @return $this
     */
    public function setCategoryId($categoryId)
    {
        return $this->withCategoryId($categoryId);
    }

    /**
     * @param string $categoryId
     *
     * @return $this
     */
    public function withCategoryId($categoryId)
    {
        $this->data['CategoryId'] = $categoryId;
        $this->options['query']['CategoryId'] = $categoryId;

        return $this;
    }
}
