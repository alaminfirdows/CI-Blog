<?php
	class Post_model extends CI_Model {
		function __construct() {
			$this->load->database();
		}

		public function get_posts($slug = FALSE) {
			if ($slug === FALSE) {
				$this->db->order_by('id', 'DESC');
				$query = $this->db->get('posts');
				return $query->result_array();
			}

			$query = $this->db->get_where('posts', array('slug' => $slug));
			return $query->row_array();
		}

		public function add_post() {
			$data = array(
				'title' => $this->input->post('title'),
				'slug' => url_title($this->input->post('title')),
				'content' => $this->input->post('content')
			);

			return $this->db->insert('posts', $data);
		}
	}