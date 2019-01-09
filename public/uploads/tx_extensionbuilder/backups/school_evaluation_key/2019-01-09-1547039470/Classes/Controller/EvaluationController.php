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
 * EvaluationController
 */
class EvaluationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * evaluationRepository
     *
     * @var \SchoolEvaluation\SchoolEvaluationKey\Domain\Repository\EvaluationRepository
     * @inject
     */
    protected $evaluationRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $evaluations = $this->evaluationRepository->findAll();
        $this->view->assign('evaluations', $evaluations);
    }

    /**
     * action show
     *
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Evaluation $evaluation
     * @return void
     */
    public function showAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Evaluation $evaluation)
    {
        $this->view->assign('evaluation', $evaluation);
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
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Evaluation $newEvaluation
     * @return void
     */
    public function createAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Evaluation $newEvaluation)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->evaluationRepository->add($newEvaluation);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Evaluation $evaluation
     * @ignorevalidation $evaluation
     * @return void
     */
    public function editAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Evaluation $evaluation)
    {
        $this->view->assign('evaluation', $evaluation);
    }

    /**
     * action update
     *
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Evaluation $evaluation
     * @return void
     */
    public function updateAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Evaluation $evaluation)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->evaluationRepository->update($evaluation);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Evaluation $evaluation
     * @return void
     */
    public function deleteAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Evaluation $evaluation)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->evaluationRepository->remove($evaluation);
        $this->redirect('list');
    }
}
