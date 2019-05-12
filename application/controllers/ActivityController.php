<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ActivityController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("ActivityModel");
    }

    function createActivity(){

        //$id_activity = $this->input->post('id_activity');
        $name_activity = $this->input->post('name_activity');
        $detail_activity = $this->input->post('detail_activity');
        $status = $this->input->post('status');
        $start_activity = $this->input->post('start_activity');
        $end_activity = $this->input->post('end_activity');
        $time_activity = $this->input->post('time_activity');
        $student_activity = $this->input->post('student_activity')
        

        $data = array(
            'id_activity' => null,
            'name_activity' => $name_activity,
            'detail_activity' => $detail_activity,
            'status' => $status, 
            'start_activity' => $start_activity,
            'end_activity' => $end_activity,
            'time_activity' => $time_activity,
            'student_activity' => $student_activity
        );

        $result =  $this->ActivityModel->insert($data);

        if($result){
            echo "<script>alert('Insert regrade success');window.location='http://localhost/Scrum_G2/';</script>";
        }else{
            echo "<script>alert('Insert regrade unsuccessful!!');window.history.back();</script>";
        }
    }

    function updateActivity(){

        $id_activity = $this->input->post('id_activity');
        $name_activity = $this->input->post('name_activity');
        $detail_activity = $this->input->post('detail_activity');
        //$status = $this->input->post('status');
        $start_activity = $this->input->post('start_activity');
        $end_activity = $this->input->post('end_activity');
        $time_activity = $this->input->post('time_activity');
        $student_activity = $this->input->post('student_activity')
        

        $data = array(
            'id_activity' => $id_activity,
            'name_activity' => $name_activity,
            'detail_activity' => $detail_activity,
            //'status' => $status, 
            'start_activity' => $start_activity,
            'end_activity' => $end_activity,
            'time_activity' => $time_activity,
            'student_activity' => $student_activity
        );

        $result =  $this->ActivityModel->update($data);

        if($result){
            echo "<script>alert('Update regrade success');window.location='http://localhost/Scrum_G2/';</script>";
        }else{
            echo "<script>alert('Update regrade unsuccessful!!');window.history.back();</script>";
        }
    }

    function updateStatusActivity(){

        $id_activity = $this->input->post('id_activity');
        //$name_activity = $this->input->post('name_activity');
        //$detail_activity = $this->input->post('detail_activity');
        $status = $this->input->post('status');
        //$start_activity = $this->input->post('start_activity');
        //$end_activity = $this->input->post('end_activity');
        //$time_activity = $this->input->post('time_activity');
        //$student_activity = $this->input->post('student_activity')
        

        $data = array(
            'id_activity' => $id_activity,
            //'name_activity' => $name_activity,
            //'detail_activity' => $detail_activity,
            'status' => $status 
            //'start_activity' => $start_activity,
            //'end_activity' => $end_activity,
            //'time_activity' => $time_activity,
            //'student_activity' => $student_activity
        );

        $result =  $this->ActivityModel->update($data);

        if($result){
            echo "<script>alert('Update regrade success');window.location='http://localhost/Scrum_G2/';</script>";
        }else{
            echo "<script>alert('Update regrade unsuccessful!!');window.history.back();</script>";
        }
    }


}