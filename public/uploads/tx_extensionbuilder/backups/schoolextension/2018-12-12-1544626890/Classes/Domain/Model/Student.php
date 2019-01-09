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
 * Student
 */
class Student extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * studentId
     *
     * @var int
     * @validate NotEmpty
     */
    protected $studentId = 0;

    /**
     * firstName
     *
     * @var string
     */
    protected $firstName = '';

    /**
     * lastName
     *
     * @var string
     */
    protected $lastName = '';

    /**
     * dob
     *
     * @var \DateTime
     */
    protected $dob = null;

    /**
     * contact
     *
     * @var string
     */
    protected $contact = '';

    /**
     * classes
     *
     * @var \School\Schoolextension\Domain\Model\Classes
     */
    protected $classes = null;

    /**
     * Returns the studentId
     *
     * @return int $studentId
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * Sets the studentId
     *
     * @param int $studentId
     * @return void
     */
    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;
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
     * Returns the dob
     *
     * @return \DateTime $dob
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Sets the dob
     *
     * @param \DateTime $dob
     * @return void
     */
    public function setDob(\DateTime $dob)
    {
        $this->dob = $dob;
    }

    /**
     * Returns the contact
     *
     * @return string $contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets the contact
     *
     * @param string $contact
     * @return void
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
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
