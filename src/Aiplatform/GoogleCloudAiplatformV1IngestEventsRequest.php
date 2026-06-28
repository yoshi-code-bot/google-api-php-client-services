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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1IngestEventsRequest extends \Google\Model
{
  protected $directContentsSourceType = GoogleCloudAiplatformV1IngestionDirectContentsSource::class;
  protected $directContentsSourceDataType = '';
  /**
   * Optional. Forces a flush of all pending events in the stream and triggers
   * memory generation immediately bypassing any conditions configured in the
   * `generation_trigger_config`.
   *
   * @var bool
   */
  public $forceFlush;
  protected $generationTriggerConfigType = GoogleCloudAiplatformV1MemoryGenerationTriggerConfig::class;
  protected $generationTriggerConfigDataType = '';
  /**
   * Required. The scope of the memories that should be generated from the
   * stream. Memories will be consolidated across memories with the same scope.
   * Scope values cannot contain the wildcard character '*'.
   *
   * @var string[]
   */
  public $scope;
  /**
   * Optional. The ID of the stream to ingest events into. If not provided, a
   * new one will be created.
   *
   * @var string
   */
  public $streamId;

  /**
   * Ingest events directly from the request.
   *
   * @param GoogleCloudAiplatformV1IngestionDirectContentsSource $directContentsSource
   */
  public function setDirectContentsSource(GoogleCloudAiplatformV1IngestionDirectContentsSource $directContentsSource)
  {
    $this->directContentsSource = $directContentsSource;
  }
  /**
   * @return GoogleCloudAiplatformV1IngestionDirectContentsSource
   */
  public function getDirectContentsSource()
  {
    return $this->directContentsSource;
  }
  /**
   * Optional. Forces a flush of all pending events in the stream and triggers
   * memory generation immediately bypassing any conditions configured in the
   * `generation_trigger_config`.
   *
   * @param bool $forceFlush
   */
  public function setForceFlush($forceFlush)
  {
    $this->forceFlush = $forceFlush;
  }
  /**
   * @return bool
   */
  public function getForceFlush()
  {
    return $this->forceFlush;
  }
  /**
   * Optional. Configuration for triggering memory generation from this
   * ingestion. If not set, then the stream will be force flushed immediately.
   *
   * @param GoogleCloudAiplatformV1MemoryGenerationTriggerConfig $generationTriggerConfig
   */
  public function setGenerationTriggerConfig(GoogleCloudAiplatformV1MemoryGenerationTriggerConfig $generationTriggerConfig)
  {
    $this->generationTriggerConfig = $generationTriggerConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1MemoryGenerationTriggerConfig
   */
  public function getGenerationTriggerConfig()
  {
    return $this->generationTriggerConfig;
  }
  /**
   * Required. The scope of the memories that should be generated from the
   * stream. Memories will be consolidated across memories with the same scope.
   * Scope values cannot contain the wildcard character '*'.
   *
   * @param string[] $scope
   */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /**
   * @return string[]
   */
  public function getScope()
  {
    return $this->scope;
  }
  /**
   * Optional. The ID of the stream to ingest events into. If not provided, a
   * new one will be created.
   *
   * @param string $streamId
   */
  public function setStreamId($streamId)
  {
    $this->streamId = $streamId;
  }
  /**
   * @return string
   */
  public function getStreamId()
  {
    return $this->streamId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1IngestEventsRequest::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1IngestEventsRequest');
