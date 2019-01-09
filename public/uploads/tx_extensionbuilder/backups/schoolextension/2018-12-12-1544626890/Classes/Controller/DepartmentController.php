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
 * DepartmentController
 */
class DepartmentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * departmentRepository
     *
     * @var \School\Schoolextension\Domain\Repository\DepartmentRepository
     * @inject
     */
    protected $departmentRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $departments = $this->departmentRepository->findAll();
        $this->view->assign('departments', $departments);
    }

    /**
     * action show
     *
     * @param \School\Schoolextension\Domain\Model\Department $department
     * @return void
     */
    public function showAction(\School\Schoolextension\Domain\Model\Department $department)
    {
        $this->view->assign('department', $department);
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
     * @param \School\Schoolextension\Domain\Model\Department $newDepartment
     * @return void
     */
    public function createAction(\School\Schoolextension\Domain\Model\Department $newDepartment)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->departmentRepository->add($newDepartment);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \School\Schoolextension\Domain\Model\Department $department
     * @ignorevalidation $department
     * @return void
     */
    public function editAction(\School\Schoolextension\Domain\Model\Department $department)
    {
        $this->view->assign('department', $department);
    }

    /**
     * action update
     *
     * @param \School\Schoolextension\Domain\Model\Department $department
     * @return void
     */
    public function updateAction(\School\Schoolextension\Domain\Model\Department $department)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->departmentRepository->update($department);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \School\Schoolextension\Domain\Model\Department $department
     * @return void
     */
    public function deleteAction(\School\Schoolextension\Domain\Model\Department $department)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->departmentRepository->remove($department);
        $this->redirect('list');
    }
}
