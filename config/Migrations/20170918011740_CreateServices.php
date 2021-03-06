<?php
use Migrations\AbstractMigration;

class CreateServices extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $this->dropTable('service');
        $table = $this->table('services');
        $table->addColumn('job_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('techician_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('service_date', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
