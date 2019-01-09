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
 * Teacher
 */
class Teacher extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * teacherId
     *
     * @var int
     * @validate NotEmpty
     */
    protected $teacherId = 0;

    /**
     * firstName
     *
     * @var string
     * @validate NotEmpty
     */
    protected $firstName = '';

    /**
     * lastName
     *
     * @var string
     */
    protected $lastName = '';

    /**
     * mailId
     *
     * @var string
     * @validate NotEmpty
     */
    protected $mailId = '';

    /**
     * aboutMe
     *
     * @var string
     */
    protected $aboutMe = '';

    /**
     * department
     *
     * @var \School\Schoolextension\Domain\Model\Department
     */
    protected $department = null;

    /**
     * classes
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\School\Schoolextension\Domain\Model\Classes>
     * @cascade remove
     */
    protected $classes = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->classes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the teacherId
     *
     * @return int $teacherId
     */
    public function getTeacherId()
    {
        return $this->teacherId;
    }

    /**
     * Sets the teacherId
     *
     * @param int $teacherId
     * @return void
     */
    public function setTeacherId($teacherId)
    {
        $this->teacherId = $teacherId;
    }

    /**
     * Returns the firstName
     *
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets the firstName
     *
     * @param string $firstName
     * @return void
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns the lastName
     *
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets the lastName
     *
     * @param string $lastName
     * @return void
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns the mailId
     *
     * @return string $mailId
     */
    public function getMailId()
    {
        return $this->mailId;
    }

    /**
     * Sets the mailId
     *
     * @param string $mailId
     * @return void
     */
    public function setMailId($mailId)
    {
        $this->mailId = $mailId;
    }

    /**
     * Returns the aboutMe
     *
     * @return string $aboutMe
     */
    public function getAboutMe()
    {
        return $this->aboutMe;
    }

    /**
     * Sets the aboutMe
     *
     * @param string $aboutMe
     * @return void
     */
    public function setAboutMe($aboutMe)
    {
        $this->aboutMe = $aboutMe;
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

    /**
     * Adds a Classes
     *
     * @param \School\Schoolextension\Domain\Model\Classes $class
     * @return void
     */
    public function addClass(\School\Schoolextension\Domain\Model\Classes $class)
    {
        $this->classes->attach($class);
    }

    /**
     * Removes a Classes
     *
     * @param \School\Schoolextension\Domain\Model\Classes $classToRemove The Classes to be removed
     * @return void
     */
    public function removeClass(\School\Schoolextension\Domain\Model\Classes $classToRemove)
    {
        $this->classes->detach($classToRemove);
    }

    /**
     * Returns the classes
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\School\Schoolextension\Domain\Model\Classes> $classes
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * Sets the classes
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\School\Schoolextension\Domain\Model\Classes> $classes
     * @return void
     */
    public function setClasses(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $classes)
    {
        $this->classes = $classes;
    }
}
