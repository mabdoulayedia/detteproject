<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Dette_model
 *
 * 
 * @author    Abdoulaye Dia
 * @link      https://github.com/mabdoualyedia
 *
 */

class Dette_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------
  public function save($data)
  {
    {
      $this->db->insert('dette',$data); // insert into dette(nomclient,telephone,description,dette) values(?,?,?,?);
      $id= $this->db->insert_id();
    }
   return $id;
    
  }
  //-------------------------------------------------
  public function selectAll()
  {
    return $dette = $this->db->get('dette')->result_array(); // select * from dette;
  }
  //------------------------------------------------
  public function getDette($id)
  {
    $this->db->where('id',$id);
    return $dette = $this->db->get('dette')->row_array();
  }
  //-------------------------------------------------
  public function updateDette($id,$formArray)
  {
    $this->db->where('id',$id);
    $this->db->update('dette',$formArray); //update dette set nomclient=? telephone = ? ......
  }
  //--------------------------------------------------
  public function supprimerDette($id)
  {
    $this->db->where('id',$id);
    $this->db->delete('dette');
  }
  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }

  // ------------------------------------------------------------------------

}

/* End of file Dette_model.php */
/* Location: ./application/models/Dette_model.php */