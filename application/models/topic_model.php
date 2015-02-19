<?php
class Topic_model extends CI_Model {
 
    function __construct()
    {       
        parent::__construct();
       
    }
 
    public function gets(){							//result_array();객체or배열
        return $this->db->query("SELECT * FROM topic")->result(); 
    }
 
    public function get($topic_id){  //table	    				  //하나의 값
       return $this->db->get_where('topic', array('id'=>$topic_id))->row();
      //return $this->db->query('select * from topic where id='.$topic_id);
    }

}