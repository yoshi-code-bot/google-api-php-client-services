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
 * The "v1" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudassetService = new Google_Service_CloudAsset(...);
 *   $v1 = $cloudassetService->v1;
 *  </code>
 */
class Google_Service_CloudAsset_Resource_V1 extends Google_Service_Resource
{
  /**
   * Batch gets the update history of assets that overlap a time window. For
   * IAM_POLICY content, this API outputs history when the asset and its attached
   * IAM POLICY both exist. This can create gaps in the output history. Otherwise,
   * this API outputs history with asset in both non-delete or deleted status. If
   * a specified asset does not exist, this API returns an INVALID_ARGUMENT error.
   * (v1.batchGetAssetsHistory)
   *
   * @param string $parent Required. The relative name of the root asset. It can
   * only be an organization number (such as "organizations/123"), a project ID
   * (such as "projects/my-project-id")", or a project number (such as
   * "projects/12345").
   * @param array $optParams Optional parameters.
   *
   * @opt_param string contentType Optional. The content type.
   * @opt_param string readTimeWindow.startTime Start time of the time window
   * (exclusive).
   * @opt_param string readTimeWindow.endTime End time of the time window
   * (inclusive). If not specified, the current timestamp is used instead.
   * @opt_param string assetNames A list of the full names of the assets. See:
   * https://cloud.google.com/asset-inventory/docs/resource-name-format Example:
   *
   * `//compute.googleapis.com/projects/my_project_123/zones/zone1/instances/insta
   * nce1`.
   *
   * The request becomes a no-op if the asset name list is empty, and the max size
   * of the asset name list is 100 in one request.
   * @return Google_Service_CloudAsset_BatchGetAssetsHistoryResponse
   */
  public function batchGetAssetsHistory($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('batchGetAssetsHistory', array($params), "Google_Service_CloudAsset_BatchGetAssetsHistoryResponse");
  }
  /**
   * Exports assets with time and resource types to a given Cloud Storage
   * location/BigQuery table. For Cloud Storage location destinations, the output
   * format is newline-delimited JSON. Each line represents a
   * google.cloud.asset.v1.Asset in the JSON format; for BigQuery table
   * destinations, the output table stores the fields in asset proto as columns.
   * This API implements the google.longrunning.Operation API , which allows you
   * to keep track of the export. We recommend intervals of at least 2 seconds
   * with exponential retry to poll the export operation result. For regular-size
   * resource parent, the export operation usually finishes within 5 minutes.
   * (v1.exportAssets)
   *
   * @param string $parent Required. The relative name of the root asset. This can
   * only be an organization number (such as "organizations/123"), a project ID
   * (such as "projects/my-project-id"), or a project number (such as
   * "projects/12345"), or a folder number (such as "folders/123").
   * @param Google_Service_CloudAsset_ExportAssetsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudAsset_Operation
   */
  public function exportAssets($parent, Google_Service_CloudAsset_ExportAssetsRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('exportAssets', array($params), "Google_Service_CloudAsset_Operation");
  }
}
