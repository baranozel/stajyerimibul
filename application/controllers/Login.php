<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{

    public function logindata()
    {
        if ($this->input->method() == "post") {
            $this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
            $this->form_validation->set_rules('sifre', 'Şifre', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                echo validation_errors();
            } else {

                $query = $this->common_model->get([
                    'sifre' => sha1(md5(strip_tags(trim($this->input->post('sifre', true))))),
                    'email' => strip_tags(trim($this->input->post('email', true)))
                ], 'uyeler');

                if ($query) {

                    $this->session->set_userdata([
                        'oturum' => true,
                        'id'     => $query->id,
                        'email'  => $query->email,
                        'First_Name' => $query->First_Name,
                        'Last_Name' => $query->Last_Name,
                        'city'      => $query->city,

                    ]);


                    redirect(base_url('welcome/profilSettings'));
                } else {
                    echo "Bilgiler Yanlış";
                }
            }
        }
    }
}