<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: dipan
 * Date: 20-08-2017
 * Time: 10:51
 */
class TruckModel extends CI_Model{

    public function get_recomSetOne(){
        $query = $this->db->query("SELECT * FROM product P,images I where P.Id = I.Prod_Id AND I.Lead=1 LIMIT 3");
        $result = $query->result();
        return $result;
    }
    public function get_recomSetTwo(){
        $query = $this->db->query("SELECT * FROM product P,images I where P.Id = I.Prod_Id AND I.Lead=1 LIMIT 3 OFFSET 3");
        $result = $query->result();
        return $result;
    }
    public function get_prod() {
        $config = array();
        $config["base_url"] = base_url() . "View/example1";
        $config["total_rows"] = $this->Countries->record_count();
        $config["per_page"] = 20;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->Countries->
        fetch_countries($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

        $this->load->view("example1", $data);
    }

    public function record_count() {
        return $this->db->count_all("Product");
    }
    public function get_category($limit, $start) {


        $this->db->limit($limit, $start);
        $query = $this->db->get("Product");
        $query = $this->db->query('SELECT * FROM Product WHERE CatId=');


        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
}