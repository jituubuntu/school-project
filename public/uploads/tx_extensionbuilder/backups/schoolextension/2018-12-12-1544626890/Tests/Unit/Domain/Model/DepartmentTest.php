<?php
namespace School\Schoolextension\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class DepartmentTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \School\Schoolextension\Domain\Model\Department
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \School\Schoolextension\Domain\Model\Department();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getDepartmentIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getDepartmentId()
        );
    }

    /**
     * @test
     */
    public function setDepartmentIdForIntSetsDepartmentId()
    {
        $this->subject->setDepartmentId(12);

        self::assertAttributeEquals(
            12,
            'departmentId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDepartmentNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDepartmentName()
        );
    }

    /**
     * @test
     */
    public function setDepartmentNameForStringSetsDepartmentName()
    {
        $this->subject->setDepartmentName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'departmentName',
            $this->subject
        );
    }
}
