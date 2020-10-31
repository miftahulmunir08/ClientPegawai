<?php

use GuzzleHttp\Client;


class Pegawai_Model extends CI_Model{


    private  $_client;

    public function __construct(){
        
        $this->_client=new Client([
            'base_uri'=> 'http://localhost/pegawai/api/' 
        ]);
    
    }

    public function getAllPegawai(){
        
        $response = $this->_client->request('GET','pegawai');
        
        $result = json_decode($response->getBody()->getContents(),true);
        return $result['data'];
        
    }


    public function getPegawaiById($id){
        // return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    
        $response = $this->_client->request('GET','pegawai',[
            'query'=> [
                 'id' => $id
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(),true);
        return $result['data'][0];
        }

        public function hapusDataPegawai($id){
                $response = $this->_client->request('DELETE','pegawai',[
                    'form_params' =>[
                        'id'=> $id
                    ]
                ]);
        
                $result = json_decode($response->getBody()->getContents(),true);
                return $result;        
            } 

            public function tambahDataPegawai(){

                $foto = $_FILES['avatar'];

                
                if ($foto='') {
                
                }
                else{
                $config['upload_path'] ='http://localhost/pegawai-client/assets/foto';
                $config['allowed_types'] ='jpg|png|gif';
                
                $this->load->library('upload',$config);
                
                if (!$this->upload->do_upload('foto')) {
                    echo 'Upload gagal';
                    die();
                }
                else{
                    $foto=$this->upload->data('file_name');
                }
                
                }

                $data =[
                    "email" => $this->input->post('email',true), 
                    "name" => $this->input->post('name',true),
                    "phone" => $this->input->post('phone',true),
                    "avatar" => $foto
            
                ];
            
                $response = $this->_client->request('POST','pegawai',[
                   
                    'multipart' => [
                        [
                            'name'=>'email',
                            'content'=>$data['email']
                        ],
                        [
                            'name'=>'name',
                            'content'=>$data['name']
                        ],
                        [
                            'name'=>'phone',
                            'content'=>$data['phone']
                        ],
                        [
                            'avatar'=>'avatar',
                            'content'=> $data['avatar']
                        ],
                    ] 
                ]);
            
                $result = json_decode($response->getBody()->getContents(),true);
                return $result;        
            
                } 

}