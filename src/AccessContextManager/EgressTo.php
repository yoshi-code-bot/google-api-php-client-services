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

namespace Google\Service\AccessContextManager;

class EgressTo extends \Google\Collection
{
  protected $collection_key = 'roles';
  /**
   * @var string[]
   */
  public $externalResources;
  protected $operationsType = ApiOperation::class;
  protected $operationsDataType = 'array';
  /**
   * @var string[]
   */
  public $resources;
  /**
   * @var string[]
   */
  public $roles;

  /**
   * @param string[]
   */
  public function setExternalResources($externalResources)
  {
    $this->externalResources = $externalResources;
  }
  /**
   * @return string[]
   */
  public function getExternalResources()
  {
    return $this->externalResources;
  }
  /**
   * @param ApiOperation[]
   */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /**
   * @return ApiOperation[]
   */
  public function getOperations()
  {
    return $this->operations;
  }
  /**
   * @param string[]
   */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /**
   * @return string[]
   */
  public function getResources()
  {
    return $this->resources;
  }
  /**
   * @param string[]
   */
  public function setRoles($roles)
  {
    $this->roles = $roles;
  }
  /**
   * @return string[]
   */
  public function getRoles()
  {
    return $this->roles;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EgressTo::class, 'Google_Service_AccessContextManager_EgressTo');
