<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * The request used to Update logstore from log service.
 * Class UpdateLogstoreRequest
 * @package Aliyun\Log\Models\Request
 */
class UpdateLogstoreRequest extends Request{

    private  $logstore;
    private  $ttl;
    private  $shardCount;

    /**
     * UpdateLogstoreRequest constructor.
     *
     * @param null $project
     * @param null $logstore
     * @param null $ttl
     * @param null $shardCount
     */
    public function __construct($project=null,$logstore = null,$ttl = null,$shardCount = null) {
        parent::__construct($project);
        $this -> logstore = $logstore;
        $this -> ttl = $ttl;
        $this -> shardCount = $shardCount;
    }
    public function getLogstore()
    {
        return $this -> logstore;
    }
    public function getTtl()
    {
        return $this -> ttl;
    }
    public function getShardCount()
    {
        return $this -> shardCount;
    }
}
