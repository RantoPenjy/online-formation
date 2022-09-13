<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Etudiant_model extends CI_Model
{
  /**
   * Get datas of the connected student
   *
   * @param [type] $matricule
   * @return void
   */
  public function get_connected_etudiant($matricule)
  {
    $this->db->join('images', 'etudiant.matricule = images.matricule');
    $this->db->where('etudiant.matricule', $matricule);

    $query = $this->db->get('etudiant');

    return $query->row();
  }

  /**
   * Get data of the user who log in
   *
   * @param [type] $email
   * @param [type] $password
   * @return void
   */
  public function get_etudiant_for_session($email)
  {
    // $this->db->select('matricule');
    $this->db->where('mail', $email);

    $query = $this->db->get('etudiant');

    return $query->row();
  }

  /**
   * Verify if the logged user exist
   *
   * @param [type] $mail
   * @param [type] $password
   * @return void
   */
  public function login_etudiant($mail)
  {
    $this->db->where('mail', $mail);
    $query = $this->db->get('etudiant');

    if ($query->num_rows() > 0) 
    {
      return true;
    }
    else
    {
      return false;
    }
  }
}

// public function session_datetime($matricule)
// {
//   $data = [
//     'date_visite' => date('Y-m-d'),
//     'matricule' => $matricule
//   ];

//   $query = $this->db->insert('s_visite', $data);

//   return $query;
// }

/* End of file EtudiantModel_model.php and path \application\models\EtudiantModel_model.php */
