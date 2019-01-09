<?php
namespace SchoolEvaluation\SchoolEvaluationKey\Controller;

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
 * StudentController
 */
class StudentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * studentRepository
     *
     * @var \SchoolEvaluation\SchoolEvaluationKey\Domain\Repository\StudentRepository
     * @inject
     */
    protected $studentRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $students = $this->studentRepository->findAll();
        $this->view->assign('students', $students);
    }

    /**
     * action show
     *
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Student $student
     * @return void
     */
    public function showAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Student $student)
    {
        $this->view->assign('student', $student);
    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Student $newStudent
     * @return void
     */
    public function createAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Student $newStudent)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->studentRepository->add($newStudent);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Student $student
     * @ignorevalidation $student
     * @return void
     */
    public function editAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Student $student)
    {
        $this->view->assign('student', $student);
    }

    /**
     * action update
     *
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Student $student
     * @return void
     */
    public function updateAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Student $student)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->studentRepository->update($student);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Student $student
     * @return void
     */
    public function deleteAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Student $student)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->studentRepository->remove($student);
        $this->redirect('list');
    }
}
