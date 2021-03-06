<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getMarketType() 获取市场选项类型，当前只支持取值：spot
 * @method void setMarketType(string $MarketType) 设置市场选项类型，当前只支持取值：spot
 * @method SpotMarketOptions getSpotOptions() 获取竞价相关选项
 * @method void setSpotOptions(SpotMarketOptions $SpotOptions) 设置竞价相关选项
 */

/**
 *竞价请求相关选项
 */
class InstanceMarketOptionsRequest extends AbstractModel
{
    /**
     * @var string 市场选项类型，当前只支持取值：spot
     */
    public $MarketType;

    /**
     * @var SpotMarketOptions 竞价相关选项
     */
    public $SpotOptions;
    /**
     * @param string $MarketType 市场选项类型，当前只支持取值：spot
     * @param SpotMarketOptions $SpotOptions 竞价相关选项
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("MarketType",$param) and $param["MarketType"] !== null) {
            $this->MarketType = $param["MarketType"];
        }

        if (array_key_exists("SpotOptions",$param) and $param["SpotOptions"] !== null) {
            $this->SpotOptions = new SpotMarketOptions();
            $this->SpotOptions->deserialize($param["SpotOptions"]);
        }
    }
}
