<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDatabaseName() 获取回档前的原数据库名
 * @method void setDatabaseName(string $DatabaseName) 设置回档前的原数据库名
 * @method string getNewDatabaseName() 获取回档后的新数据库名
 * @method void setNewDatabaseName(string $NewDatabaseName) 设置回档后的新数据库名
 */

/**
 *用于回档的数据库名
 */
class RollbackDBName extends AbstractModel
{
    /**
     * @var string 回档前的原数据库名
     */
    public $DatabaseName;

    /**
     * @var string 回档后的新数据库名
     */
    public $NewDatabaseName;
    /**
     * @param string $DatabaseName 回档前的原数据库名
     * @param string $NewDatabaseName 回档后的新数据库名
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("NewDatabaseName",$param) and $param["NewDatabaseName"] !== null) {
            $this->NewDatabaseName = $param["NewDatabaseName"];
        }
    }
}