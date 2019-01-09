<?php
namespace Jitender\BasicSchool\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class TeacherTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Jitender\BasicSchool\Domain\Model\Teacher
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Jitender\BasicSchool\Domain\Model\Teacher();
    }

    protected function tearDown()
    {
        parent::tearDown();
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
    public function getDepartmentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDepartment()
        );
    }

    /**
     * @test
     */
    public function setDepartmentForStringSetsDepartment()
    {
        $this->subject->setDepartment('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'department',
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
