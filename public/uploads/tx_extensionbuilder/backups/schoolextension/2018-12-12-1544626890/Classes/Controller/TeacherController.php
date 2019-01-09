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
 * TeacherController
 */
class TeacherController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * teacherRepository
     *
     * @var \School\Schoolextension\Domain\Repository\TeacherRepository
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

    /**
     * action show
     *
     * @param \School\Schoolextension\Domain\Model\Teacher $teacher
     * @return void
     */
    public function showAction(\School\Schoolextension\Domain\Model\Teacher $teacher)
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
     * @param \School\Schoolextension\Domain\Model\Teacher $newTeacher
     * @return void
     */
    public function createAction(\School\Schoolextension\Domain\Model\Teacher $newTeacher)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->teacherRepository->add($newTeacher);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \School\Schoolextension\Domain\Model\Teacher $teacher
     * @ignorevalidation $teacher
     * @return void
     */
    public function editAction(\School\Schoolextension\Domain\Model\Teacher $teacher)
    {
        $this->view->assign('teacher', $teacher);
    }

    /**
     * action update
     *
     * @param \School\Schoolextension\Domain\Model\Teacher $teacher
     * @return void
     */
    public function updateAction(\School\Schoolextension\Domain\Model\Teacher $teacher)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->teacherRepository->update($teacher);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \School\Schoolextension\Domain\Model\Teacher $teacher
     * @return void
     */
    public function deleteAction(\School\Schoolextension\Domain\Model\Teacher $teacher)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->teacherRepository->remove($teacher);
        $this->redirect('list');
    }

    /**
     * action
     *
     * @return void
     */
    public function Action()
    {

    }
}
