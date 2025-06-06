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

namespace Google\Service\Classroom\Resource;

use Google\Service\Classroom\ClassroomEmpty;
use Google\Service\Classroom\ListStudentsResponse;
use Google\Service\Classroom\Student;

/**
 * The "students" collection of methods.
 * Typical usage is:
 *  <code>
 *   $classroomService = new Google\Service\Classroom(...);
 *   $students = $classroomService->courses_students;
 *  </code>
 */
class CoursesStudents extends \Google\Service\Resource
{
  /**
   * Adds a user as a student of a course. Domain administrators are permitted to
   * [directly
   * add](https://developers.google.com/workspace/classroom/guides/manage-users)
   * users within their domain as students to courses within their domain.
   * Students are permitted to add themselves to a course using an enrollment
   * code. This method returns the following error codes: * `PERMISSION_DENIED` if
   * the requesting user is not permitted to create students in this course or for
   * access errors. * `NOT_FOUND` if the requested course ID does not exist. *
   * `FAILED_PRECONDITION` if the requested user's account is disabled, for the
   * following request errors: * CourseMemberLimitReached * CourseNotModifiable *
   * UserGroupsMembershipLimitReached * InactiveCourseOwner * `ALREADY_EXISTS` if
   * the user is already a student or teacher in the course. (students.create)
   *
   * @param string $courseId Identifier of the course to create the student in.
   * This identifier can be either the Classroom-assigned identifier or an alias.
   * @param Student $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string enrollmentCode Enrollment code of the course to create the
   * student in. This code is required if userId corresponds to the requesting
   * user; it may be omitted if the requesting user has administrative permissions
   * to create students for any user.
   * @return Student
   * @throws \Google\Service\Exception
   */
  public function create($courseId, Student $postBody, $optParams = [])
  {
    $params = ['courseId' => $courseId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Student::class);
  }
  /**
   * Deletes a student of a course. This method returns the following error codes:
   * * `PERMISSION_DENIED` if the requesting user is not permitted to delete
   * students of this course or for access errors. * `NOT_FOUND` if no student of
   * this course has the requested ID or if the course does not exist.
   * (students.delete)
   *
   * @param string $courseId Identifier of the course. This identifier can be
   * either the Classroom-assigned identifier or an alias.
   * @param string $userId Identifier of the student to delete. The identifier can
   * be one of the following: * the numeric identifier for the user * the email
   * address of the user * the string literal `"me"`, indicating the requesting
   * user
   * @param array $optParams Optional parameters.
   * @return ClassroomEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($courseId, $userId, $optParams = [])
  {
    $params = ['courseId' => $courseId, 'userId' => $userId];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], ClassroomEmpty::class);
  }
  /**
   * Returns a student of a course. This method returns the following error codes:
   * * `PERMISSION_DENIED` if the requesting user is not permitted to view
   * students of this course or for access errors. * `NOT_FOUND` if no student of
   * this course has the requested ID or if the course does not exist.
   * (students.get)
   *
   * @param string $courseId Identifier of the course. This identifier can be
   * either the Classroom-assigned identifier or an alias.
   * @param string $userId Identifier of the student to return. The identifier can
   * be one of the following: * the numeric identifier for the user * the email
   * address of the user * the string literal `"me"`, indicating the requesting
   * user
   * @param array $optParams Optional parameters.
   * @return Student
   * @throws \Google\Service\Exception
   */
  public function get($courseId, $userId, $optParams = [])
  {
    $params = ['courseId' => $courseId, 'userId' => $userId];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Student::class);
  }
  /**
   * Returns a list of students of this course that the requester is permitted to
   * view. This method returns the following error codes: * `NOT_FOUND` if the
   * course does not exist. * `PERMISSION_DENIED` for access errors.
   * (students.listCoursesStudents)
   *
   * @param string $courseId Identifier of the course. This identifier can be
   * either the Classroom-assigned identifier or an alias.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Maximum number of items to return. The default is 30
   * if unspecified or `0`. The server may return fewer than the specified number
   * of results.
   * @opt_param string pageToken nextPageToken value returned from a previous list
   * call, indicating that the subsequent page of results should be returned. The
   * list request must be otherwise identical to the one that resulted in this
   * token.
   * @return ListStudentsResponse
   * @throws \Google\Service\Exception
   */
  public function listCoursesStudents($courseId, $optParams = [])
  {
    $params = ['courseId' => $courseId];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListStudentsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CoursesStudents::class, 'Google_Service_Classroom_Resource_CoursesStudents');
