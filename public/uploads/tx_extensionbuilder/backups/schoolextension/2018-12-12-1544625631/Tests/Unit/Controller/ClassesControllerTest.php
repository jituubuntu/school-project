<?php
namespace School\Schoolextension\Tests\Unit\Controller;

/**
 * Test case.
 */
class ClassesControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \School\Schoolextension\Controller\ClassesController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\School\Schoolextension\Controller\ClassesController::class)
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
    public function listActionFetchesAllClassessFromRepositoryAndAssignsThemToView()
    {

        $allClassess = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $classesRepository = $this->getMockBuilder(\School\Schoolextension\Domain\Repository\ClassesRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $classesRepository->expects(self::once())->method('findAll')->will(self::returnValue($allClassess));
        $this->inject($this->subject, 'classesRepository', $classesRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('classess', $allClassess);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenClassesToView()
    {
        $classes = new \School\Schoolextension\Domain\Model\Classes();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('classes', $classes);

        $this->subject->showAction($classes);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenClassesToClassesRepository()
    {
        $classes = new \School\Schoolextension\Domain\Model\Classes();

        $classesRepository = $this->getMockBuilder(\School\Schoolextension\Domain\Repository\ClassesRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $classesRepository->expects(self::once())->method('add')->with($classes);
        $this->inject($this->subject, 'classesRepository', $classesRepository);

        $this->subject->createAction($classes);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenClassesToView()
    {
        $classes = new \School\Schoolextension\Domain\Model\Classes();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('classes', $classes);

        $this->subject->editAction($classes);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenClassesInClassesRepository()
    {
        $classes = new \School\Schoolextension\Domain\Model\Classes();

        $classesRepository = $this->getMockBuilder(\School\Schoolextension\Domain\Repository\ClassesRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $classesRepository->expects(self::once())->method('update')->with($classes);
        $this->inject($this->subject, 'classesRepository', $classesRepository);

        $this->subject->updateAction($classes);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenClassesFromClassesRepository()
    {
        $classes = new \School\Schoolextension\Domain\Model\Classes();

        $classesRepository = $this->getMockBuilder(\School\Schoolextension\Domain\Repository\ClassesRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $classesRepository->expects(self::once())->method('remove')->with($classes);
        $this->inject($this->subject, 'classesRepository', $classesRepository);

        $this->subject->deleteAction($classes);
    }
}
