<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin/index');
    }


    public function sifre()
    {
        $this->load->view('admin/sifre');
    }
   
    public function sifresil($id)
    {
        sifreler::delete($id);
        $this->load->view('admin/sifre');
    }


       
    public function PassGenerator()
    {
       
       
        function password_generate($chars) 
        {
          $kelime = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz.,;-$&=';
          
          return substr(str_shuffle($kelime), 0, $chars);
        }
      
      if (isPost()) {
        $data=['sifre'=> postvalue('sifre') , 'platform'=>postvalue('platform')];
        sifreler::insert($data);
        redirect('admin/sifre');
      }
       
        
        $this->load->view('admin/sifreolustur' );
    }

    public function sifreduzenle($id)
    {
      $data['sifreler'] = sifreler::find($id);
      if(isPost()){
        $data=['sifre'=> postvalue('sifre') , 'platform'=>postvalue('platform')];
        sifreler::update($id,$data);
        redirect('admin/sifre');
      }
      $this->load->view('admin/sifreduzenle',$data);
    }


    
}
