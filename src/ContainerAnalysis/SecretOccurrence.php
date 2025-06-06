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

namespace Google\Service\ContainerAnalysis;

class SecretOccurrence extends \Google\Collection
{
  protected $collection_key = 'statuses';
  /**
   * @var string
   */
  public $kind;
  protected $locationsType = SecretLocation::class;
  protected $locationsDataType = 'array';
  protected $statusesType = SecretStatus::class;
  protected $statusesDataType = 'array';

  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * @param SecretLocation[]
   */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /**
   * @return SecretLocation[]
   */
  public function getLocations()
  {
    return $this->locations;
  }
  /**
   * @param SecretStatus[]
   */
  public function setStatuses($statuses)
  {
    $this->statuses = $statuses;
  }
  /**
   * @return SecretStatus[]
   */
  public function getStatuses()
  {
    return $this->statuses;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SecretOccurrence::class, 'Google_Service_ContainerAnalysis_SecretOccurrence');
