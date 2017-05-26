<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GaleriasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GaleriasTable Test Case
 */
class GaleriasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GaleriasTable
     */
    public $Galerias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.galerias',
        'app.images'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Galerias') ? [] : ['className' => 'App\Model\Table\GaleriasTable'];
        $this->Galerias = TableRegistry::get('Galerias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Galerias);

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
