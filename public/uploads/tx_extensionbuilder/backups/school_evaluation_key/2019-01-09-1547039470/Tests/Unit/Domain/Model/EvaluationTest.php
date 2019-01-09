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
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
