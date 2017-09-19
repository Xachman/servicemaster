<?php
use Migrations\AbstractMigration;

class RelateServicesToJobs extends AbstractMigration
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
        $table = $this->table('services');
        $table->addForeignKey('job_id', 'jobs', ['id'], ['constraint' => 'job_id'])
        ->save();
    }
}
