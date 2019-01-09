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
 * Evaluation
 */
class Evaluation extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * marks
     *
     * @var string
     */
    protected $marks = '';

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
     * Returns the marks
     *
     * @return string $marks
     */
    public function getMarks()
    {
        return $this->marks;
    }

    /**
     * Sets the marks
     *
     * @param string $marks
     * @return void
     */
    public function setMarks($marks)
    {
        $this->marks = $marks;
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
