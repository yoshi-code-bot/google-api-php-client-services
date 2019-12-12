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

/**
 * The "brands" collection of methods.
 * Typical usage is:
 *  <code>
 *   $iapService = new Google_Service_CloudIAP(...);
 *   $brands = $iapService->brands;
 *  </code>
 */
class Google_Service_CloudIAP_Resource_OauthProjectsBrands extends Google_Service_Resource
{
  /**
   * Constructs a new OAuth brand for the project if one does not exists. The
   * created brand is 'internal only', meaning that OAuth clients created under it
   * only accept requests from users who belong to the same GSuites account as the
   * project. The brand is created in un-reviewed status. NOTE: the
   * 'internal_only' can be manually changed in Pantheon UI. Requires that brand
   * does not already exists for the project. (brands.create)
   *
   * @param string $parent Required. GCP Project number/id under which the brand
   * is to be created. In the following format: projects/{project_number/id}.
   * @param Google_Service_CloudIAP_Brand $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIAP_Brand
   */
  public function create($parent, Google_Service_CloudIAP_Brand $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudIAP_Brand");
  }
  /**
   * Retrieves the OAuth brand of the project. (brands.get)
   *
   * @param string $name Required. Name of the brand to be fetched. In the
   * following format: projects/{project_number/id}/brands/{brand}.
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIAP_Brand
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudIAP_Brand");
  }
  /**
   * Lists the existing brands for the project. (brands.listOauthProjectsBrands)
   *
   * @param string $parent Required. GCP Project number/id. In the following
   * format: projects/{project_number/id}.
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIAP_ListBrandsResponse
   */
  public function listOauthProjectsBrands($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudIAP_ListBrandsResponse");
  }
}
