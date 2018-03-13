<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */
namespace Aliyun\Log\Models;
class OssShipperJsonStorage extends OssShipperStorage{

    public function to_json_object(){
        return array();
    }
}