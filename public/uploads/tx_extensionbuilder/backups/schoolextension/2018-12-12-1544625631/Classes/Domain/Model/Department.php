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
 * Department
 */
class Department extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * departmentId
     *
     * @var int
     * @validate NotEmpty
     */
    protected $departmentId = 0;

    /**
     * departmentName
     *
     * @var string
     * @validate NotEmpty
     */
    protected $departmentName = '';

    /**
     * Returns the departmentId
     *
     * @return int $departmentId
     */
    public function getDepartmentId()
    {
        return $this->departmentId;
    }

    /**
     * Sets the departmentId
     *
     * @param int $departmentId
     * @return void
     */
    public function setDepartmentId($departmentId)
    {
        $this->departmentId = $departmentId;
    }

    /**
     * Returns the departmentName
     *
     * @return string $departmentName
     */
    public function getDepartmentName()
    {
        return $this->departmentName;
    }

    /**
     * Sets the departmentName
     *
     * @param string $departmentName
     * @return void
     */
    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;
    }
}
