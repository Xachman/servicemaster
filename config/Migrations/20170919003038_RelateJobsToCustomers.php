<?php
use Migrations\AbstractMigration;

class RelateJobsToCustomers extends AbstractMigration
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
        $table = $this->table('jobs');
        $table->addForeignKey('customer_id', 'customers', ['id'], ['constraint' => 'customer_id'])
        ->save();
    }
}
