<?php
namespace SchoolEvaluation\SchoolEvaluationKey\Domain\Model;

/***
 *
 * This file is part of the "school_evaluation" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019
 *
 ***/

/**
 * Attendance
 */
class Attendance extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * date
     *
     * @var \DateTime
     */
    protected $date = null;

    /**
     * student
     *
     * @var \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Student
     */
    protected $student = null;

    /**
     * teacher
     *
     * @var \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Teacher
     */
    protected $teacher = null;

    /**
     * Returns the date
     *
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     *
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * Returns the student
     *
     * @return \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Student $student
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Sets the student
     *
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Student $student
     * @return void
     */
    public function setStudent(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Student $student)
    {
        $this->student = $student;
    }

    /**
     * Returns the teacher
     *
     * @return \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Teacher $teacher
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * Sets the teacher
     *
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Teacher $teacher
     * @return void
     */
    public function setTeacher(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Teacher $teacher)
    {
        $this->teacher = $teacher;
    }
}
