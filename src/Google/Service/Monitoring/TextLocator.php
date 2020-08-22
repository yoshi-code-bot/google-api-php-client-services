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

class Google_Service_Monitoring_TextLocator extends Google_Model
{
  protected $endPositionType = 'Google_Service_Monitoring_Position';
  protected $endPositionDataType = '';
  protected $nestedLocatorType = 'Google_Service_Monitoring_TextLocator';
  protected $nestedLocatorDataType = '';
  public $nestingReason;
  public $source;
  protected $startPositionType = 'Google_Service_Monitoring_Position';
  protected $startPositionDataType = '';

  /**
   * @param Google_Service_Monitoring_Position
   */
  public function setEndPosition(Google_Service_Monitoring_Position $endPosition)
  {
    $this->endPosition = $endPosition;
  }
  /**
   * @return Google_Service_Monitoring_Position
   */
  public function getEndPosition()
  {
    return $this->endPosition;
  }
  /**
   * @param Google_Service_Monitoring_TextLocator
   */
  public function setNestedLocator(Google_Service_Monitoring_TextLocator $nestedLocator)
  {
    $this->nestedLocator = $nestedLocator;
  }
  /**
   * @return Google_Service_Monitoring_TextLocator
   */
  public function getNestedLocator()
  {
    return $this->nestedLocator;
  }
  public function setNestingReason($nestingReason)
  {
    $this->nestingReason = $nestingReason;
  }
  public function getNestingReason()
  {
    return $this->nestingReason;
  }
  public function setSource($source)
  {
    $this->source = $source;
  }
  public function getSource()
  {
    return $this->source;
  }
  /**
   * @param Google_Service_Monitoring_Position
   */
  public function setStartPosition(Google_Service_Monitoring_Position $startPosition)
  {
    $this->startPosition = $startPosition;
  }
  /**
   * @return Google_Service_Monitoring_Position
   */
  public function getStartPosition()
  {
    return $this->startPosition;
  }
}
