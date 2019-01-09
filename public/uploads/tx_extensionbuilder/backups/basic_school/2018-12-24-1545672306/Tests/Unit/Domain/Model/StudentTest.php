<?php
namespace Jitender\BasicSchool\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class StudentTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Jitender\BasicSchool\Domain\Model\Student
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Jitender\BasicSchool\Domain\Model\Student();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getClassReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getClass()
        );
    }

    /**
     * @test
     */
    public function setClassForStringSetsClass()
    {
        $this->subject->setClass('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'class',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
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
    public function getAttendenceReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAttendence()
        );
    }

    /**
     * @test
     */
    public function setAttendenceForStringSetsAttendence()
    {
        $this->subject->setAttendence('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'attendence',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMarksRelationReturnsInitialValueForTeacher()
    {
        self::assertEquals(
            null,
            $this->subject->getMarksRelation()
        );
    }

    /**
     * @test
     */
    public function setMarksRelationForTeacherSetsMarksRelation()
    {
        $marksRelationFixture = new \Jitender\BasicSchool\Domain\Model\Teacher();
        $this->subject->setMarksRelation($marksRelationFixture);

        self::assertAttributeEquals(
            $marksRelationFixture,
            'marksRelation',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAttendenceRelationReturnsInitialValueForTeacher()
    {
        self::assertEquals(
            null,
            $this->subject->getAttendenceRelation()
        );
    }

    /**
     * @test
     */
    public function setAttendenceRelationForTeacherSetsAttendenceRelation()
    {
        $attendenceRelationFixture = new \Jitender\BasicSchool\Domain\Model\Teacher();
        $this->subject->setAttendenceRelation($attendenceRelationFixture);

        self::assertAttributeEquals(
            $attendenceRelationFixture,
            'attendenceRelation',
            $this->subject
        );
    }
}
