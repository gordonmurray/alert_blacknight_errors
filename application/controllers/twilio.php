<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Twilio extends CI_Controller
{

    public function index()
    {
	
    }

    public function response()
    {
	$this->load->view('response');
    }

    public function callback()
    {

	$config = Array(
	    'protocol' => 'smtp',
	    'smtp_host' => 'ssl://smtp.googlemail.com',
	    'smtp_port' => 465,
	    'smtp_user' => '@gmail.com',
	    'smtp_pass' => '',
	);
	$this->load->library('email', $config);
	$this->email->set_newline("\r\n");

	$this->email->from('@gmail.com', '');
	$this->email->to('@gmail.com');

	$this->email->subject('Twilio Callback');

	$message = implode(",", $_POST);

	$message = "";
	foreach ($_POST as $key => $var)
	{
	    $message .= "[$key] = $var, ";
	}

	$this->email->message($message);

	if (!$this->email->send())
	    show_error($this->email->print_debugger());
	else
	    echo 'Your e-mail has been sent!';
    }

}

/* End of file twilio.php */
/* Location: ./application/controllers/twilio.php */