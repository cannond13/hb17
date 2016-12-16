<?php

  class Email_model extends CI_Model {

    public function feedback($data) {

      if ($this->db->insert('user_feedback', $data)) {

          if ($data['userID']!=0) {
              $user = $this->get_user(['userID'=>$data['userID']]);
              $array['author'] = $data['userID'];
              $array['sender'] = $user->callName." ".$user->lastName;
          }

          $array['title'] = 'Feedback';
          $array['name'] = $data['name'];
          $array['email'] = $data['email'];
          $array['message'] = $data['message'];
          $array['IP'] = $data['IP'];
          $body = $this->load->view('email/feedback',$array,TRUE);

          $this->load->library('email');

          $this->email->from($data['email'], $data['name']);
          $this->email->to('contact@bldg.co');
          // $this->email->cc($data['email']);
          // $this->email->bcc('them@their-example.com');
          $this->email->subject('BLDG Feedback Form');
          $this->email->message($body);
          if ($this->email->send()) return TRUE;
          else return $this->email->print_debugger();
      }
      else return FALSE;

    }

  }

 ?>
