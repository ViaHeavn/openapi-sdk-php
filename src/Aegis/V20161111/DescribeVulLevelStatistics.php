<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeVulLevelStatistics
 *
 * @method string getSourceIp()
 * @method string getEndTs()
 * @method string getStartTs()
 * @method string getUuids()
 */
class DescribeVulLevelStatistics extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'aegis';

    /**
     * @var string
     */
    public $version = '2016-11-11';

    /**
     * @var string
     */
    public $action = 'DescribeVulLevelStatistics';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $endTs
     *
     * @return $this
     */
    public function withEndTs($endTs)
    {
        $this->data['EndTs'] = $endTs;
        $this->options['query']['EndTs'] = $endTs;

        return $this;
    }

    /**
     * @param string $startTs
     *
     * @return $this
     */
    public function withStartTs($startTs)
    {
        $this->data['StartTs'] = $startTs;
        $this->options['query']['StartTs'] = $startTs;

        return $this;
    }

    /**
     * @param string $uuids
     *
     * @return $this
     */
    public function withUuids($uuids)
    {
        $this->data['Uuids'] = $uuids;
        $this->options['query']['Uuids'] = $uuids;

        return $this;
    }
}
