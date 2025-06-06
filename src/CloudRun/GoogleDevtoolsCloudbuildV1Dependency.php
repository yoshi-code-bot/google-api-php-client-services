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

namespace Google\Service\CloudRun;

class GoogleDevtoolsCloudbuildV1Dependency extends \Google\Model
{
  /**
   * @var bool
   */
  public $empty;
  protected $gitSourceType = GoogleDevtoolsCloudbuildV1GitSourceDependency::class;
  protected $gitSourceDataType = '';

  /**
   * @param bool
   */
  public function setEmpty($empty)
  {
    $this->empty = $empty;
  }
  /**
   * @return bool
   */
  public function getEmpty()
  {
    return $this->empty;
  }
  /**
   * @param GoogleDevtoolsCloudbuildV1GitSourceDependency
   */
  public function setGitSource(GoogleDevtoolsCloudbuildV1GitSourceDependency $gitSource)
  {
    $this->gitSource = $gitSource;
  }
  /**
   * @return GoogleDevtoolsCloudbuildV1GitSourceDependency
   */
  public function getGitSource()
  {
    return $this->gitSource;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleDevtoolsCloudbuildV1Dependency::class, 'Google_Service_CloudRun_GoogleDevtoolsCloudbuildV1Dependency');
