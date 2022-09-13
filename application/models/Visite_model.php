<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visite_model extends CI_Model
{
  /**
   * Insert visit time of the user
   *
   * @param [type] $matricule
   * @return void
   */
  public function insert($matricule)
  {
    date_default_timezone_set('Europe/Moscow');
    $data = [
      'date_visite' => date('Y-m-d H:i:s', time()),
      'matricule' => $matricule
    ];
    $this->db->insert('s_visite', $data);
    $query = $this->db->where('matricule', $matricule);

    return $query;
  }
}

/* End of file Visite_model.php and path \application\models\Visite_model.php */
