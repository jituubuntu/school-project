<?php
namespace School\Schoolextension\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class ClassesTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \School\Schoolextension\Domain\Model\Classes
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \School\Schoolextension\Domain\Model\Classes();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getClassIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getClassId()
        );
    }

    /**
     * @test
     */
    public function setClassIdForIntSetsClassId()
    {
        $this->subject->setClassId(12);

        self::assertAttributeEquals(
            12,
            'classId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getClassNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getClassName()
        );
    }

    /**
     * @test
     */
    public function setClassNameForStringSetsClassName()
    {
        $this->subject->setClassName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'className',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDepartmentReturnsInitialValueForDepartment()
    {
        self::assertEquals(
            null,
            $this->subject->getDepartment()
        );
    }

    /**
     * @test
     */
    public function setDepartmentForDepartmentSetsDepartment()
    {
        $departmentFixture = new \School\Schoolextension\Domain\Model\Department();
        $this->subject->setDepartment($departmentFixture);

        self::assertAttributeEquals(
            $departmentFixture,
            'department',
            $this->subject
        );
    }
}
