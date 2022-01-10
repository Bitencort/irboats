<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Password extends CI_Controller {

    /**
     * esqueci a mainha senha
     */
    public function esqueci()
    {
       $data = array(

                 'titulo' => 'Esqueci a minha senha',
                    
                );

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/password/esqueci');
        $this->load->view('web/layout/footer');

    }


    public function processaesqueci() {

        $email = $this->input->post();


       $dados['users'] = $this->core_model->recuperar('users');

      
    }

}
