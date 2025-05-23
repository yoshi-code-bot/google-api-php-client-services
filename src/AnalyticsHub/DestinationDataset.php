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

namespace Google\Service\AnalyticsHub;

class DestinationDataset extends \Google\Collection
{
  protected $collection_key = 'replicaLocations';
  protected $datasetReferenceType = DestinationDatasetReference::class;
  protected $datasetReferenceDataType = '';
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $friendlyName;
  /**
   * @var string[]
   */
  public $labels;
  /**
   * @var string
   */
  public $location;
  /**
   * @var string[]
   */
  public $replicaLocations;

  /**
   * @param DestinationDatasetReference
   */
  public function setDatasetReference(DestinationDatasetReference $datasetReference)
  {
    $this->datasetReference = $datasetReference;
  }
  /**
   * @return DestinationDatasetReference
   */
  public function getDatasetReference()
  {
    return $this->datasetReference;
  }
  /**
   * @param string
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param string
   */
  public function setFriendlyName($friendlyName)
  {
    $this->friendlyName = $friendlyName;
  }
  /**
   * @return string
   */
  public function getFriendlyName()
  {
    return $this->friendlyName;
  }
  /**
   * @param string[]
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * @param string
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * @param string[]
   */
  public function setReplicaLocations($replicaLocations)
  {
    $this->replicaLocations = $replicaLocations;
  }
  /**
   * @return string[]
   */
  public function getReplicaLocations()
  {
    return $this->replicaLocations;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DestinationDataset::class, 'Google_Service_AnalyticsHub_DestinationDataset');
