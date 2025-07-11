<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateRecordBackupPlan请求参数结构体
 *
 * @method string getPlanId() 获取计划ID
 * @method void setPlanId(string $PlanId) 设置计划ID
 * @method UpdateRecordBackupPlanModify getMod() 获取修改的内容
 * @method void setMod(UpdateRecordBackupPlanModify $Mod) 设置修改的内容
 */
class UpdateRecordBackupPlanRequest extends AbstractModel
{
    /**
     * @var string 计划ID
     */
    public $PlanId;

    /**
     * @var UpdateRecordBackupPlanModify 修改的内容
     */
    public $Mod;

    /**
     * @param string $PlanId 计划ID
     * @param UpdateRecordBackupPlanModify $Mod 修改的内容
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("Mod",$param) and $param["Mod"] !== null) {
            $this->Mod = new UpdateRecordBackupPlanModify();
            $this->Mod->deserialize($param["Mod"]);
        }
    }
}
