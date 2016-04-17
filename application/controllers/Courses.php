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
        $errors = array();
        if(empty($this->input->post('name'))) {
            $errors['coursename'] = "Course Name cannot be blank";
            }
        if(strlen($this->input->post('name')) < 15) {
            $errors['namelength'] = "Course Name must be at least 15 characters long";
            }
        if(empty($this->input->post('description'))) {
            $errors['coursedescription'] = "Course Description cannot be blank";
            }
        if(count($errors) > 0) {
            $errors_info['errors'] = $errors;
            $this->load->model("Course");
            $get_course = $this->Course->get_all_courses();
            $this->load->view('course_lineup', ['course_info' => $get_course, 'errors' => $errors_info]);
        // var_dump($errors_info);
        // die();
        }
        else {
        $course_info['name'] = $this->input->post('name'); 
        $course_info['description'] = $this->input->post('description');
        $this->load->model("Course");
        $add_course = $this->Course->add_course($course_info);
        redirect('/');
        // $this->load->view('course_lineup', ['course_info' => $add_course]);  
        }
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