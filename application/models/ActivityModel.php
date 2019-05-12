<?php 

class ActivityModel extends CI_Model{
    public function insert($data)
    {
        $this->db->insert('activity', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    public function update($data)
    {
        $result = $this->db->get('activity');
        $row = $result->result();
        // foreach ($rows as $row)
        // {
        //     if($row->name_activity == $result->name_activity && $row->)
        // }
        // $this->db->wherenot()
        $this->db->where('id',$data->id);
        $this->db->update('activity',$data);
    }
    public function select()
    {
        $query = $this->db->get('activity');
        return $query-result();
    }
}