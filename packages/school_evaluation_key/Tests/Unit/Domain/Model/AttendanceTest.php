<?php
namespace SchoolEvaluation\SchoolEvaluationKey\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class AttendanceTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Attendance
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Attendance();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'date',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStudentReturnsInitialValueForStudent()
    {
        self::assertEquals(
            null,
            $this->subject->getStudent()
        );
    }

    /**
     * @test
     */
    public function setStudentForStudentSetsStudent()
    {
        $studentFixture = new \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Student();
        $this->subject->setStudent($studentFixture);

        self::assertAttributeEquals(
            $studentFixture,
            'student',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTeacherReturnsInitialValueForTeacher()
    {
        self::assertEquals(
            null,
            $this->subject->getTeacher()
        );
    }

    /**
     * @test
     */
    public function setTeacherForTeacherSetsTeacher()
    {
        $teacherFixture = new \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Teacher();
        $this->subject->setTeacher($teacherFixture);

        self::assertAttributeEquals(
            $teacherFixture,
            'teacher',
            $this->subject
        );
    }
}
