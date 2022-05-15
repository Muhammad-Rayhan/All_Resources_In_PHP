<?php
    class Crud_model extends CI_Model{
        public function getAllProduct(){
            $query = $this->db->get('product');  //get('product'[Data table name])
            if($query){
                return $query->result();
            }
        }

        public function insertproduct($data){
            $query = $this->db->insert('product', $data);

            if($query){
                return true;
            } else{
                return false;
            }
        }

        public function getsingleProduct($id){
            $this->db->where('id',$id);
            $query = $this->db->get('product');

            if($query){
                return $query->row();
            }
        }

        public function update($data,$id){
            $this->db->where('id',$id);
            $query = $this->db->update('product',$data);

            if($query){
                return true;
            } else {
                return false;
            }
        }

        public function delete($id){
            $this->db->where('id',$id);
            $query = $this->db->delete('product');
            if ($query) {
                return true;
            } else {
                return false;
            }
        }
    }
?>