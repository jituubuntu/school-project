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
 * ClassesController
 */
class ClassesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * classesRepository
     *
     * @var \School\Schoolextension\Domain\Repository\ClassesRepository
     * @inject
     */
    protected $classesRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $classes = $this->classesRepository->findAll();
        $this->view->assign('classes', $classes);
    }

    /**
     * action show
     *
     * @param \School\Schoolextension\Domain\Model\Classes $classes
     * @return void
     */
    public function showAction(\School\Schoolextension\Domain\Model\Classes $classes)
    {
        $this->view->assign('classes', $classes);
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
     * @param \School\Schoolextension\Domain\Model\Classes $newClasses
     * @return void
     */
    public function createAction(\School\Schoolextension\Domain\Model\Classes $newClasses)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->classesRepository->add($newClasses);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \School\Schoolextension\Domain\Model\Classes $classes
     * @ignorevalidation $classes
     * @return void
     */
    public function editAction(\School\Schoolextension\Domain\Model\Classes $classes)
    {
        $this->view->assign('classes', $classes);
    }

    /**
     * action update
     *
     * @param \School\Schoolextension\Domain\Model\Classes $classes
     * @return void
     */
    public function updateAction(\School\Schoolextension\Domain\Model\Classes $classes)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->classesRepository->update($classes);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \School\Schoolextension\Domain\Model\Classes $classes
     * @return void
     */
    public function deleteAction(\School\Schoolextension\Domain\Model\Classes $classes)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->classesRepository->remove($classes);
        $this->redirect('list');
    }
}
