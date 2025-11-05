<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    protected $table = 'users';

    public function __construct()
    {
        parent::__construct();
    }

    public function get($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function get_by_email($email)
    {
        return $this->db->get_where($this->table, ['email' => $email])->row();
    }

    public function get_by_verification_token($token)
    {
        return $this->db->get_where($this->table, ['verification_token' => $token])->row();
    }

    public function get_by_reset_token($token)
    {
        return $this->db->get_where($this->table, ['reset_token' => $token])->row();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update($id, $data)
    {
        return $this->db->update($this->table, $data, ['id' => $id]);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }

    public function get_all($limit = null, $offset = null)
    {
        if ($limit) {
            $this->db->limit($limit, $offset);
        }
        return $this->db->get($this->table)->result();
    }

    public function count_all()
    {
        return $this->db->count_all($this->table);
    }

    public function get_active_users()
    {
        return $this->db->get_where($this->table, ['status' => 'active'])->result();
    }

    public function get_by_role($role)
    {
        return $this->db->get_where($this->table, ['role' => $role])->result();
    }
}
