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
}
