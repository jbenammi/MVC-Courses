<?php 

class Course extends CI_Model {
     function get_all_courses()
     {
        $query = "SELECT * FROM courses";
        // var_dump($this->db->query($query)->result_array());
         return $this->db->query($query)->result_array();
     }
     function get_course_by_id($course_id)
     {
         return $this->db->query("SELECT * FROM courses WHERE id = ?", array($course_id))->row_array();
     }
     function add_course($course)
     {
         $query = "INSERT INTO Courses (name, description, created_on) VALUES ('".$course['name']."','".$course['description']."', now())";
         $this->db->query($query);
         $query2 = "SELECT * FROM courses";
         return $this->db->query($query2)->result_array();
     }
}

 ?>