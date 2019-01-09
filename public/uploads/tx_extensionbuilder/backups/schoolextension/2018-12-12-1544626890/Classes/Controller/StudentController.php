<?php
namespace School\Schoolextension\Controller;

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
 * StudentController
 */
class StudentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * studentRepository
     *
     * @var \School\Schoolextension\Domain\Repository\StudentRepository
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
     * @param \School\Schoolextension\Domain\Model\Student $student
     * @return void
     */
    public function showAction(\School\Schoolextension\Domain\Model\Student $student)
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
     * @param \School\Schoolextension\Domain\Model\Student $newStudent
     * @return void
     */
    public function createAction(\School\Schoolextension\Domain\Model\Student $newStudent)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->studentRepository->add($newStudent);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \School\Schoolextension\Domain\Model\Student $student
     * @ignorevalidation $student
     * @return void
     */
    public function editAction(\School\Schoolextension\Domain\Model\Student $student)
    {
        $this->view->assign('student', $student);
    }

    /**
     * action update
     *
     * @param \School\Schoolextension\Domain\Model\Student $student
     * @return void
     */
    public function updateAction(\School\Schoolextension\Domain\Model\Student $student)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->studentRepository->update($student);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \School\Schoolextension\Domain\Model\Student $student
     * @return void
     */
    public function deleteAction(\School\Schoolextension\Domain\Model\Student $student)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->studentRepository->remove($student);
        $this->redirect('list');
    }
}
