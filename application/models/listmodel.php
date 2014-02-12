<?php

Class ListModel Extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}

	function viewall()
    {   
        $query = $this->db->query("select * from items order by id asc");
        $result = $query->result_array();

        return $result;
    }
	
	function search($limit, $offset)
	{
		$q = $this->db->select('id, item_name, done')			
			->from('items')
			->order_by("done", "asc")
			->order_by("id", "asc")
			->limit($limit, $offset);
		
		$ret['rows'] = $q->get()->result();
		
		$q = $this->db->select('COUNT(*) as count', FALSE)
			->from('items');
		
		$tmp = $q->get()->result();
		
		$ret['num_rows'] = $tmp[0]->count;
		
		return $ret;
	}

    function view($id)
    {   
        $query = $this->db->query("select * from items where id = '$id'");
        $result = $query->result_array();

        return $result;
    }

    function add($itemname)
    {
    	$data = array(
            'item_name' => $itemname
			);
		$this->db->insert('items', $data);
    }

	function delete($id)
    {		
		$this->db->where('id', $id);
		$this->db->delete('items');
    } 
	
	function done($id,$item_name)
    {   	
		$data = array(
               'item_name' => $item_name,
               'done' => 1
            );

		$this->db->where('id', $id);
		$this->db->update('items', $data); 
    }
}

?>