<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoMascotaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoMascotaTable Test Case
 */
class TipoMascotaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoMascotaTable
     */
    public $TipoMascota;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TipoMascota',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TipoMascota') ? [] : ['className' => TipoMascotaTable::class];
        $this->TipoMascota = TableRegistry::getTableLocator()->get('TipoMascota', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoMascota);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
