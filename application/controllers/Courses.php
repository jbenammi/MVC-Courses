<?php
session_start();

class Courses extends CI_Controller {
    //displays The course lineup page with current courses
    
    // public function __construct(){
    //     parent::__construct();
    //     $this->output->enable_profiler('true');
    // }
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
        $course_info['name'] = $this->input->post('name'); 
        $course_info['description'] = $this->input->post('description');
        $this->load->model("Course");
        $add_course = $this->Course->add_course($course_info);
        redirect('/');
        // $this->load->view('course_lineup', ['course_info' => $add_course]);  
    }
    public function destroy($num){
        $this->load->model("Course");
        $get_course = $this->Course->get_course_by_id($num);
        // var_dump($get_course);
        // die();
        $this->load->view('course_delete', ['course_info' => $get_course]);
    }
    public function remove($num){
        $this->load->model("Course");
        $remove_course = $this->Course->remove_course($num);
        $get_course = $this->Course->get_all_courses();
        redirect('/');
        // $this->load->view('course_lineup', ['course_info' => $get_course]);
    }

}


?>