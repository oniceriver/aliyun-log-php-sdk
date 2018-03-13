<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * Class ListShardsRequest
 * @package Aliyun\Log\Models\Request
 */
class ListShardsRequest extends Request {

    private $logstore;

    /**
     * ListShardsRequest constructor.
     *
     * @param string $project
     * @param        $logstore
     */
    public function __construct($project,$logstore) {
        parent::__construct ( $project );
        $this->logstore = $logstore;
    }

    public function getLogstore(){
      return $this->logstore;
    }

    public function setLogstore($logstore){
      $this->logstore = $logstore;
    }
    
    
}
