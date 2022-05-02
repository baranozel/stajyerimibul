<?php
defined('BASEPATH') or exit('No direct script access allowed');

class signup extends CI_Controller
{

    public function signupdata()
    {
        if ($this->input->method() == "post") {

            $this->form_validation->set_rules('First_Name', 'Ad', 'trim|required');
            $this->form_validation->set_rules('Last_Name', 'Soyad', 'trim|required');
            $this->form_validation->set_rules('city', 'Şehir', 'trim|required');
            $this->form_validation->set_rules('email', 'E-mail', 'trim|required|is_unique[uyeler.email]|valid_email');
            $this->form_validation->set_rules('sifre', 'Şifre', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                echo validation_errors();
            } else {

                $data = array(
                    "First_Name" => strip_tags(trim($this->input->post('First_Name', true))),
                    "Last_Name" => strip_tags(trim($this->input->post('Last_Name', true))),
                    "city" => strip_tags(trim($this->input->post('city', true))),
                    "email" => strip_tags(trim($this->input->post('email', true))),
                    "sifre" => sha1(md5(strip_tags(trim($this->input->post('sifre', true)))))

                );

                $ekle = $this->common_model->adddata('uyeler', $data);
                if ($ekle) {
                    echo "Üyelik Oluşturuldu";
                } else {
                    echo "Hata Oluştu";
                }
            }
        }
    }
}