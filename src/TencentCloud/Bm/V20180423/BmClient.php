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

namespace TencentCloud\Bm\V20180423;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Bm\V20180423\Models as Models;

/**
* @method Models\BindPsaTagResponse BindPsaTag(Models\BindPsaTagRequest $req) 为预授权规则绑定标签
* @method Models\CreatePsaRegulationResponse CreatePsaRegulation(Models\CreatePsaRegulationRequest $req) 创建预授权规则
* @method Models\CreateSpotDeviceResponse CreateSpotDevice(Models\CreateSpotDeviceRequest $req) 创建黑石竞价实例
* @method Models\CreateUserCmdResponse CreateUserCmd(Models\CreateUserCmdRequest $req) 创建自定义脚本
* @method Models\DeletePsaRegulationResponse DeletePsaRegulation(Models\DeletePsaRegulationRequest $req) 删除预授权规则
* @method Models\DeleteUserCmdsResponse DeleteUserCmds(Models\DeleteUserCmdsRequest $req) 删除自定义脚本
* @method Models\DescribeDevicePriceInfoResponse DescribeDevicePriceInfo(Models\DescribeDevicePriceInfoRequest $req) 查询服务器价格信息，支持设备的批量查找，支持标准机型和弹性机型的混合查找
* @method Models\DescribeDevicesResponse DescribeDevices(Models\DescribeDevicesRequest $req) 查询物理服务器，可以按照实例，业务IP等过滤
* @method Models\DescribePsaRegulationsResponse DescribePsaRegulations(Models\DescribePsaRegulationsRequest $req) 获取预授权规则列表
* @method Models\DescribeRepairTaskConstantResponse DescribeRepairTaskConstant(Models\DescribeRepairTaskConstantRequest $req) 维修任务配置获取
* @method Models\DescribeTaskInfoResponse DescribeTaskInfo(Models\DescribeTaskInfoRequest $req) 获取用户维修任务列表及详细信息<br>
<br>
TaskStatus（任务状态ID）与状态中文名的对应关系如下：<br>
1：未授权<br>
2：处理中<br>
3：待确认<br>
4：未授权-暂不处理<br>
5：已恢复<br>
6：待确认-未恢复<br>
* @method Models\DescribeTaskOperationLogResponse DescribeTaskOperationLog(Models\DescribeTaskOperationLogRequest $req) 获取维修任务操作日志
* @method Models\DescribeUserCmdTaskInfoResponse DescribeUserCmdTaskInfo(Models\DescribeUserCmdTaskInfoRequest $req) 获取自定义脚本任务详细信息
* @method Models\DescribeUserCmdTasksResponse DescribeUserCmdTasks(Models\DescribeUserCmdTasksRequest $req) 获取自定义脚本任务列表
* @method Models\DescribeUserCmdsResponse DescribeUserCmds(Models\DescribeUserCmdsRequest $req) 获取自定义脚本信息列表
* @method Models\ModifyDeviceAliasesResponse ModifyDeviceAliases(Models\ModifyDeviceAliasesRequest $req) 修改服务器名称
* @method Models\ModifyPayModePre2PostResponse ModifyPayModePre2Post(Models\ModifyPayModePre2PostRequest $req) 将设备的预付费模式修改为后付费计费模式，支持批量转换。（前提是客户要加入黑石物理机后付费计费的白名单，申请黑石物理机后付费可以联系腾讯云客服）
* @method Models\ModifyPsaRegulationResponse ModifyPsaRegulation(Models\ModifyPsaRegulationRequest $req) 允许修改规则信息及关联故障类型
* @method Models\ModifyUserCmdResponse ModifyUserCmd(Models\ModifyUserCmdRequest $req) 修改自定义脚本
* @method Models\RebootDevicesResponse RebootDevices(Models\RebootDevicesRequest $req) 重启机器
* @method Models\RepairTaskControlResponse RepairTaskControl(Models\RepairTaskControlRequest $req) 此接口用于操作维修任务<br>
入参TaskId为维修任务ID<br>
入参Operate表示对维修任务的操作，支持如下取值：<br>
AuthorizeRepair（授权维修）<br>
Ignore（暂不提醒）<br>
ConfirmRecovered（维修完成后，确认故障恢复）<br>
ConfirmUnRecovered（维修完成后，确认故障未恢复）<br>
<br>
操作约束（当前任务状态(TaskStatus)->对应可执行的操作）：<br>
未授权(1)->授权维修；暂不处理<br>
暂不处理(4)->授权维修<br>
待确认(3)->确认故障恢复；确认故障未恢复<br>
未恢复(6)->确认故障恢复<br>
<br>
对于Ping不可达故障的任务，还允许：<br>
未授权->确认故障恢复<br>
暂不处理->确认故障恢复<br>
<br>
处理中与已恢复状态的任务不允许进行操作。<br>
<br>
详细信息请访问：https://cloud.tencent.com/document/product/386/18190
* @method Models\ResetDevicePasswordResponse ResetDevicePassword(Models\ResetDevicePasswordRequest $req) 重置服务器密码
* @method Models\RunUserCmdResponse RunUserCmd(Models\RunUserCmdRequest $req) 运行自定义脚本
* @method Models\UnbindPsaTagResponse UnbindPsaTag(Models\UnbindPsaTagRequest $req) 解除标签与预授权规则的绑定
 */

class BmClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "bm.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-04-23";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("bm")."\\"."V20180423\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
