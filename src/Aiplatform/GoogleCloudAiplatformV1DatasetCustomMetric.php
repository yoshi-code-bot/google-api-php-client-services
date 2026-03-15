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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1DatasetCustomMetric extends \Google\Model
{
  /**
   * Optional. A display name for this custom summary metric. Used to prefix
   * keys in the output summaryMetrics map. If not provided, a default name like
   * "dataset_custom_metric_1", "dataset_custom_metric_2", etc., will be
   * generated based on the order in the repeated field.
   *
   * @var string
   */
  public $displayName;

  /**
   * Optional. A display name for this custom summary metric. Used to prefix
   * keys in the output summaryMetrics map. If not provided, a default name like
   * "dataset_custom_metric_1", "dataset_custom_metric_2", etc., will be
   * generated based on the order in the repeated field.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1DatasetCustomMetric::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1DatasetCustomMetric');
