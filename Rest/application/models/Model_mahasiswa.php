<?php

class Model_mahasiswa extends CI_Model
{
    public function getMhs($id = NULL)
    {
        if ($id === NULL) {
            return $this->db->get('mhs')->result_array();
        } else {
            return $this->db->get_where('mhs', ['id' => $id])->result_array();
        }
    }
    public function deleteMhs($id)
    {
        $this->db->delete('mhs', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function addMhs($data)
    {
        $this->db->insert('mhs', $data);
        return $this->db->affected_rows();
    }

    public function updateMhs($data, $id)
    {
        $this->db->update('mhs', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}
