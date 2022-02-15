<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RolePermissions extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'role_id' => [
                'type'           => 'INT',
                'constraint'     => 8,
                'unsigned'       => true
            ],
            'permission_id' => [
                'type'           => 'INT',
                'constraint'     => 8,
                'unsigned'       => true
            ]
        ]);
        $this->forge->addForeignKey('role_id', 'roles', 'id');
        $this->forge->addForeignKey('permission_id', 'users', 'id');
        $this->forge->createTable('role_permissions', true);
    }

    public function down()
    {
        $this->forge->dropTable('role_permissions', true);
    }
}
