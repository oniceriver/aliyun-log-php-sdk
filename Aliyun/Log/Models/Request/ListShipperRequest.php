<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * Class ListShipperRequest
 * @package Aliyun\Log\Models\Request
 */
class ListShipperRequest extends Request{
    private $logStore;

    /**
     * ListShipperRequest constructor.
     *
     * @param string $project
     */
    public function __construct($project) {
        parent::__construct ( $project );
    }

    /**
     * @return mixed
     */
    public function getLogStore()
    {
        return $this->logStore;
    }

    /**
     * @param mixed $logStore
     */
    public function setLogStore($logStore)
    {
        $this->logStore = $logStore;
    }


}