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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getModule() 获取模块
 * @method void setModule(string $Module) 设置模块
 * @method string getOperation() 获取操作
 * @method void setOperation(string $Operation) 设置操作
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getAccountNum() 获取案件编号
 * @method void setAccountNum(string $AccountNum) 设置案件编号
 * @method string getCalledPhone() 获取被叫号码
 * @method void setCalledPhone(string $CalledPhone) 设置被叫号码
 * @method string getStartBizDate() 获取查询起始日期
 * @method void setStartBizDate(string $StartBizDate) 设置查询起始日期
 * @method string getEndBizDate() 获取查询结束日期
 * @method void setEndBizDate(string $EndBizDate) 设置查询结束日期
 * @method string getOffset() 获取分页参数，索引，从0开始
 * @method void setOffset(string $Offset) 设置分页参数，索引，从0开始
 * @method string getLimit() 获取分页参数，页长
 * @method void setLimit(string $Limit) 设置分页参数，页长
 */

/**
 *DescribeRecords请求参数结构体
 */
class DescribeRecordsRequest extends AbstractModel
{
    /**
     * @var string 模块
     */
    public $Module;

    /**
     * @var string 操作
     */
    public $Operation;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 案件编号
     */
    public $AccountNum;

    /**
     * @var string 被叫号码
     */
    public $CalledPhone;

    /**
     * @var string 查询起始日期
     */
    public $StartBizDate;

    /**
     * @var string 查询结束日期
     */
    public $EndBizDate;

    /**
     * @var string 分页参数，索引，从0开始
     */
    public $Offset;

    /**
     * @var string 分页参数，页长
     */
    public $Limit;
    /**
     * @param string $Module 模块
     * @param string $Operation 操作
     * @param string $ProductId 产品ID
     * @param string $AccountNum 案件编号
     * @param string $CalledPhone 被叫号码
     * @param string $StartBizDate 查询起始日期
     * @param string $EndBizDate 查询结束日期
     * @param string $Offset 分页参数，索引，从0开始
     * @param string $Limit 分页参数，页长
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("AccountNum",$param) and $param["AccountNum"] !== null) {
            $this->AccountNum = $param["AccountNum"];
        }

        if (array_key_exists("CalledPhone",$param) and $param["CalledPhone"] !== null) {
            $this->CalledPhone = $param["CalledPhone"];
        }

        if (array_key_exists("StartBizDate",$param) and $param["StartBizDate"] !== null) {
            $this->StartBizDate = $param["StartBizDate"];
        }

        if (array_key_exists("EndBizDate",$param) and $param["EndBizDate"] !== null) {
            $this->EndBizDate = $param["EndBizDate"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
