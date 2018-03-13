<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Response;

/**
 * The response of the GetLog API from log service.
 *
 * @author log service dev
 */
class ApplyConfigToMachineGroupResponse extends Response {

    /**
     * ApplyConfigToMachineGroupResponse constructor.
     *
     * @param $header
     */
    public function __construct($header) {
        parent::__construct ( $header );
    }
   

}
