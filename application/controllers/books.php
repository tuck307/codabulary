<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books extends MY_Controller {
	
	public function index(){	


            $config['hostname'] = "localhost";
            $config['username'] = "root";
            $config['password'] = "";
            $config['database'] = "Books";
            $config['dbdriver'] = "mysql";
            $config['dbprefix'] = "";
            $config['pconnect'] = FALSE;
            $config['db_debug'] = TRUE;
            $config['cache_on'] = FALSE;
            $config['cachedir'] = "";
            $config['char_set'] = "utf8";
            $config['dbcollat'] = "utf8_general_ci";

            $this->load->database($config);

            $query = $this->db->query('SELECT * from user');

            foreach ($query->result() as $row)
            {
                echo $row->first;
                echo $row->last;
                echo $row->email;
            }

            echo 'Total Results: ' . $query->num_rows();

            $this->title = "Codabulary";
            $this->keywords = "code, java";
            $this->_render('pages/books.php');
            $this->db->close();
	}
        
	
}