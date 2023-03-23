<?php
    include 'lib/Database.php';

    class Admin{
        public $time;
        public $db;

        public function __construct(){
            $this->db = new Database();
            $this->time = date('d-m-y h:i:s');
        }

        /* select info */
        public function showInfo($id)
        {
            $sql = "SELECT * FROM `info_tbl` WHERE `info_id` = '$id'";
            $result = $this->db->select($sql);
            return $result;
        }

        /* add new info */
        public function addInfo($task, $img, $info_id)
        {
            $sql = "INSERT INTO `info_tbl`(`task_name`, `task_img`, `info_id`) VALUES ('$task','$img','$info_id')";
            $this->db->insert($sql);
        }
    }
