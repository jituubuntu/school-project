<?php
namespace School\Schoolextension\Tests\Unit\Controller;

/**
 * Test case.
 */
class MarkControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \School\Schoolextension\Controller\MarkController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\School\Schoolextension\Controller\MarkController::class)
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
    public function listActionFetchesAllMarksFromRepositoryAndAssignsThemToView()
    {

        $allMarks = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $markRepository = $this->getMockBuilder(\School\Schoolextension\Domain\Repository\MarkRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $markRepository->expects(self::once())->method('findAll')->will(self::returnValue($allMarks));
        $this->inject($this->subject, 'markRepository', $markRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('marks', $allMarks);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenMarkToView()
    {
        $mark = new \School\Schoolextension\Domain\Model\Mark();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('mark', $mark);

        $this->subject->showAction($mark);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenMarkToMarkRepository()
    {
        $mark = new \School\Schoolextension\Domain\Model\Mark();

        $markRepository = $this->getMockBuilder(\School\Schoolextension\Domain\Repository\MarkRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $markRepository->expects(self::once())->method('add')->with($mark);
        $this->inject($this->subject, 'markRepository', $markRepository);

        $this->subject->createAction($mark);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenMarkToView()
    {
        $mark = new \School\Schoolextension\Domain\Model\Mark();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('mark', $mark);

        $this->subject->editAction($mark);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenMarkInMarkRepository()
    {
        $mark = new \School\Schoolextension\Domain\Model\Mark();

        $markRepository = $this->getMockBuilder(\School\Schoolextension\Domain\Repository\MarkRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $markRepository->expects(self::once())->method('update')->with($mark);
        $this->inject($this->subject, 'markRepository', $markRepository);

        $this->subject->updateAction($mark);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenMarkFromMarkRepository()
    {
        $mark = new \School\Schoolextension\Domain\Model\Mark();

        $markRepository = $this->getMockBuilder(\School\Schoolextension\Domain\Repository\MarkRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $markRepository->expects(self::once())->method('remove')->with($mark);
        $this->inject($this->subject, 'markRepository', $markRepository);

        $this->subject->deleteAction($mark);
    }
}
