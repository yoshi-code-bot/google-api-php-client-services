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

namespace Google\Service\Safebrowsing;

class GoogleSecuritySafebrowsingV5HashListMetadata extends \Google\Collection
{
  protected $collection_key = 'threatTypes';
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $hashLength;
  /**
   * @var string[]
   */
  public $likelySafeTypes;
  /**
   * @var string[]
   */
  public $threatTypes;

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
  public function setHashLength($hashLength)
  {
    $this->hashLength = $hashLength;
  }
  /**
   * @return string
   */
  public function getHashLength()
  {
    return $this->hashLength;
  }
  /**
   * @param string[]
   */
  public function setLikelySafeTypes($likelySafeTypes)
  {
    $this->likelySafeTypes = $likelySafeTypes;
  }
  /**
   * @return string[]
   */
  public function getLikelySafeTypes()
  {
    return $this->likelySafeTypes;
  }
  /**
   * @param string[]
   */
  public function setThreatTypes($threatTypes)
  {
    $this->threatTypes = $threatTypes;
  }
  /**
   * @return string[]
   */
  public function getThreatTypes()
  {
    return $this->threatTypes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleSecuritySafebrowsingV5HashListMetadata::class, 'Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV5HashListMetadata');
