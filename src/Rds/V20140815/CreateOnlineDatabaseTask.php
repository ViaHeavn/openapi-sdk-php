<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateOnlineDatabaseTask
 *
 * @method string getResourceOwnerId()
 * @method string getMigrateTaskId()
 * @method string getDBName()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getDBInstanceId()
 * @method string getCheckDBMode()
 * @method string getOwnerId()
 */
class CreateOnlineDatabaseTask extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Rds';

    /**
     * @var string
     */
    public $version = '2014-08-15';

    /**
     * @var string
     */
    public $action = 'CreateOnlineDatabaseTask';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rds';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

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
     * @deprecated deprecated since version 2.0, Use withMigrateTaskId() instead.
     *
     * @param string $migrateTaskId
     *
     * @return $this
     */
    public function setMigrateTaskId($migrateTaskId)
    {
        return $this->withMigrateTaskId($migrateTaskId);
    }

    /**
     * @param string $migrateTaskId
     *
     * @return $this
     */
    public function withMigrateTaskId($migrateTaskId)
    {
        $this->data['MigrateTaskId'] = $migrateTaskId;
        $this->options['query']['MigrateTaskId'] = $migrateTaskId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDBName() instead.
     *
     * @param string $dBName
     *
     * @return $this
     */
    public function setDBName($dBName)
    {
        return $this->withDBName($dBName);
    }

    /**
     * @param string $dBName
     *
     * @return $this
     */
    public function withDBName($dBName)
    {
        $this->data['DBName'] = $dBName;
        $this->options['query']['DBName'] = $dBName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
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
     * @deprecated deprecated since version 2.0, Use withDBInstanceId() instead.
     *
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        return $this->withDBInstanceId($dBInstanceId);
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function withDBInstanceId($dBInstanceId)
    {
        $this->data['DBInstanceId'] = $dBInstanceId;
        $this->options['query']['DBInstanceId'] = $dBInstanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCheckDBMode() instead.
     *
     * @param string $checkDBMode
     *
     * @return $this
     */
    public function setCheckDBMode($checkDBMode)
    {
        return $this->withCheckDBMode($checkDBMode);
    }

    /**
     * @param string $checkDBMode
     *
     * @return $this
     */
    public function withCheckDBMode($checkDBMode)
    {
        $this->data['CheckDBMode'] = $checkDBMode;
        $this->options['query']['CheckDBMode'] = $checkDBMode;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
}
