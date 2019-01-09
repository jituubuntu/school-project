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
 * AttendanceController
 */
class AttendanceController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * attendanceRepository
     *
     * @var \SchoolEvaluation\SchoolEvaluationKey\Domain\Repository\AttendanceRepository
     * @inject
     */
    protected $attendanceRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $attendances = $this->attendanceRepository->findAll();
        $this->view->assign('attendances', $attendances);
    }

    /**
     * action show
     *
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Attendance $attendance
     * @return void
     */
    public function showAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Attendance $attendance)
    {
        $this->view->assign('attendance', $attendance);
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
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Attendance $newAttendance
     * @return void
     */
    public function createAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Attendance $newAttendance)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->attendanceRepository->add($newAttendance);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Attendance $attendance
     * @ignorevalidation $attendance
     * @return void
     */
    public function editAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Attendance $attendance)
    {
        $this->view->assign('attendance', $attendance);
    }

    /**
     * action update
     *
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Attendance $attendance
     * @return void
     */
    public function updateAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Attendance $attendance)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->attendanceRepository->update($attendance);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Attendance $attendance
     * @return void
     */
    public function deleteAction(\SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Attendance $attendance)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->attendanceRepository->remove($attendance);
        $this->redirect('list');
    }
}
