<?php
    class Profile extends CI_Controller{
        function index(){
           $this->load->view('V_profile');
        }

        function biodata(){
            $this->load->view('biodata');
        }

        function biodata($namadepan,$namabelakang,$tempatlahir,$tgllahir,$jk,$alm,$jp){
            $data = [
                'nama_depan'  => $nama_depan,
                'nama_belakang' => $nama_belakang,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'jenis_kelamin' => $jenis_kelamin,
                'alamat' => $alamat,
                'jenjang_pendidikan' => $jenjang_pendidikan,
            ];
            $this->load->view('V_data',$data);
        }
        public function tambah_data(){
            $this->load->view('v_tambah_data_profile');
        }
        public function action_tambah_data(){
            $add = [
                'nama_depan' => $this->input->post('nama_depan'),
                'nama_belakang' => $this->input->post('nama_belakang'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat' => $this->input->post('alamat'),
                'jenjang_pendidikan' => $this->input->post('jenjang_pendidikan'),
        ];

            $this->db->insert('tbl_profile', $add);
            redirect('../profile/tampil_data');
        }
        public function tampil_data(){
            $this->load->model('M_profile');
            $data['profile'] =$this->M_profile->tampil_data()->result();
            $this->load->view('V_tampil_data_profile',$data);
        }
        public function update_data(){
            $this->load->model('M_profile');
            $data['profile'] =$this->M_profile->get_databy_id($id)->row_array();
            $this->load->view('V_update_data_profile',$data);
    }
    public function action_tambah_data(){
        $add = $this->input->post('id');
        $update = [
            'nama_depan' => $this->input->post('nama_depan'),
            'nama_belakang' => $this->input->post('nama_belakang'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'jenjang_pendidikan' => $this->input->post('jenjang_pendidikan'),

        ];

        $update =$this->db->update('tbl_profile', $update, ['id' => $id]);
        readirect(',,/profile/tampil_data');
    }
    public function hapus_data(){
        $id =$id;
        $this->db->delete('tbl_profile', ['id'=> $id]);
        redirect('../profile/tampil_data');
    }
    
    }
?>