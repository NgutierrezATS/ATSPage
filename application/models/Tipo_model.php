<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tipo_model extends CI_Model {

	private $table = 'TIPO';
    private $id = 'ID';
    private $name = 'TIPO';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}

	public function all()
    {
        $this->db->select($this->id);
        $this->db->select($this->name);
        $this->db->from($this->table);
        $query = $this->db->get();

        return $query->result();
    }

    public function getTipo($tipo)
    {

        $this->db->select($this->name);
        $this->db->from($this->table);
        $this->db->where($this->id, $tipo);
        $query = $this->db->get();

        return $query->row();
    }

}

/* End of file Tipo_model.php */
/* Location: ./application/models/Tipo_model.php */