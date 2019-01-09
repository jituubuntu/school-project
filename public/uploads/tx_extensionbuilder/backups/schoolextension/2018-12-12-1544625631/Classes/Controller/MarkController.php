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
 * MarkController
 */
class MarkController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * markRepository
     *
     * @var \School\Schoolextension\Domain\Repository\MarkRepository
     * @inject
     */
    protected $markRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $marks = $this->markRepository->findAll();
        $this->view->assign('marks', $marks);
    }

    /**
     * action show
     *
     * @param \School\Schoolextension\Domain\Model\Mark $mark
     * @return void
     */
    public function showAction(\School\Schoolextension\Domain\Model\Mark $mark)
    {
        $this->view->assign('mark', $mark);
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
     * @param \School\Schoolextension\Domain\Model\Mark $newMark
     * @return void
     */
    public function createAction(\School\Schoolextension\Domain\Model\Mark $newMark)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->markRepository->add($newMark);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \School\Schoolextension\Domain\Model\Mark $mark
     * @ignorevalidation $mark
     * @return void
     */
    public function editAction(\School\Schoolextension\Domain\Model\Mark $mark)
    {
        $this->view->assign('mark', $mark);
    }

    /**
     * action update
     *
     * @param \School\Schoolextension\Domain\Model\Mark $mark
     * @return void
     */
    public function updateAction(\School\Schoolextension\Domain\Model\Mark $mark)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->markRepository->update($mark);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \School\Schoolextension\Domain\Model\Mark $mark
     * @return void
     */
    public function deleteAction(\School\Schoolextension\Domain\Model\Mark $mark)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->markRepository->remove($mark);
        $this->redirect('list');
    }
}
