<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * Class MergeShardsRequest
 * @package Aliyun\Log\Models\Request
 */
class MergeShardsRequest extends Request {

    private $logstore;

    /**
     * MergeShardsRequest constructor.
     *
     * @param string $project
     * @param        $logstore
     * @param        $shardId
     */
    public function __construct($project,$logstore,$shardId) {
        parent::__construct ( $project );
        $this->logstore = $logstore;
        $this->shardId = $shardId;
    }

    public function getLogstore(){
      return $this->logstore;
    }

    public function setLogstore($logstore){
      $this->logstore = $logstore;
    }

    public function getShardId(){
        return $this->shardId;
    }
}
