<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Initial_schema extends CI_Migration
{

    public function up()
    {
        // Users table
        $this->dbforge->add_field([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'username' => ['type' => 'VARCHAR', 'constraint' => 100],
            'email' => ['type' => 'VARCHAR', 'constraint' => 100],
            'password' => ['type' => 'VARCHAR', 'constraint' => 255],
            'role' => ['type' => 'ENUM("admin","user")', 'default' => 'user'],
            'created_at' => ['type' => 'DATETIME', 'null' => TRUE],
            'updated_at' => ['type' => 'DATETIME', 'null' => TRUE]
        ]);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('email');
        $this->dbforge->create_table('users');

        // Profile table
        $this->dbforge->add_field([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE],
            'full_name' => ['type' => 'VARCHAR', 'constraint' => 255],
            'phone' => ['type' => 'VARCHAR', 'constraint' => 20],
            'address' => ['type' => 'TEXT', 'null' => TRUE],
            'created_at' => ['type' => 'DATETIME', 'null' => TRUE],
            'updated_at' => ['type' => 'DATETIME', 'null' => TRUE]
        ]);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_foreign_key('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->dbforge->create_table('profiles');

        // Scholarships table
        $this->dbforge->add_field([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'title' => ['type' => 'VARCHAR', 'constraint' => 255],
            'description' => ['type' => 'TEXT'],
            'requirements' => ['type' => 'TEXT'],
            'deadline' => ['type' => 'DATE'],
            'status' => ['type' => 'ENUM("active","inactive")', 'default' => 'active'],
            'created_at' => ['type' => 'DATETIME', 'null' => TRUE],
            'updated_at' => ['type' => 'DATETIME', 'null' => TRUE]
        ]);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('scholarships');

        // Applications table
        $this->dbforge->add_field([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE],
            'scholarship_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE],
            'status' => ['type' => 'ENUM("pending","reviewing","approved","rejected")', 'default' => 'pending'],
            'documents' => ['type' => 'TEXT'],
            'notes' => ['type' => 'TEXT', 'null' => TRUE],
            'created_at' => ['type' => 'DATETIME', 'null' => TRUE],
            'updated_at' => ['type' => 'DATETIME', 'null' => TRUE]
        ]);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_foreign_key('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->dbforge->add_foreign_key('scholarship_id', 'scholarships', 'id', 'CASCADE', 'CASCADE');
        $this->dbforge->create_table('applications');

        // Articles table
        $this->dbforge->add_field([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'title' => ['type' => 'VARCHAR', 'constraint' => 255],
            'slug' => ['type' => 'VARCHAR', 'constraint' => 255],
            'content' => ['type' => 'TEXT'],
            'featured_image' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => TRUE],
            'category_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE],
            'author_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE],
            'status' => ['type' => 'ENUM("draft","published")', 'default' => 'draft'],
            'created_at' => ['type' => 'DATETIME', 'null' => TRUE],
            'updated_at' => ['type' => 'DATETIME', 'null' => TRUE]
        ]);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('slug');
        $this->dbforge->create_table('articles');

        // Categories table
        $this->dbforge->add_field([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'name' => ['type' => 'VARCHAR', 'constraint' => 100],
            'slug' => ['type' => 'VARCHAR', 'constraint' => 100],
            'type' => ['type' => 'ENUM("article","gallery")', 'default' => 'article'],
            'created_at' => ['type' => 'DATETIME', 'null' => TRUE],
            'updated_at' => ['type' => 'DATETIME', 'null' => TRUE]
        ]);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('slug');
        $this->dbforge->create_table('categories');

        // Gallery table
        $this->dbforge->add_field([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'title' => ['type' => 'VARCHAR', 'constraint' => 255],
            'description' => ['type' => 'TEXT', 'null' => TRUE],
            'type' => ['type' => 'ENUM("image","video")', 'default' => 'image'],
            'file_url' => ['type' => 'VARCHAR', 'constraint' => 255],
            'category_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE],
            'created_at' => ['type' => 'DATETIME', 'null' => TRUE],
            'updated_at' => ['type' => 'DATETIME', 'null' => TRUE]
        ]);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('gallery');

        // FAQ table
        $this->dbforge->add_field([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'question' => ['type' => 'VARCHAR', 'constraint' => 255],
            'answer' => ['type' => 'TEXT'],
            'order' => ['type' => 'INT', 'constraint' => 5, 'default' => 0],
            'created_at' => ['type' => 'DATETIME', 'null' => TRUE],
            'updated_at' => ['type' => 'DATETIME', 'null' => TRUE]
        ]);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('faq');

        // Careers table
        $this->dbforge->add_field([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'title' => ['type' => 'VARCHAR', 'constraint' => 255],
            'description' => ['type' => 'TEXT'],
            'requirements' => ['type' => 'TEXT'],
            'type' => ['type' => 'ENUM("job","internship")', 'default' => 'job'],
            'status' => ['type' => 'ENUM("active","inactive")', 'default' => 'active'],
            'deadline' => ['type' => 'DATE', 'null' => TRUE],
            'created_at' => ['type' => 'DATETIME', 'null' => TRUE],
            'updated_at' => ['type' => 'DATETIME', 'null' => TRUE]
        ]);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('careers');
    }

    public function down()
    {
        $this->dbforge->drop_table('careers');
        $this->dbforge->drop_table('faq');
        $this->dbforge->drop_table('gallery');
        $this->dbforge->drop_table('categories');
        $this->dbforge->drop_table('articles');
        $this->dbforge->drop_table('applications');
        $this->dbforge->drop_table('scholarships');
        $this->dbforge->drop_table('profiles');
        $this->dbforge->drop_table('users');
    }
}
