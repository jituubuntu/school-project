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
 * Teacher
 */
class Teacher extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
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
     * email
     *
     * @var string
     */
    protected $email = '';

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
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}
