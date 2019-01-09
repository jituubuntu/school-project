<?php
namespace School\Schoolextension\Tests\Unit\Controller;

/**
 * Test case.
 */
class DepartmentControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \School\Schoolextension\Controller\DepartmentController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\School\Schoolextension\Controller\DepartmentController::class)
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
    public function listActionFetchesAllDepartmentsFromRepositoryAndAssignsThemToView()
    {

        $allDepartments = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $departmentRepository = $this->getMockBuilder(\School\Schoolextension\Domain\Repository\DepartmentRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $departmentRepository->expects(self::once())->method('findAll')->will(self::returnValue($allDepartments));
        $this->inject($this->subject, 'departmentRepository', $departmentRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('departments', $allDepartments);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenDepartmentToView()
    {
        $department = new \School\Schoolextension\Domain\Model\Department();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('department', $department);

        $this->subject->showAction($department);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenDepartmentToDepartmentRepository()
    {
        $department = new \School\Schoolextension\Domain\Model\Department();

        $departmentRepository = $this->getMockBuilder(\School\Schoolextension\Domain\Repository\DepartmentRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $departmentRepository->expects(self::once())->method('add')->with($department);
        $this->inject($this->subject, 'departmentRepository', $departmentRepository);

        $this->subject->createAction($department);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenDepartmentToView()
    {
        $department = new \School\Schoolextension\Domain\Model\Department();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('department', $department);

        $this->subject->editAction($department);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenDepartmentInDepartmentRepository()
    {
        $department = new \School\Schoolextension\Domain\Model\Department();

        $departmentRepository = $this->getMockBuilder(\School\Schoolextension\Domain\Repository\DepartmentRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $departmentRepository->expects(self::once())->method('update')->with($department);
        $this->inject($this->subject, 'departmentRepository', $departmentRepository);

        $this->subject->updateAction($department);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenDepartmentFromDepartmentRepository()
    {
        $department = new \School\Schoolextension\Domain\Model\Department();

        $departmentRepository = $this->getMockBuilder(\School\Schoolextension\Domain\Repository\DepartmentRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $departmentRepository->expects(self::once())->method('remove')->with($department);
        $this->inject($this->subject, 'departmentRepository', $departmentRepository);

        $this->subject->deleteAction($department);
    }
}
