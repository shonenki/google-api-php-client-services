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
 * The "people" collection of methods.
 * Typical usage is:
 *  <code>
 *   $peopleService = new Google_Service_PeopleService(...);
 *   $people = $peopleService->people;
 *  </code>
 */
class Google_Service_PeopleService_Resource_People extends Google_Service_Resource
{
  /**
   * Provides information about a person by specifying a resource name. Use
   * `people/me` to indicate the authenticated user. (people.get)
   *
   * @param string $resourceName The resource name of the person to provide
   * information about.
   *
   * - To get information about the authenticated user, specify `people/me`. - To
   * get information about any user, specify the resource name that   identifies
   * the user, such as the resource names returned by
   * [`people.connections.list`](/people/api/rest/v1/people.connections/list).
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestMask.includeField Required. Comma-separated list of
   * person fields to be included in the response. Each path should start with
   * `person.`: for example, `person.names` or `person.photos`.
   * @return Google_Service_PeopleService_Person
   */
  public function get($resourceName, $optParams = array())
  {
    $params = array('resourceName' => $resourceName);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_PeopleService_Person");
  }
  /**
   * Provides information about a list of specific people by specifying a list of
   * requested resource names. Use `people/me` to indicate the authenticated user.
   * (people.getBatchGet)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestMask.includeField Required. Comma-separated list of
   * person fields to be included in the response. Each path should start with
   * `person.`: for example, `person.names` or `person.photos`.
   * @opt_param string resourceNames The resource name, such as one returned by
   * [`people.connections.list`](/people/api/rest/v1/people.connections/list), of
   * one of the people to provide information about. You can include this
   * parameter up to 50 times in one request.
   * @return Google_Service_PeopleService_GetPeopleResponse
   */
  public function getBatchGet($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('getBatchGet', array($params), "Google_Service_PeopleService_GetPeopleResponse");
  }
}
