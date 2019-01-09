<?php
namespace School\Schoolextension\Domain\Model;

/***
 *
 * This file is part of the "school_extension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * Mark
 */
class Mark extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * marks
     *
     * @var float
     * @validate NotEmpty
     */
    protected $marks = 0.0;

    /**
     * student
     *
     * @var \School\Schoolextension\Domain\Model\Student
     */
    protected $student = null;

    /**
     * classes
     *
     * @var \School\Schoolextension\Domain\Model\Classes
     */
    protected $classes = null;

    /**
     * Returns the marks
     *
     * @return float $marks
     */
    public function getMarks()
    {
        return $this->marks;
    }

    /**
     * Sets the marks
     *
     * @param float $marks
     * @return void
     */
    public function setMarks($marks)
    {
        $this->marks = $marks;
    }

    /**
     * Returns the student
     *
     * @return \School\Schoolextension\Domain\Model\Student $student
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Sets the student
     *
     * @param \School\Schoolextension\Domain\Model\Student $student
     * @return void
     */
    public function setStudent(\School\Schoolextension\Domain\Model\Student $student)
    {
        $this->student = $student;
    }

    /**
     * Returns the classes
     *
     * @return \School\Schoolextension\Domain\Model\Classes $classes
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * Sets the classes
     *
     * @param \School\Schoolextension\Domain\Model\Classes $classes
     * @return void
     */
    public function setClasses(\School\Schoolextension\Domain\Model\Classes $classes)
    {
        $this->classes = $classes;
    }
}
