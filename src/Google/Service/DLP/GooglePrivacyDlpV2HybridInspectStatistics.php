<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_DLP_GooglePrivacyDlpV2HybridInspectStatistics extends Google_Model
{
  public $hybridRequestsAborted;
  public $hybridRequestsPending;
  public $hybridRequestsProcessed;

  public function setHybridRequestsAborted($hybridRequestsAborted)
  {
    $this->hybridRequestsAborted = $hybridRequestsAborted;
  }
  public function getHybridRequestsAborted()
  {
    return $this->hybridRequestsAborted;
  }
  public function setHybridRequestsPending($hybridRequestsPending)
  {
    $this->hybridRequestsPending = $hybridRequestsPending;
  }
  public function getHybridRequestsPending()
  {
    return $this->hybridRequestsPending;
  }
  public function setHybridRequestsProcessed($hybridRequestsProcessed)
  {
    $this->hybridRequestsProcessed = $hybridRequestsProcessed;
  }
  public function getHybridRequestsProcessed()
  {
    return $this->hybridRequestsProcessed;
  }
}
