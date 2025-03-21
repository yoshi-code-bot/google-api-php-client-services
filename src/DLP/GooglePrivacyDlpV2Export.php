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

namespace Google\Service\DLP;

class GooglePrivacyDlpV2Export extends \Google\Model
{
  protected $profileTableType = GooglePrivacyDlpV2BigQueryTable::class;
  protected $profileTableDataType = '';
  protected $sampleFindingsTableType = GooglePrivacyDlpV2BigQueryTable::class;
  protected $sampleFindingsTableDataType = '';

  /**
   * @param GooglePrivacyDlpV2BigQueryTable
   */
  public function setProfileTable(GooglePrivacyDlpV2BigQueryTable $profileTable)
  {
    $this->profileTable = $profileTable;
  }
  /**
   * @return GooglePrivacyDlpV2BigQueryTable
   */
  public function getProfileTable()
  {
    return $this->profileTable;
  }
  /**
   * @param GooglePrivacyDlpV2BigQueryTable
   */
  public function setSampleFindingsTable(GooglePrivacyDlpV2BigQueryTable $sampleFindingsTable)
  {
    $this->sampleFindingsTable = $sampleFindingsTable;
  }
  /**
   * @return GooglePrivacyDlpV2BigQueryTable
   */
  public function getSampleFindingsTable()
  {
    return $this->sampleFindingsTable;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2Export::class, 'Google_Service_DLP_GooglePrivacyDlpV2Export');
