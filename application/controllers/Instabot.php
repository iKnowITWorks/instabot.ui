<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instabot extends CI_Controller {
	
	public function index() {
		$this->lang->load('page', 'english');
		
		$data['page_title'] = $this->lang->line('page_title');
		$data['page_header'] = $this->lang->line('dashboard_title');
		$data['page_content'] = 'page_dashboard';
		
		$data['bot_list'] = $this->instabot_model->get_bot_list();
		
		$this->load->view('page_template', $data);
	}
	
	public function check_all() {
		$bots = $this->instabot_model->get_bot_list();
		$bot_list = array();
		foreach ($bots as $bot) {
			$online = false;
			$uptime = 0;
			
			if ($this->instabot_model->check_this_bot($bot->bot_id)) {
				$online = true;
				$start_time = strtotime($bot->start_time);
				$now_time = strtotime(date("Y-m-d H:i:s"));
				$uptime = floatval(number_format(($now_time - $start_time) / 3600, 2));
			}
			$bot_list[] = array(
				'bot_id' => $bot->bot_id,
				'login' => $bot->login,
				'uptime' => $uptime,
				'online' => $online
			);
		}
		
		echo json_encode($bot_list);
	}
	
	public function check_bot($id) {
		echo $this->instabot_model->check_this_bot($id);
	}
	
	public function start_bot($id) {
		echo $this->instabot_model->start_bot($id);
	}
	
	public function stop_bot($id) {
		echo $this->instabot_model->stop_bot($id);
	}
	
	public function restart_bot($id) {
		echo $this->instabot_model->restart_bot($id);
	}
	
	public function delete_bot($id) {
		$this->db->where('bot_id', $id);
		$rslt = $this->db->delete('bots');
		
		if ($this->db->affected_rows() > 0) {
			$message = "Bot deleted";
			$result = "success";
			
			if ($this->instabot_model->check_this_bot($id)) {
				$this->instabot_model->stop_bot($id);
				$message .= " and stopped.";
			}
		} else {
			$message = "Bot NOT deleted";
			$result = "error";
		}
		
		$return = array(
			'result' => $result,
			'message' => $message
		);
		
		echo json_encode($return);
	}
	
	public function add_bot() {
		$login = $this->input->post('login');
		$pass = $this->input->post('password');
		$log_mod = $this->input->post('log_mod');
		
		if (strlen($login) > 0 && strlen($pass) > 0) {
			$this->db->where('login', $login);
			$rslt = $this->db->get('bots');
			
			if ($rslt->num_rows() < 1) {
				$postData = array(
					'login' => $login,
					'password' => $pass,
					'log_mod' => $log_mod,
					'tag_list' => 'follow4follow,f4f,cute,cats',
					'tag_blacklist' => 'rain,thunderstorm'
				);
				$this->db->insert('bots', $postData);
				
				$result = array(
					'result' => 'success',
					'message' => "Bot '$login' has been added"
				);
			} else {
				$result = array(
					'result' => 'error',
					'message' => "Bot '$login' already exist"
				);
			}
		} else {
			$result = array(
				'result' => 'error',
				'message' => "Login or password should not be empty"
			);
		}
		
		echo json_encode($result);
	}
	
	public function update_bot($id) {
		$result = array();
		
		if (count($this->input->post()) > 0) {
			$thisArray = $this->input->post();
			if (strlen($thisArray['password']) < 1) {
				unset($thisArray['password']);
			}
			$this->db->set($thisArray);
			$this->db->where('bot_id', $id);
			$this->db->update('bots');
			
			if ($this->db->affected_rows() > 0) {
				$status = 'success';
				$message = "Bot config updated";
				
				if ($this->instabot_model->check_this_bot($id)) {
					$this->instabot_model->restart_bot($id);
					$message .= " and restarting.";
				}
			} else {
				$status = 'error';
				$error = $this->db->error();
				$message = $error['message'];
			}
			
			if ($status == 'error') {
				$message = 'Bot config NOT updated.';
			}
			
			$result = array(
				'result' => $status,
				'pid' => (int)$this->instabot_model->get_bot_pid($id),
				'message' => $message
			);
		}
		
		echo json_encode($result);
	}
	
	public function bot_settings($id) {
		echo $this->instabot_model->get_settings($id);
	}
	
	public function get_bot_stats($login) {
		$url = "https://www.instagram.com/$login/?__a=1";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec ($ch);
		curl_close ($ch);
		
		echo $result;
	}
	
	public function redirect($page) {
		redirect("$page", 'location', 301);
	}
	
}
