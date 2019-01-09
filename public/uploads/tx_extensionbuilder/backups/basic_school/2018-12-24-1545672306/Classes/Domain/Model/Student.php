<?php
namespace Jitender\BasicSchool\Domain\Model;

/***
 *
 * This file is part of the "Basic School" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * Student
 */
class Student extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * class
     *
     * @var string
     * @validate NotEmpty
     */
    protected $class = '';

    /**
     * name
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * marks
     *
     * @var string
     * @validate NotEmpty
     */
    protected $marks = '';

    /**
     * attendence
     *
     * @var string
     * @validate NotEmpty
     */
    protected $attendence = '';

    /**
     * marksRelation
     *
     * @var \Jitender\BasicSchool\Domain\Model\Teacher
     */
    protected $marksRelation = null;

    /**
     * attendenceRelation
     *
     * @var \Jitender\BasicSchool\Domain\Model\Teacher
     */
    protected $attendenceRelation = null;

    /**
     * Returns the class
     *
     * @return string $class
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets the class
     *
     * @param string $class
     * @return void
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

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
     * Returns the attendence
     *
     * @return string $attendence
     */
    public function getAttendence()
    {
        return $this->attendence;
    }

    /**
     * Sets the attendence
     *
     * @param string $attendence
     * @return void
     */
    public function setAttendence($attendence)
    {
        $this->attendence = $attendence;
    }

    /**
     * Returns the marksRelation
     *
     * @return \Jitender\BasicSchool\Domain\Model\Teacher $marksRelation
     */
    public function getMarksRelation()
    {
        return $this->marksRelation;
    }

    /**
     * Sets the marksRelation
     *
     * @param \Jitender\BasicSchool\Domain\Model\Teacher $marksRelation
     * @return void
     */
    public function setMarksRelation(\Jitender\BasicSchool\Domain\Model\Teacher $marksRelation)
    {
        $this->marksRelation = $marksRelation;
    }

    /**
     * Returns the attendenceRelation
     *
     * @return \Jitender\BasicSchool\Domain\Model\Teacher $attendenceRelation
     */
    public function getAttendenceRelation()
    {
        return $this->attendenceRelation;
    }

    /**
     * Sets the attendenceRelation
     *
     * @param \Jitender\BasicSchool\Domain\Model\Teacher $attendenceRelation
     * @return void
     */
    public function setAttendenceRelation(\Jitender\BasicSchool\Domain\Model\Teacher $attendenceRelation)
    {
        $this->attendenceRelation = $attendenceRelation;
    }
}
