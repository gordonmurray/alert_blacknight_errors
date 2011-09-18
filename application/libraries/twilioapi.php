<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once 'twilio.php';

class Twilioapi
{

    function newClient()
    {
	$CI = & get_instance();

	$AccountSid = $CI->config->item('AccountSid');
	$AuthToken = $CI->config->item('AuthToken');
	$client = new TwilioRestClient($AccountSid, $AuthToken);
	return $client;
    }

}