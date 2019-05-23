<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient(LINEBOT_ACCESS_TOKEN);
		$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => LINEBOT_SECRET]);
		$this->load->view('welcome_message');
	}
}
