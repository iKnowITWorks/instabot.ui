<?php
class Instabot_model extends CI_Model {
    private $pid;
	
	public function __construct() {
		parent::__construct();
		$this->lang->load('page', 'english');
		$this->bcode = 'ZzBnMGcw';
	}
	
	public function get_bot_list() {
		$rslt = $this->db->get('bots');
		
		return $rslt->result();
	}
	
	public function check_this_bot($id) {
		$PID = $this->get_bot_pid($id);
		if (!is_null($PID) && $PID > 0) {
			exec("ps $PID", $ProcessState);
			return (count($ProcessState) >= 2) ? 1 : 0;
		}
		return 0;
	}
	
	public function start_bot($id) {
		$PID = $this->get_bot_pid($id);
		$bot_login = $this->get_bot_login($id);
		
		if (! $this->check_this_bot($id)) {
			$py_script = '/usr/src/instabot.py/autobots.py';
			$command = "python $py_script $bot_login > /dev/null 2>&1 & echo $!";
			exec($command, $op);
			$this->pid = (int)$op[0];
			
			$this->update_bot($id, 'start', $this->pid);
			$return = array(
				'result' => 'success',
				'pid' => $this->pid,
				'message' => $this->lang->line('bot_started')
			);
		} else {
			$return = array(
				'result' => 'error',
				'pid' => $PID,
				'message' => $this->lang->line('bot_in_background')
			);
		}
		
		return json_encode($return);
	}
	
	public function stop_bot($id) {
		$PID = $this->get_bot_pid($id);
		
		if ($PID) {
			$command = "kill -9 $PID";
			exec($command);
			
			$this->update_bot($id, 'stop');
			$return = array(
				'result' => 'success',
				'pid' => $PID,
				'message' => $this->lang->line('bot_stopped')
			);
		} else {
			$return = array(
				'result' => 'error',
				'pid' => $PID,
				'message' => $this->lang->line('pid_not_found')
			);
		}
		
		return json_encode($return);
	}
	
	public function restart_bot($id) {
		$PID = $this->get_bot_pid($id);
		
		if ($PID) {
			$is_stopped = json_decode($this->stop_bot($id));
			if ($is_stopped->result == 'success') {
				$restarted = json_decode($this->start_bot($id));
				$return = array(
					'result' => 'success',
					'pid' => $restarted->pid,
					'message' => $this->lang->line('bot_restarted')
				);
			} else {
				$return = array(
					'result' => 'error',
					'pid' => $PID,
					'message' => $this->lang->line('bot_did_not_start')
				);
			}
		} else {
			$return = array(
				'result' => 'error',
				'pid' => $PID,
				'message' => $this->lang->line('pid_not_found')
			);
		}
		
		return json_encode($return);
	}
	
	public function get_settings($id) {
		$this->db->where('bot_id', $id);
		$bots = $this->db->get('bots');
		$return = $bots->row();
		
		return json_encode($return);
	}
	
	public function convertImage($path) {
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		return $base64;
	}
	
	public function format_uri($string, $separator = '-') {
		$accents_regex = '~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i';
		$special_cases = array( '&' => 'and', "'" => '');
		$string = mb_strtolower( trim( $string ), 'UTF-8' );
		$string = str_replace( array_keys($special_cases), array_values( $special_cases), $string );
		$string = preg_replace( $accents_regex, '$1', htmlentities( $string, ENT_QUOTES, 'UTF-8' ) );
		$string = preg_replace("/[^a-z0-9]/u", "$separator", $string);
		$string = preg_replace("/[$separator]+/u", "$separator", $string);
		return $string;
	}

	public function encrypt_this($str) {
		$encrypt = base64_encode($str);
		
		$encrypt = preg_replace("/==$/", '', $encrypt);
		$encrypt = base64_encode($this->bcode."$encrypt".$this->bcode);
		
		return $encrypt;
	}
	
	public function decrypt_this($str) {
		$decrypt = base64_decode($str);
		
		$decrypt = preg_replace("/".$this->bcode."/", "", $decrypt);
		$decrypt = "{$decrypt}==";
		
		return base64_decode($decrypt);
	}
	
	public function get_bot_pid($id) {
		$this->db->where('bot_id', $id);
		$this->db->select('pid');
		$rslt = $this->db->get('bots')->row();
		
		return $rslt->pid;
	}
	
	public function get_bot_login($id) {
		$this->db->where('bot_id', $id);
		$this->db->select('login');
		$rslt = $this->db->get('bots')->row();
		
		return $rslt->login;
	}
	
	private function update_bot($id, $status, $pid='') {
		if ($status == 'start') {
			$updateData = array(
				'pid' => $pid,
				'start_time' => date("Y-m-d H:i:s")
			);
			$this->db->set($updateData);
			$this->db->where('bot_id', $id);
			$this->db->update('bots');
		} else if ($status == 'stop') {
			$this->db->set('pid', 'NULL', FALSE);
			$this->db->where('bot_id', $id);
			$this->db->update('bots');
		}
		
		//return $this->db->affected_rows();
	}
}
