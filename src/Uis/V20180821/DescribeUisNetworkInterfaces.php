<?php

namespace AlibabaCloud\Uis\V20180821;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeUisNetworkInterfaces
 *
 * @method string getResourceOwnerId()
 * @method string getUisNodeId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getPageSize()
 * @method string getUisEniId()
 * @method string getOwnerId()
 * @method string getPageNumber()
 */
class DescribeUisNetworkInterfaces extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Uis';

    /**
     * @var string
     */
    public $version = '2018-08-21';

    /**
     * @var string
     */
    public $action = 'DescribeUisNetworkInterfaces';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'uis';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $uisNodeId
     *
     * @return $this
     */
    public function withUisNodeId($uisNodeId)
    {
        $this->data['UisNodeId'] = $uisNodeId;
        $this->options['query']['UisNodeId'] = $uisNodeId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $uisEniId
     *
     * @return $this
     */
    public function withUisEniId($uisEniId)
    {
        $this->data['UisEniId'] = $uisEniId;
        $this->options['query']['UisEniId'] = $uisEniId;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }
}
