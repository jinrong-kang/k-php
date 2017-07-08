<?php
  /**
  * 
  */
  class Questionnaire extends CI_Controller
  {
    
    function __construct()
    {
      parent::__construct();
      $this->load->model('questionnaire_model');
      $this->load->helper('form');
      $this->load->helper('url_helper');
    }

    private function set_language()
    {
      $lang = 'zh';
      if($this->input->post("language") != NULL)
        $lang = $this->input->post("language");
      return $lang;
    }

    public function index($language = NULL)
    {
      if ($language != NULL)
        $lang = $language;
      else
        $lang = $this->set_language();
      $this->twig->render('questionnaire/'.$lang.'_index',array('lang' => $lang));
    }

     public function  userForm()
     {
       $lang = $this->set_language();
       $this->twig->render('questionnaire/'.$lang.'_user_form',array('lang' => $lang));
     }

     public function  clientForm()
     {
       $lang = $this->set_language();
       $this->twig->render('questionnaire/'.$lang.'_client_form',array('lang' => $lang));
     }

     public function valid_userForm()
     {
       $lang = $this->set_language();
       $this->questionnaire_model->set_userform();
       $this->twig->render('questionnaire/'.$lang.'_thanks',array('lang' => $lang));    
     }

     public function valid_clientForm()
     {
       $lang = $this->set_language();
       $this->questionnaire_model->set_clientform();
       $this->twig->render('questionnaire/'.$lang.'_thanks',array('lang' => $lang));
     }

     public function thanks()
    {
      $lang = $this->set_language();
      $this->twig->render('questionnaire/'.$lang.'_thanks',array('lang' => $lang));
    }
  }
?>