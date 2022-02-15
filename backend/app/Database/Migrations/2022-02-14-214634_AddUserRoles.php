<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserRoles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'role_id' => [
                'type'           => 'INT',
                'constraint'     => 8,
                'unsigned'       => true
            ],
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 8,
                'unsigned'       => true
            ]
        ]);
        $this->forge->addForeignKey('role_id', 'roles', 'id');
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->createTable('user_roles', true);
    }

    public function down()
    {
        $this->forge->dropTable('user_roles', true);
    }
}
