<?php
namespace SchoolEvaluation\SchoolEvaluationKey\Controller;

use SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Attendance;
use SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Evaluation;
use SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Student;
use SchoolEvaluation\SchoolEvaluationKey\Domain\Repository\AttendanceRepository;
use SchoolEvaluation\SchoolEvaluationKey\Domain\Repository\EvaluationRepository;
use SchoolEvaluation\SchoolEvaluationKey\Domain\Repository\StudentRepository;
use SchoolEvaluation\SchoolEvaluationKey\Domain\Repository\TeacherRepository;

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
class TeacherManagementController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * @var TeacherRepository
     */
    protected $teacherRepository;

    /**
     * @var StudentRepository
     */
    protected $studentRepository;

    /**
     * @var AttendanceRepository
     */
    protected $attendanceRepository;

    /**
     * @var $EvaluationRepository
     */
    protected $evaluationRepository;

    /**
     * @param TeacherRepository $teacherRepository
     */
    public function injectTeacherRepository(TeacherRepository $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }

    /**
     * @param StudentRepository $studentRepository
     */
    public function injectStudentRepository(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    /**
     * @param AttendanceRepository $attendanceRepository
     */
    public function injectAttendanceRepository(AttendanceRepository $attendanceRepository)
    {
        $this->attendanceRepository = $attendanceRepository;
    }

    /**
     * @param EvaluationRepository $evaluationRepository
     */
    public function injectEvaluationRepository(EvaluationRepository $evaluationRepository)
    {
        $this->evaluationRepository = $evaluationRepository;
    }

    public function indexAction()
    {

    }

    public function manageStudentsAction()
    {
        $students = $this->studentRepository->findAll();
        $this->view->assign('students', $students);
    }

    /**
     * @param Student $student
     */
    public function listAttendancesAction(Student $student)
    {
        $attendances = $this->attendanceRepository->findByStudent($student);
        $amountOfAttendances = count($attendances);

        $this->view->assignMultiple([
            'student' => $student,
            'attendances' => $attendances,
            'amountOfAttendances' => $amountOfAttendances,
        ]);
    }

    /**
     * @param Student $student
     */
    public function listEvaluationsAction(Student $student)
    {
        $evaluations = $this->evaluationRepository->findByStudent($student);
        $amountOfEvaluations = count($evaluations);

        $this->view->assignMultiple([
            'student' => $student,
            'evaluations' => $evaluations,
            'amountOfEvaluations' => $amountOfEvaluations,
        ]);
    }

    /**
     * @param Student $student
     * @param Attendance|null $newAttendance
     */
    public function newAttendanceAction(Student $student, Attendance $newAttendance = null)
    {
        if ($newAttendance === null) {
            $newAttendance = new Attendance();
        }

        $newAttendance->setStudent($student);
        $this->view->assignMultiple([
            'student' => $student,
            'newAttendance' => $newAttendance,
        ]);
    }

    public function newEvaluationAction(Student $student, Evaluation $newEvaluation = null)
    {
        if ($newEvaluation === null) {
            $newEvaluation = new Evaluation();
        }

        $newEvaluation->setStudent($student);
        $this->view->assignMultiple([
            'student' => $student,
            'newEvaluation' => $newEvaluation,
        ]);
    }

    /**
     * @param Student $student
     * @param Attendance $newAttendance
     */
    public function createAttendanceAction(Student $student, Attendance $newAttendance)
    {
        $newAttendance->setStudent($student);
        $this->attendanceRepository->add($newAttendance);
        $this->redirect('listAttendances', null, null, [
            'student' => $student
        ]);
    }

    public function createEvaluationAction(Student $student, Evaluation $newEvaluation)
    {
        $newEvaluation->setStudent($student);
        $this->evaluationRepository->add($newEvaluation);
        $this->redirect('listEvaluations', null, null, [
            'student' => $student
        ]);
    }

    /**
     * @param Attendance $attendance
     */
    public function editAttendanceAction(Attendance $attendance)
    {
        $this->view->assign('attendance', $attendance);
    }


    public function editEvaluationAction(Evaluation $evaluation)
    {
        $this->view->assign('evaluation', $evaluation);
    }

    /**
     * @param Attendance $attendance
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\StopActionException
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\UnknownObjectException
     */
    public function updateAttendanceAction(Attendance $attendance) {
        $this->attendanceRepository->update($attendance);
        $this->redirect('listAttendances', null, null, [
            'student' => $attendance->getStudent()
        ]);
    }

    /**
     * @param Evaluation $evaluation
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\StopActionException
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\UnknownObjectException
     */
    public function updateEvaluationAction(Evaluation $evaluation) {
        $this->evaluationRepository->update($evaluation);
        $this->redirect('listEvaluations', null, null, [
            'student' => $evaluation->getStudent()
        ]);
    }

    /**
     * @param Attendance $attendance
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\StopActionException
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException
     */
    public function deleteAttendanceAction(Attendance $attendance)
    {
        $this->attendanceRepository->remove($attendance);
        $this->redirect('listAttendances', null, null, [
            'student' => $attendance->getStudent()
        ]);
    }

    /**
     * @param Evaluation $evaluation
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\StopActionException
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException
     */
    public function deleteEvaluationAction(Evaluation $evaluation)
    {
        $this->evaluationRepository->remove($evaluation);
        $this->redirect('listEvaluations', null, null, [
            'student' => $evaluation->getStudent()
        ]);
    }


    public function listMarksAction(Student $student)
    {

    }

    // @todo Same story like for attendances
}
