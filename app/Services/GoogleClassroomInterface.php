<?php

namespace App\Services;
use App\Repositories\GcClasswork\GcClassworkRepositoryInterface;

/**
 * Interface for Google Classroom service
 */
interface GoogleClassroomInterface {

    /**
     * Course create state
     * 
     * @var string
     */
    const COURSE_CREATE_STATE = 'PROVISIONED';

    /**
     * Course work creation type
     * 
     * @var string
     */
    const COURSEWORK_TYPE = 'ASSIGNMENT';

    /**
     * Course work state when published
     * 
     * @var string
     */
    const COURSEWORK_STATE_PUBLISHED = 'PUBLISHED';

    /**
     * Active state for a course
     * 
     * @var string
     */
    const COURSE_STATE_ACTIVE = 'ACTIVE';

    /**
     * Get Google Client object
     * 
     * @return \Google_Client
     */
    public function getClient();

    /**
     * Set GcClasswork repository object
     * 
     * @param GcClassworkRepositoryInterface $gcClassworkRepository
     *
     * @return void
     */
    public function setGcClassworkObject(GcClassworkRepositoryInterface $gcClassworkRepository);

    /**
     * Get Google Classroom courses
     * 
     * @param array $params
     * @return array
     */
    public function getCourses($params);

    /**
     * Get a course by id
     * 
     * @param int $id
     * @return \Google_Service_Classroom_Course
     */
    public function getCourse($id);

    /**
     * Create a course in Google Classroom
     * 
     * @param array $data The course data
     * @return \Google_Service_Classroom_Course
     */
    public function createCourse($data);

    /**
     * Create a topic in Google Classroom
     * 
     * @param array $data The topic data
     * @return \Google_Service_Classroom_Topic
     */
    public function createTopic($data);

    /**
     * Create a course work in Google Classroom
     * 
     * @param array $data The course work data
     * @return \Google_Service_Classroom_CourseWork
     */
    public function createCourseWork($data);

    /**
     * Get Topics by course id
     * 
     * @param int $courseId The id of the course
     * @return array
     */
    public function getTopics($courseId);

    /**
     * Get or Create a topic in a course.
     * 
     * @param array $data
     * @return \Google_Service_Classroom_Topic
     */
    public function getOrCreateTopic($data);

    /**
     * Check if student is enrolled in a class
     *
     * @param int $courseId
     * @return \Google_Service_Classroom_Student
     */
    public function getEnrolledStudent($courseId);

    /**
     * Get first student's submission for a classwork in a course.
     *
     * @param int $courseId
     * @param string $classworkId
     * @param mixed $userId
     * @return string
     */
    public function getFirstStudentSubmission($courseId, $classworkId, $userId = "me");

    /**
     * Adds/modifies submission with an attachment
     *
     * @param int $courseId The course id
     * @param string $classworkId The classwork id
     * @param string $id The submission id
     * @param string $attachmentLink The URL for attachment
     * @return string
     */
    public function modifySubmissionAttachment($courseId, $courseWorkId, $id, $attachmentLink);
    
    /**
     * TurnIn an assignment
     *
     * @param int $courseId The course id
     * @param string $classworkId The classwork id
     * @param string $id The submission id
     * @return \Google_Service_Classroom_ClassroomEmpty
     */
    public function turnIn($courseId, $courseWorkId, $id);

}