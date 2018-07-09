<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Maquina_model extends CI_Model {

	private $table = 'MAQUINA';
    private $id = 'MODELO';
    private $id_tipo = 'ID_TIPO';

    private $select1 = 'ID_TIPO, MODELO, TIPO, ENERGIA, MARCA, ALTURA_TRABAJO, ALTURA_PLATAFORMA, ALTO_BARANDA, LARGO_REPLEGADA, LARGO_PLATAFORMA, ANCHO_PLATAFORMA, CAPACIDAD, PESO,  FOTOMIN, FOTOMAX, DESCRIPCION';

    private $select2 = 'ID_TIPO, MODELO, TIPO, ENERGIA, MARCA, CARGA_MAXIMA, ALCANCE_MAXIMO, ALTURA_LEVANTAMIENTO, BRAZO_EXTENDIDO, PESO,  FOTOMIN, FOTOMAX, DESCRIPCION';

    private $select3 = 'ID_TIPO, MODELO, TIPO, ENERGIA, MARCA, ALTURA, ANCHO_REPLEGADO, ANCHO_EXTENDIDO, TORRE_REPLEGADA, TOMA_CORRIENTE, LAMPARA_HALOGENA, GENERADOR, PESO,  FOTOMIN, FOTOMAX, DESCRIPCION';

    private $table_tipo = 'TIPO';
    private $join_tipo = 'TIPO.ID = MAQUINA.ID_TIPO';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();	
	}

	public function all()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();

        return $query->result();
    }

    public function getModelos()
    {
    	$this->db->select($this->id);
        $this->db->select($this->id_tipo);
    	$this->db->from($this->table);
    	$query = $this->db->get();

        return $query->result();
    }

    public function filtroTipo($tipo)
    {
        // die(var_dump($tipo));
        if ($tipo == 1 || $tipo == 2 || $tipo == 3) {
            $this->db->select($this->select1);
        }else if ($tipo == 4) {
            $this->db->select($this->select2);
        }else if ($tipo == 5) {
            $this->db->select($this->select3);
        }
            $this->db->from ($this->table);
            $this->db->join($this->table_tipo, $this->join_tipo);
            $this->db->where($this->id_tipo, $tipo);
            $q = $this->db->get();
            return $q->result();
    }

    public function filtroModelo($modelo,$tipo)
    {
        if ($tipo == 1 || $tipo == 2 || $tipo == 3) {
            $this->db->select($this->select1);
        }else if ($tipo == 4) {
            $this->db->select($this->select2);
        }else if ($tipo == 5) {
            $this->db->select($this->select3);
        }
        $this->db->from($this->table);
        $this->db->join($this->table_tipo, $this->join_tipo);
        $this->db->where($this->id, $modelo);
        $query = $this->db->get();

        return $query->row();
    }

}

/* End of file maquina.php */
/* Location: ./application/models/maquina.php */