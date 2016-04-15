<?php
session_start();

class Courses extends CI_Controller {
    //displays The course lineup page with current courses
    public function index()
    {
        $this->load->model("Course");
        $get_course = $this->Course->get_all_courses();
        // var_dump($get_course);
        // die();
        $this->load->view('course_lineup', ['course_info' => $get_course]);
    }
    //processes the adding of a new course and sending results back to course lineup page
    public function add_course(){
        // $course_info['name'] = $this->input->post('name'); 
        // $course_info['description'] = $this->input->post('description');
        var_dump($this);
        var_dump($this->input);
        die('this');
        $this->load->model("Course");
        $add_course = $this->Course->add_course($course_info);
        var_dump($add_course);
        die();
        $this->load->view('course_lineup', ['course_info' => $add_course]);  
    }
}


?>