<?php
namespace SchoolEvaluation\SchoolEvaluationKey\Domain\Repository;

use SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Student;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
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
 * The repository for Evaluations
 */
class EvaluationRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function findByStudent(Student $student)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->equals('student', $student)
        );
        return $query->execute();
    }
    }
