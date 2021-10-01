<?php
class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_news_by_id($id){
            
            $query=$this->db->get_where('news',['id'=>$id]);
            
            return $query->row();
        }
        public function get_news_by_user()
        {
            $query = $this->db->get_where('news', array('user_id' => $this->session->userdata('user')->user_id));
            return $query->result();
        }
        public function get_news($slug = FALSE)
        {
            if ($slug === FALSE)
            {
                    // $this->db->limit(3);
                    $this->db->order_by('id','desc');
                    $this->db->select(['id','title','name','text','slug']);
                    $this->db->join('users', 'users.user_id = news.user_id');
                    $query = $this->db->get('news');
                    // $query=$this->db->select('*')->from('news')->get();
                    return $query->result();
            }

            $query = $this->db->get_where('news', array('slug' => $slug));
            return $query->row();
        }
        public function set_news()
        {
            $this->load->helper('url');

            $slug = url_title($this->input->post('title'), 'dash', TRUE);

            $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'text' => $this->input->post('text'),
                'user_id'=>$this->session->userdata('user')->user_id,
            );

            return $this->db->insert('news', $data);
        }
        public function update_news($id)
        {
            $this->load->helper('url');

            $slug = url_title($this->input->post('title'), 'dash', TRUE);

            $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'text' => $this->input->post('text')
            );
            $this->db->where('id',$id);
            return $this->db->update('news', $data);
        }
        public function delete_news($id){
            $this->db->where('id',$id);
            return $this->db->delete('news');
        }
}