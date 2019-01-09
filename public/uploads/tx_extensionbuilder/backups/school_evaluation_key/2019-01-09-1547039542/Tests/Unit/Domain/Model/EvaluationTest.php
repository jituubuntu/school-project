<?php
namespace SchoolEvaluation\SchoolEvaluationKey\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class EvaluationTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Evaluation
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Evaluation();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getMarksReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMarks()
        );
    }

    /**
     * @test
     */
    public function setMarksForStringSetsMarks()
    {
        $this->subject->setMarks('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'marks',
            $this->subject
        );
    }
}
