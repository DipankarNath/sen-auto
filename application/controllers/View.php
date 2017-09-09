<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("TruckModel");
        $this->load->library("pagination");
    }
//    public function category($cat_id) {
////        $config = array();
////        $config["base_url"] = base_url() . "welcome/example1";
////        $config["total_rows"] = $this->TruckModel->record_count();
////        $config["per_page"] = 20;
////        $config["uri_segment"] = 3;
////
////        $this->pagination->initialize($config);
////
////        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
////        $data["results"] = $this->TruckModel->get_category($config["per_page"], $page);
////        $data["links"] = $this->pagination->create_links();
////
////        $this->load->view("example1", $data);
//        $config = array();
//        $total_row = $this->TruckModel->record_count();
//        $config["base_url"] = base_url()."View/category";
//        $config["total_rows"] = $total_row;
//        $config["per_page"] = 1;
//        $config["uri_segment"] = 3;
//        $config['use_page_numbers'] = TRUE;
//        $config['num_links'] = $total_row;
//        $config['cur_tag_open'] = '<li class="active"><a>';
//        $config['cur_tag_close'] = '</a></li>';
//        $config['num_tag_open'] = '<li>';
//        $config['num_tag_close'] = '</li>';
//        $config['next_tag_open'] = '<li>';
//        $config['ext_tag_close'] = '</li>';
//        $config['next_link'] = 'Next';
//        $config['prev_link'] = 'Previous';
//
//        $this->pagination->initialize($config);
//
//        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
//        $data["results"] = $this->TruckModel->get_category($config["per_page"], $page, $cat_id);
////        print_r($data["results"]); exit;
////        $data["links"] = $this->pagination->create_links();
//        $str_links = $this->pagination->create_links();
//        $data["links"] = explode('&nbsp;',$str_links );
//        $this->load->view('common/header/Header');
//        $this->load->view('pages/Category', $data);
//        $this->load->view('common/footer/Footer');
//    }
    public function vehicle($id)
    {
        $v_data = $this->TruckModel->get_vehicle($id);
        $i_data = $this->TruckModel->get_images($id);
        $data['vcs'] = $v_data;
        $data['imgs'] = $i_data;
        $this->load->view('common/header/Header');
        $this->load->view('pages/Vehicle', $data);
        $this->load->view('common/footer/Footer');
    }

    public function category($product_id)
    {

        $this->load->library('pagination');
        $this->load->model('TruckModel');

        $config["base_url"] = base_url() . 'Dashboard/category/' . $product_id;
        $total_row = $this->TruckModel->record_count($product_id);
        $config["total_rows"] = $total_row;

        $config["per_page"] = 3;// <-----------------Per page ---------------------------

        $config["uri_segment"] = 4;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = $total_row;

        $config['full_tag_open'] = '<div ><ul class="pagination post-pagination text-center mt-50">';
        $config['full_tag_close'] = '</ul></div>';

        $config['next_link'] = '<i class="fa fa-angle-right"></i>';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<i class="fa fa-angle-left"></i>';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';


        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;

        $data['products'] = $this->TruckModel->fetch_properties($config["per_page"], $page, $product_id);


        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;', $str_links);
        $data['main_view'] = "home_view";

        $this->load->view('common/header/Header');
        $this->load->view('pages/Category', $data); // loads the page
        $this->load->view('common/footer/Footer');
    }
}