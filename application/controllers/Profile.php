<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('oturum')) {
            redirect(base_url());
        }
    }

    public function profiledata()
    {
        if ($this->input->method() == "post") {
            $this->form_validation->set_rules('First_Name', 'Ad', 'trim|required');
            $this->form_validation->set_rules('Last_Name', 'Soyad', 'trim|required');

            $this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
            $this->form_validation->set_rules('city', 'Şehir', 'trim|required');
        }
        if ($this->form_validation->run() == FALSE) {
        } else {

            $query = $this->common_model->get(
                [
                    'email' => $this->input->post('email', true),
                    'id !=' => $this->session->userdata('id')
                ],
                'uyeler'
            );
            if ($query) {
                echo "E-posta adresi sistemde kayıtlı";
            } else {
                $data = array(
                    "First_Name" => strip_tags(trim($this->input->post('First_Name', true))),
                    "Last_Name" => strip_tags(trim($this->input->post('Last_Name', true))),

                    "email" => strip_tags(trim($this->input->post('email', true))),
                    "city" => strip_tags(trim($this->input->post('city', true)))


                );
            }
            $update = $this->common_model->update(['id' => $this->session->userdata('id')], $data, 'uyeler');
            if ($update) {
                $this->session->set_userdata([


                    'email'  => strip_tags(trim($this->input->post('email', true))),
                    'First_Name' => strip_tags(trim($this->input->post('First_Name', true))),
                    'Last_Name' => strip_tags(trim($this->input->post('Last_Name', true))),
                    'city'      => strip_tags(trim($this->input->post('city', true)))

                ]);
                echo "Profiliniz Güncellendi";
            } else {
                echo "Hata Oluştu";
            }
        }
    }
}