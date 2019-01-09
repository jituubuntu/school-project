<?php
namespace School\Schoolextension\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class StudentTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \School\Schoolextension\Domain\Model\Student
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \School\Schoolextension\Domain\Model\Student();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getStudentIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getStudentId()
        );
    }

    /**
     * @test
     */
    public function setStudentIdForIntSetsStudentId()
    {
        $this->subject->setStudentId(12);

        self::assertAttributeEquals(
            12,
            'studentId',
            $this->subject
        );
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
    public function getContactReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getContact()
        );
    }

    /**
     * @test
     */
    public function setContactForStringSetsContact()
    {
        $this->subject->setContact('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'contact',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getClassesReturnsInitialValueForClasses()
    {
        self::assertEquals(
            null,
            $this->subject->getClasses()
        );
    }

    /**
     * @test
     */
    public function setClassesForClassesSetsClasses()
    {
        $classesFixture = new \School\Schoolextension\Domain\Model\Classes();
        $this->subject->setClasses($classesFixture);

        self::assertAttributeEquals(
            $classesFixture,
            'classes',
            $this->subject
        );
    }
}
