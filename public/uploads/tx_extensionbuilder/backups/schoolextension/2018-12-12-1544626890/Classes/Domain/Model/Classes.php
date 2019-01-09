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
 * Classes
 */
class Classes extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * classId
     *
     * @var int
     * @validate NotEmpty
     */
    protected $classId = 0;

    /**
     * className
     *
     * @var string
     * @validate NotEmpty
     */
    protected $className = '';

    /**
     * department
     *
     * @var \School\Schoolextension\Domain\Model\Department
     */
    protected $department = null;

    /**
     * Returns the classId
     *
     * @return int $classId
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * Sets the classId
     *
     * @param int $classId
     * @return void
     */
    public function setClassId($classId)
    {
        $this->classId = $classId;
    }

    /**
     * Returns the className
     *
     * @return string $className
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * Sets the className
     *
     * @param string $className
     * @return void
     */
    public function setClassName($className)
    {
        $this->className = $className;
    }

    /**
     * Returns the department
     *
     * @return \School\Schoolextension\Domain\Model\Department $department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Sets the department
     *
     * @param \School\Schoolextension\Domain\Model\Department $department
     * @return void
     */
    public function setDepartment(\School\Schoolextension\Domain\Model\Department $department)
    {
        $this->department = $department;
    }
}
