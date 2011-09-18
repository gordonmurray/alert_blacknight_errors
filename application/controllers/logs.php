<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Logs extends CI_Controller
{

    public function index()
    {
	$this->load->view('welcome');
    }

    /**
     * Connect to Blacknight FTP account to get the contents of error_log file
     * Go line by line, look for 'PHP Fatal Error', Count Occurances
     * Make a phone call to call out the number of errors found
     */
    public function check_errors()
    {
	$this->load->library('twilioapi');
	$this->config->load('phone_number');
	$this->config->load('Twilioapi');
	$this->config->load('ftp');

	echo "Opening Error Log file. <br />\n";

	$error_file_content = nl2br(file_get_contents("ftp://" . $this->config->item('username') . ":" . $this->config->item('password') . "@" . $this->config->item('hostname') . "/error_log"));

	$error_file_array = explode("<br />", $error_file_content);

	echo count($error_file_array) . " log file entries. <br />";

	$fatal_count = 0;
	foreach ($error_file_array as $log_entry)
	{
	    if (strstr($log_entry, "PHP Fatal error"))
	    {
		$fatal_count++;
	    }
	}

	echo "$fatal_count PHP Fatal Errors found in logs. <br />";

	// Twilio REST API version
	$ApiVersion = "2010-04-01";

	$AccountSid = $this->config->item('AccountSid');

	// Instantiate a new Twilio Rest Client
	$client = $this->twilioapi->newClient();

	$response = $client->request("/$ApiVersion/Accounts/$AccountSid/Calls", "POST", array(
	    "To" => $this->config->item('phone_recipient'),
	    "From" => $this->config->item('phone_sender'),
	    "Body" => "$fatal_count Fatal Errors found in logs"
		));

	if ($response->IsError)
	//echo "Error: {$response->ErrorMessage}";
	    echo "Phone call NOT made to report Errors. Twilio account currently pending authorization to make International Calls (US to Ireland).<br />\n";
	else
	    echo "Phone call successfully made to report Errors. <br />\n";
    }

}

/* End of file logs.php */
/* Location: ./application/controllers/logs.php */