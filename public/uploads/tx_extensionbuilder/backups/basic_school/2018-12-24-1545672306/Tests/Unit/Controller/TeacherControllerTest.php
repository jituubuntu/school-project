<?php
namespace Jitender\BasicSchool\Tests\Unit\Controller;

/**
 * Test case.
 */
class TeacherControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Jitender\BasicSchool\Controller\TeacherController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Jitender\BasicSchool\Controller\TeacherController::class)
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
    public function listActionFetchesAllTeachersFromRepositoryAndAssignsThemToView()
    {

        $allTeachers = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $teacherRepository = $this->getMockBuilder(\Jitender\BasicSchool\Domain\Repository\TeacherRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $teacherRepository->expects(self::once())->method('findAll')->will(self::returnValue($allTeachers));
        $this->inject($this->subject, 'teacherRepository', $teacherRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('teachers', $allTeachers);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenTeacherToView()
    {
        $teacher = new \Jitender\BasicSchool\Domain\Model\Teacher();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('teacher', $teacher);

        $this->subject->showAction($teacher);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenTeacherToTeacherRepository()
    {
        $teacher = new \Jitender\BasicSchool\Domain\Model\Teacher();

        $teacherRepository = $this->getMockBuilder(\Jitender\BasicSchool\Domain\Repository\TeacherRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $teacherRepository->expects(self::once())->method('add')->with($teacher);
        $this->inject($this->subject, 'teacherRepository', $teacherRepository);

        $this->subject->createAction($teacher);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenTeacherToView()
    {
        $teacher = new \Jitender\BasicSchool\Domain\Model\Teacher();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('teacher', $teacher);

        $this->subject->editAction($teacher);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenTeacherInTeacherRepository()
    {
        $teacher = new \Jitender\BasicSchool\Domain\Model\Teacher();

        $teacherRepository = $this->getMockBuilder(\Jitender\BasicSchool\Domain\Repository\TeacherRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $teacherRepository->expects(self::once())->method('update')->with($teacher);
        $this->inject($this->subject, 'teacherRepository', $teacherRepository);

        $this->subject->updateAction($teacher);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenTeacherFromTeacherRepository()
    {
        $teacher = new \Jitender\BasicSchool\Domain\Model\Teacher();

        $teacherRepository = $this->getMockBuilder(\Jitender\BasicSchool\Domain\Repository\TeacherRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $teacherRepository->expects(self::once())->method('remove')->with($teacher);
        $this->inject($this->subject, 'teacherRepository', $teacherRepository);

        $this->subject->deleteAction($teacher);
    }
}
