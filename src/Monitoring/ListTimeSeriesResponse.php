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

namespace Google\Service\Monitoring;

class ListTimeSeriesResponse extends \Google\Collection
{
  protected $collection_key = 'unreachable';
  protected $executionErrorsType = Status::class;
  protected $executionErrorsDataType = 'array';
  /**
   * @var string
   */
  public $nextPageToken;
  protected $timeSeriesType = TimeSeries::class;
  protected $timeSeriesDataType = 'array';
  /**
   * @var string
   */
  public $unit;
  /**
   * @var string[]
   */
  public $unreachable;

  /**
   * @param Status[]
   */
  public function setExecutionErrors($executionErrors)
  {
    $this->executionErrors = $executionErrors;
  }
  /**
   * @return Status[]
   */
  public function getExecutionErrors()
  {
    return $this->executionErrors;
  }
  /**
   * @param string
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /**
   * @param TimeSeries[]
   */
  public function setTimeSeries($timeSeries)
  {
    $this->timeSeries = $timeSeries;
  }
  /**
   * @return TimeSeries[]
   */
  public function getTimeSeries()
  {
    return $this->timeSeries;
  }
  /**
   * @param string
   */
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /**
   * @return string
   */
  public function getUnit()
  {
    return $this->unit;
  }
  /**
   * @param string[]
   */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /**
   * @return string[]
   */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListTimeSeriesResponse::class, 'Google_Service_Monitoring_ListTimeSeriesResponse');
