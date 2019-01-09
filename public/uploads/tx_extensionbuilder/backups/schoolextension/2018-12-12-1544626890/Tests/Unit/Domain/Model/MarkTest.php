<?php
namespace School\Schoolextension\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class MarkTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \School\Schoolextension\Domain\Model\Mark
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \School\Schoolextension\Domain\Model\Mark();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getMarksReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getMarks()
        );
    }

    /**
     * @test
     */
    public function setMarksForFloatSetsMarks()
    {
        $this->subject->setMarks(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'marks',
            $this->subject,
            '',
            0.000000001
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
        $studentFixture = new \School\Schoolextension\Domain\Model\Student();
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
