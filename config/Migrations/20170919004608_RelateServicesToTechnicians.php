<?php
use Migrations\AbstractMigration;

class RelateServicesToTechnicians extends AbstractMigration
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
        
        $table
        ->renameColumn('techician_id', 'technician_id')
        ->addForeignKey('technician_id', 'technicians', ['id'], ['constraint' => 'technician_id'])
        ->save();
    }
}
