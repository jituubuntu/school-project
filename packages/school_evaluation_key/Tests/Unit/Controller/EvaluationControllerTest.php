<?php
namespace SchoolEvaluation\SchoolEvaluationKey\Tests\Unit\Controller;

/**
 * Test case.
 */
class EvaluationControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SchoolEvaluation\SchoolEvaluationKey\Controller\EvaluationController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\SchoolEvaluation\SchoolEvaluationKey\Controller\EvaluationController::class)
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
    public function listActionFetchesAllEvaluationsFromRepositoryAndAssignsThemToView()
    {

        $allEvaluations = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $evaluationRepository = $this->getMockBuilder(\SchoolEvaluation\SchoolEvaluationKey\Domain\Repository\EvaluationRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $evaluationRepository->expects(self::once())->method('findAll')->will(self::returnValue($allEvaluations));
        $this->inject($this->subject, 'evaluationRepository', $evaluationRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('evaluations', $allEvaluations);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenEvaluationToView()
    {
        $evaluation = new \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Evaluation();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('evaluation', $evaluation);

        $this->subject->showAction($evaluation);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenEvaluationToEvaluationRepository()
    {
        $evaluation = new \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Evaluation();

        $evaluationRepository = $this->getMockBuilder(\SchoolEvaluation\SchoolEvaluationKey\Domain\Repository\EvaluationRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $evaluationRepository->expects(self::once())->method('add')->with($evaluation);
        $this->inject($this->subject, 'evaluationRepository', $evaluationRepository);

        $this->subject->createAction($evaluation);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenEvaluationToView()
    {
        $evaluation = new \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Evaluation();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('evaluation', $evaluation);

        $this->subject->editAction($evaluation);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenEvaluationInEvaluationRepository()
    {
        $evaluation = new \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Evaluation();

        $evaluationRepository = $this->getMockBuilder(\SchoolEvaluation\SchoolEvaluationKey\Domain\Repository\EvaluationRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $evaluationRepository->expects(self::once())->method('update')->with($evaluation);
        $this->inject($this->subject, 'evaluationRepository', $evaluationRepository);

        $this->subject->updateAction($evaluation);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenEvaluationFromEvaluationRepository()
    {
        $evaluation = new \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Evaluation();

        $evaluationRepository = $this->getMockBuilder(\SchoolEvaluation\SchoolEvaluationKey\Domain\Repository\EvaluationRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $evaluationRepository->expects(self::once())->method('remove')->with($evaluation);
        $this->inject($this->subject, 'evaluationRepository', $evaluationRepository);

        $this->subject->deleteAction($evaluation);
    }
}
