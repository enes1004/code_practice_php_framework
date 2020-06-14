<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarriersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarriersTable Test Case
 */
class CarriersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CarriersTable
     */
    protected $Carriers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Carriers',
        'app.Patients',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Carriers') ? [] : ['className' => CarriersTable::class];
        $this->Carriers = TableRegistry::getTableLocator()->get('Carriers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Carriers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
