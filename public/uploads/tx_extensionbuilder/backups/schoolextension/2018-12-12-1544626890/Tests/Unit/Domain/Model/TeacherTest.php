<?php
namespace School\Schoolextension\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class TeacherTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \School\Schoolextension\Domain\Model\Teacher
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \School\Schoolextension\Domain\Model\Teacher();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTeacherIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getTeacherId()
        );
    }

    /**
     * @test
     */
    public function setTeacherIdForIntSetsTeacherId()
    {
        $this->subject->setTeacherId(12);

        self::assertAttributeEquals(
            12,
            'teacherId',
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
    public function getMailIdReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMailId()
        );
    }

    /**
     * @test
     */
    public function setMailIdForStringSetsMailId()
    {
        $this->subject->setMailId('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'mailId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAboutMeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAboutMe()
        );
    }

    /**
     * @test
     */
    public function setAboutMeForStringSetsAboutMe()
    {
        $this->subject->setAboutMe('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'aboutMe',
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

    /**
     * @test
     */
    public function getClassesReturnsInitialValueForClasses()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getClasses()
        );
    }

    /**
     * @test
     */
    public function setClassesForObjectStorageContainingClassesSetsClasses()
    {
        $class = new \School\Schoolextension\Domain\Model\Classes();
        $objectStorageHoldingExactlyOneClasses = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneClasses->attach($class);
        $this->subject->setClasses($objectStorageHoldingExactlyOneClasses);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneClasses,
            'classes',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addClassToObjectStorageHoldingClasses()
    {
        $class = new \School\Schoolextension\Domain\Model\Classes();
        $classesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $classesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($class));
        $this->inject($this->subject, 'classes', $classesObjectStorageMock);

        $this->subject->addClass($class);
    }

    /**
     * @test
     */
    public function removeClassFromObjectStorageHoldingClasses()
    {
        $class = new \School\Schoolextension\Domain\Model\Classes();
        $classesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $classesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($class));
        $this->inject($this->subject, 'classes', $classesObjectStorageMock);

        $this->subject->removeClass($class);
    }
}
