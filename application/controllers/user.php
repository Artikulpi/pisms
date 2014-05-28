<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller{

        function __construct(){
                parent::__construct();
                $this->load->helper(array('url','form','date'));
                $this->load->library('session');
                $this->load->library('form_validation');
                $this->load->model(array('User_model','Log_model'));
        }

        public function index($offset = NULL){
                if($this->session->userdata('login') == TRUE){
                        if($this->session->userdata('role') == 1){
                                $this->load->library('pagination');
                                $count = $this->User_model->get();

                                $config['base_url'] = site_url('user/index');
                                $config['total_rows'] = $count->num_rows();
                                $config['per_page'] = 10; 
                                $config['uri_segment'] = 3;
                                $num = $config['per_page'];
                                $this->pagination->initialize($config);
                                $data['halaman'] = $this->pagination->create_links();
                                $data['title'] = 'List User';
                                $data['header'] = 'Daftar Pengguna';
                                $data['user'] = $this->User_model->getAll($num, $offset);
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
                                        $log = array(
                                                'user_id'=>$this->session->userdata('id'),
                                                'activity'=>'Menambah user baru',
                                                'date'=>date('Y-m-d H:i:s'),
                                                'module'=>'User',
                                                );
                                        $this->Log_model->save($log);
                                        redirect('user');
                                }else{
                                        $data['title'] = 'Add User';
                                        $data['header'] = 'Tambah Pengguna';
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

        public function reset($id){
                if($this->session->userdata('login') == TRUE){
                        if($this->session->userdata('role') == 1){
                                $user = $this->User_model->getById($id);
                                $data['user'] = $user;
                                $data['title'] = 'Reset Password';
                                $data['header'] = 'Atur Ulang Kata Sandi '.$user->username;
                                $data['page'] = 'user/reset';
                                $this->load->view('template/layout', $data); 
                        }else{
                                redirect('admin');
                        }
                }else{
                        redirect('auth');
                }
        }

        public function saveReset(){
                if($this->session->userdata('login') == TRUE){
                        if($this->session->userdata('role') == 1){
                                $this->form_validation->set_rules('pass', 'Password', 'required');
                                $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[pass]');
                                $this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
                                $id = $this->input->post('id');
                                if($this->form_validation->run() == TRUE){
                                        $data = array(
                                                'password' => md5($this->input->post('pass')),
                                                );
                                        $this->User_model->saveEdit($id, $data);
                                        $log = array(
                                                'user_id'=>$this->session->userdata('id'),
                                                'activity'=>'Reset password',
                                                'date'=>date('Y-m-d H:i:s'),
                                                'module'=>'User',
                                                );
                                        $this->Log_model->save($log);
                                        redirect('user');
                                }else{
                                        redirect('user/reset/'.$id);
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
                                $data['header'] = 'Sunting Pengguna';
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
                                $this->form_validation->set_rules('full_name', 'Nama Lengkap', 'required');
                                $this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
                                if($this->form_validation->run() == TRUE){
                                        $id = $this->input->post('id');
                                        $data = array(
                                                'role' => $this->input->post('role'),
                                                'full_name' => $this->input->post('full_name'),
                                                'email' => $this->input->post('email'),
                                                'active' => $this->input->post('status'),
                                                );
                                        $this->User_model->saveEdit($id, $data);
                                        $log = array(
                                                'user_id'=>$this->session->userdata('id'),
                                                'activity'=>'Edit user',
                                                'date'=>date('Y-m-d H:i:s'),
                                                'module'=>'User',
                                                );
                                        $this->Log_model->save($log);
                                        redirect('user');
                                }
                        }else{
                                redirect('admin');
                        }
                }else{
                        redirect('auth');
                }
        }

        public function delete($id){                
                if($this->session->userdata('login') == TRUE){
                        if($this->session->userdata('role') == 1){
                                $this->User_model->delete($id);
                                $log = array(
                                        'user_id'=>$this->session->userdata('id'),
                                        'activity'=>'Delete user',
                                        'date'=>date('Y-m-d H:i:s'),
                                        'module'=>'User',
                                        );
                                $this->Log_model->save($log);
                                redirect('user');
                        }else{
                                redirect('admin');        
                        }
                }else{
                        redirect('auth');
                }
        }
}