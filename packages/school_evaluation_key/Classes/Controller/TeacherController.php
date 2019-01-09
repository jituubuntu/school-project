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
 * TeacherController
 */
class TeacherController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * teacherRepository
     *
     * @var \SchoolEvaluation\SchoolEvaluationKey\Domain\Repository\TeacherRepository
     * @inject
     */
    protected $teacherRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $teachers = $this->teacherRepository->findAll();
        $this->view->assign('teachers', $teachers);
    }
    /*
     * Added on
     */
    public function addmarksAction()
    {
        $teachers = $this->teacherRepository->findAll();
        $this->view->assign('teachers', $teachers);
    }

    /*
         * Added on
         */
    public function addAttendenceAction()
    {
        $teachers = $this->teacherRepository->findAll();
        $this->view->assign('teachers', $teachers);
    }


    /**
     * action show
     *
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Teacher $teacher
     * @return void
     */
    public function showAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Teacher $teacher)
    {
        $this->view->assign('teacher', $teacher);
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
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Teacher $newTeacher
     * @return void
     */
    public function createAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Teacher $newTeacher)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->teacherRepository->add($newTeacher);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Teacher $teacher
     * @ignorevalidation $teacher
     * @return void
     */
    public function editAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Teacher $teacher)
    {
        $this->view->assign('teacher', $teacher);
    }

    /**
     * action update
     *
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Teacher $teacher
     * @return void
     */
    public function updateAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Teacher $teacher)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->teacherRepository->update($teacher);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Teacher $teacher
     * @return void
     */
    public function deleteAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Teacher $teacher)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->teacherRepository->remove($teacher);
        $this->redirect('list');
    }
}
