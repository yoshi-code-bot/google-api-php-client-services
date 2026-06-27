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

namespace Google\Service\CloudSupport\Resource;

use Google\Service\CloudSupport\ListSupportEventSubscriptionsResponse;
use Google\Service\CloudSupport\SupportEventSubscription;
use Google\Service\CloudSupport\UndeleteSupportEventSubscriptionRequest;

/**
 * The "supportEventSubscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudsupportService = new Google\Service\CloudSupport(...);
 *   $supportEventSubscriptions = $cloudsupportService->supportEventSubscriptions;
 *  </code>
 */
class SupportEventSubscriptions extends \Google\Service\Resource
{
  /**
   * Creates a support event subscription for an organization.
   * (supportEventSubscriptions.create)
   *
   * @param string $parent Required. The parent resource name where the support
   * event subscription will be created. Format: organizations/{organization_id}
   * @param SupportEventSubscription $postBody
   * @param array $optParams Optional parameters.
   * @return SupportEventSubscription
   * @throws \Google\Service\Exception
   */
  public function create($parent, SupportEventSubscription $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], SupportEventSubscription::class);
  }
  /**
   * Soft deletes a support event subscription. (supportEventSubscriptions.delete)
   *
   * @param string $name Required. The name of the support event subscription to
   * delete. Format:
   * organizations/{organization_id}/supportEventSubscriptions/{subscription_id}
   * @param array $optParams Optional parameters.
   * @return SupportEventSubscription
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], SupportEventSubscription::class);
  }
  /**
   * Gets a support event subscription. (supportEventSubscriptions.get)
   *
   * @param string $name Required. The name of the support event subscription to
   * retrieve. Format:
   * organizations/{organization_id}/supportEventSubscriptions/{subscription_id}
   * @param array $optParams Optional parameters.
   * @return SupportEventSubscription
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], SupportEventSubscription::class);
  }
  /**
   * Lists support event subscriptions.
   * (supportEventSubscriptions.listSupportEventSubscriptions)
   *
   * @param string $parent Required. The fully qualified name of the Cloud
   * resource to list support event subscriptions under. Format:
   * organizations/{organization_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter expression based on AIP-160.
   * Supported fields: - pub_sub_topic - state Examples: -
   * `pub_sub_topic="projects/example-project/topics/example-topic"` -
   * `state=WORKING` - `pub_sub_topic="projects/example-project/topics/example-
   * topic" AND state=WORKING`
   * @opt_param int pageSize Optional. The maximum number of support event
   * subscriptions to return.
   * @opt_param string pageToken Optional. A token identifying the page of results
   * to return. If unspecified, the first page is retrieved. When paginating, all
   * other parameters provided to `ListSupportEventSubscriptions` must match the
   * call that provided the page token.
   * @opt_param bool showDeleted Optional. Whether to show deleted subscriptions.
   * By default, deleted subscriptions are not returned.
   * @return ListSupportEventSubscriptionsResponse
   * @throws \Google\Service\Exception
   */
  public function listSupportEventSubscriptions($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListSupportEventSubscriptionsResponse::class);
  }
  /**
   * Updates a support event subscription. (supportEventSubscriptions.patch)
   *
   * @param string $name Identifier. The resource name of the support event
   * subscription.
   * @param SupportEventSubscription $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The list of fields to update. The only
   * supported value is pub_sub_topic.
   * @return SupportEventSubscription
   * @throws \Google\Service\Exception
   */
  public function patch($name, SupportEventSubscription $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], SupportEventSubscription::class);
  }
  /**
   * Undeletes a support event subscription. (supportEventSubscriptions.undelete)
   *
   * @param string $name Required. The name of the support event subscription to
   * undelete. Format:
   * organizations/{organization_id}/supportEventSubscriptions/{subscription_id}
   * @param UndeleteSupportEventSubscriptionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return SupportEventSubscription
   * @throws \Google\Service\Exception
   */
  public function undelete($name, UndeleteSupportEventSubscriptionRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('undelete', [$params], SupportEventSubscription::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SupportEventSubscriptions::class, 'Google_Service_CloudSupport_Resource_SupportEventSubscriptions');
