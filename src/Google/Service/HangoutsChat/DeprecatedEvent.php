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

class Google_Service_HangoutsChat_DeprecatedEvent extends Google_Collection
{
  protected $collection_key = 'formInputs';
  protected $actionType = 'Google_Service_HangoutsChat_FormAction';
  protected $actionDataType = '';
  public $configCompleteRedirectUrl;
  public $dialogEventType;
  public $eventTime;
  protected $formInputsType = 'Google_Service_HangoutsChat_FormInput';
  protected $formInputsDataType = 'array';
  public $isDialogEvent;
  protected $messageType = 'Google_Service_HangoutsChat_Message';
  protected $messageDataType = '';
  protected $spaceType = 'Google_Service_HangoutsChat_Space';
  protected $spaceDataType = '';
  public $threadKey;
  public $token;
  public $type;
  protected $userType = 'Google_Service_HangoutsChat_User';
  protected $userDataType = '';

  /**
   * @param Google_Service_HangoutsChat_FormAction
   */
  public function setAction(Google_Service_HangoutsChat_FormAction $action)
  {
    $this->action = $action;
  }
  /**
   * @return Google_Service_HangoutsChat_FormAction
   */
  public function getAction()
  {
    return $this->action;
  }
  public function setConfigCompleteRedirectUrl($configCompleteRedirectUrl)
  {
    $this->configCompleteRedirectUrl = $configCompleteRedirectUrl;
  }
  public function getConfigCompleteRedirectUrl()
  {
    return $this->configCompleteRedirectUrl;
  }
  public function setDialogEventType($dialogEventType)
  {
    $this->dialogEventType = $dialogEventType;
  }
  public function getDialogEventType()
  {
    return $this->dialogEventType;
  }
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  public function getEventTime()
  {
    return $this->eventTime;
  }
  /**
   * @param Google_Service_HangoutsChat_FormInput
   */
  public function setFormInputs($formInputs)
  {
    $this->formInputs = $formInputs;
  }
  /**
   * @return Google_Service_HangoutsChat_FormInput
   */
  public function getFormInputs()
  {
    return $this->formInputs;
  }
  public function setIsDialogEvent($isDialogEvent)
  {
    $this->isDialogEvent = $isDialogEvent;
  }
  public function getIsDialogEvent()
  {
    return $this->isDialogEvent;
  }
  /**
   * @param Google_Service_HangoutsChat_Message
   */
  public function setMessage(Google_Service_HangoutsChat_Message $message)
  {
    $this->message = $message;
  }
  /**
   * @return Google_Service_HangoutsChat_Message
   */
  public function getMessage()
  {
    return $this->message;
  }
  /**
   * @param Google_Service_HangoutsChat_Space
   */
  public function setSpace(Google_Service_HangoutsChat_Space $space)
  {
    $this->space = $space;
  }
  /**
   * @return Google_Service_HangoutsChat_Space
   */
  public function getSpace()
  {
    return $this->space;
  }
  public function setThreadKey($threadKey)
  {
    $this->threadKey = $threadKey;
  }
  public function getThreadKey()
  {
    return $this->threadKey;
  }
  public function setToken($token)
  {
    $this->token = $token;
  }
  public function getToken()
  {
    return $this->token;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  /**
   * @param Google_Service_HangoutsChat_User
   */
  public function setUser(Google_Service_HangoutsChat_User $user)
  {
    $this->user = $user;
  }
  /**
   * @return Google_Service_HangoutsChat_User
   */
  public function getUser()
  {
    return $this->user;
  }
}
