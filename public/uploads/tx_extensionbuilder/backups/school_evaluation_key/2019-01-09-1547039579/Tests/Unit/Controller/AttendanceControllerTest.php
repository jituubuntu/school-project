<?php
namespace SchoolEvaluation\SchoolEvaluationKey\Tests\Unit\Controller;

/**
 * Test case.
 */
class AttendanceControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SchoolEvaluation\SchoolEvaluationKey\Controller\AttendanceController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\SchoolEvaluation\SchoolEvaluationKey\Controller\AttendanceController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllAttendancesFromRepositoryAndAssignsThemToView()
    {

        $allAttendances = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $attendanceRepository = $this->getMockBuilder(\SchoolEvaluation\SchoolEvaluationKey\Domain\Repository\AttendanceRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $attendanceRepository->expects(self::once())->method('findAll')->will(self::returnValue($allAttendances));
        $this->inject($this->subject, 'attendanceRepository', $attendanceRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('attendances', $allAttendances);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenAttendanceToView()
    {
        $attendance = new \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Attendance();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('attendance', $attendance);

        $this->subject->showAction($attendance);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenAttendanceToAttendanceRepository()
    {
        $attendance = new \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Attendance();

        $attendanceRepository = $this->getMockBuilder(\SchoolEvaluation\SchoolEvaluationKey\Domain\Repository\AttendanceRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $attendanceRepository->expects(self::once())->method('add')->with($attendance);
        $this->inject($this->subject, 'attendanceRepository', $attendanceRepository);

        $this->subject->createAction($attendance);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenAttendanceToView()
    {
        $attendance = new \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Attendance();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('attendance', $attendance);

        $this->subject->editAction($attendance);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenAttendanceInAttendanceRepository()
    {
        $attendance = new \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Attendance();

        $attendanceRepository = $this->getMockBuilder(\SchoolEvaluation\SchoolEvaluationKey\Domain\Repository\AttendanceRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $attendanceRepository->expects(self::once())->method('update')->with($attendance);
        $this->inject($this->subject, 'attendanceRepository', $attendanceRepository);

        $this->subject->updateAction($attendance);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenAttendanceFromAttendanceRepository()
    {
        $attendance = new \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Attendance();

        $attendanceRepository = $this->getMockBuilder(\SchoolEvaluation\SchoolEvaluationKey\Domain\Repository\AttendanceRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $attendanceRepository->expects(self::once())->method('remove')->with($attendance);
        $this->inject($this->subject, 'attendanceRepository', $attendanceRepository);

        $this->subject->deleteAction($attendance);
    }
}
