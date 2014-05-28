<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller{

        function __construct(){
                parent::__construct();
                $this->load->helper(array('url','form','date'));
                $this->load->library('session');
                $this->load->library('form_validation');
                $this->load->model('User_model');
        }

        public function index(){
                if($this->session->userdata('login') == TRUE){
                        if($this->session->userdata('role') == 1){
                                $data['title'] = 'Daftar User';
                                $data['Header'] = 'Daftar User';
                                $data['user'] = $this->User_model->getAll();
                                $data['page'] = 'user/list';
                                $this->load->view('template/layout', $data);
                        }else{
                                redirect('admin');
                        }
                }else{
                        redirect('auth');
                }
        }

        public function add(){
                if($this->session->userdata('login') == TRUE){
                        if($this->session->userdata('role') == 1){
                                $this->form_validation->set_rules('user', 'Username', 'required');
                                $this->form_validation->set_rules('pass', 'Password', 'required');
                                $this->form_validation->set_rules('full_name', 'Nama Lengkap', 'required');
                                $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[pass]');
                                $this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
                                if($this->form_validation->run() == TRUE){
                                        $data = array(
                                                'username' => $this->input->post('user'),
                                                'password' => md5($this->input->post('pass')),
                                                'role' => $this->input->post('role'),
                                                'full_name' => $this->input->post('full_name'),
                                                'email' => $this->input->post('email'),
                                                'active' => '1',
                                                );
                                        $this->User_model->save($data);
                                        redirect('user');
                                }else{
                                        $data['title'] = 'Tambah User';
                                        $data['Header'] = 'Tambah User';
                                        $data['page'] = 'user/add';
                                        $this->load->view('template/layout', $data);
                                }
                        }else{
                                redirect('admin');
                        }
                }else{
                        redirect('auth');
                }
        }

        public function edit($id){
                if($this->session->userdata('login') == TRUE){
                        if($this->session->userdata('role') == 1){
                                $data['user'] = $this->User_model->getById($id);
                                $data['title'] = 'Edit User';
                                $data['Header'] = 'Edit User';
                                $data['page'] = 'user/edit';
                                $this->load->view('template/layout', $data);
                        }else{
                                redirect('admin');
                        }
                }else{
                        redirect('auth');
                }
        }

        public function saveEdit(){
                if($this->session->userdata('login') == TRUE){
                        if($this->session->userdata('role') == 1){
                                $this->form_validation->set_rules('user', 'Username', 'required');
                                $this->form_validation->set_rules('full_name', 'Nama Lengkap', 'required');
                                $this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
                                if($this->form_validation->run() == TRUE){
                                        $data = array(
                                                'username' => $this->input->post('user'),
                                                'password' => md5($this->input->post('pass')),
                                                'role' => $this->input->post('role'),
                                                'full_name' => $this->input->post('full_name'),
                                                'email' => $this->input->post('email'),
                                                'active' => '1',
                                                );
                                        $this->User_model->save($data);
                                        redirect('user');
                                }
                        }else{
                                redirect('admin');
                        }
                }else{
                        redirect('auth');
                }
        }
}