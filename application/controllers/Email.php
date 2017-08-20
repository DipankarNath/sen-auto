<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {
	public function inquery() {
		
		$this->form_validation->set_rules('cname', 'Name of the Vehicle', 'trim|required');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('phonetic', 'Phonetic', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim');

		if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
        } else {
		    $carName = $this->input->post('cname');
		    $msg = $this->input->post('message');
		    $name = $this->input->post('name');
		    $phonetic = $this->input->post('phonetic');
		    $phone = $this->input->post('phone');
		    $email = $this->input->post('email');
            $optradio = $this->input->post('optradio');

            $data = Array(
                'carname' => $carName,
                'msg' => $msg,
                'name' => $name,
                'phonetic' => $phonetic,
                'phone' => $phone,
                'email' => $email,
                'optradio' => $optradio
            );
//            echo '<pre>';
//            print_r($data); exit;

            $config = array(
                'protocol' => 'SMTP',
                'smtp_host' => 'ssl//smtp.gmail.com',
                'smtp_port' => '465',
                'smtp_user' => 'dipankarnath008@gmail.com',
                'smtp_pass' => 'Lenov0GM@!L123',
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );
            $this->email->initialize($config);
            $this->email->set_newline("\r\n");
            $this->email->from('dipankarnath008@gmail.com', 'Dipankar');
            $this->email->to('dipankar.n@invenzolabs.com');

            $this->email->subject('Inquery Email');
            $this->email->message($msg);

            if($this->email->send()){
                $this->session->set_flashdata('emailSucc', 'Email Sent.');
                print_r("Success");
            } else {
                $this->session->set_flashdata('emailFaild', 'Email Send Failed');
                show_error($this->email->print_debugger());
                print_r("Failed");
            }
        }
	}
}