<?php

?>

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Table_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function fetch_data(){
        $result = $this->db->query("INSERT * INTO `user`(`email`, `student_number`, `degree_program`, `classification`, `books_borrowed`, `password`, `first_name`, `middle_name`, `last_name`, `sex`, `birth_date`, `employee_number`, `is_student`, `is_faculty`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14]) ". $_POST['button'])->result();

        return $result;
		
    }
}
?>
