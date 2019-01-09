<?php
namespace SchoolEvaluation\SchoolEvaluationKey\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class StudentTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Student
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SchoolEvaluation\SchoolEvaluationKey\Domain\Model\Student();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getFirstNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFirstName()
        );
    }

    /**
     * @test
     */
    public function setFirstNameForStringSetsFirstName()
    {
        $this->subject->setFirstName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'firstName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLastNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLastName()
        );
    }

    /**
     * @test
     */
    public function setLastNameForStringSetsLastName()
    {
        $this->subject->setLastName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lastName',
            $this->subject
        );
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

    /**
     * @test
     */
    public function getAttendanceReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAttendance()
        );
    }

    /**
     * @test
     */
    public function setAttendanceForStringSetsAttendance()
    {
        $this->subject->setAttendance('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'attendance',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDobReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDob()
        );
    }

    /**
     * @test
     */
    public function setDobForDateTimeSetsDob()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDob($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'dob',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );
    }
}
