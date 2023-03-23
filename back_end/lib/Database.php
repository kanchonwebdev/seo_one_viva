<?php
  include "config/config.php";

  class Database{
      public $host = DB_HOST;
      public $user = DB_USER;
      public $dbname = DB_NAME;
      public $pass = DB_PASS;


      public $link;
      public $error;

      public function __construct(){
          $this->connectDB();
      }
      //database connection query
      private function connectDB(){
          $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
          if (!$this->link){
              $this->error = "Connection Failed".$this->link->connect_error;
              return false;
          }
      }

      //database select query
      public function select($query){
          $result = $this->link->query($query) or die($this->link->error.__LINE__);
          if ($result->num_rows > 0){
              return $result;
          }else{
              return false;
          }
      }

      //database insert query
      public function insert($query){
          $insert_row  = $this->link->query($query) or die($this->link->error.__LINE__);
          if ($insert_row){
              return $insert_row;
          }else{
              return false;
          }
      }

      //databes update query
      public function update($query){
          $update_row = $this->link->query($query) or die($this->link->error.__LINE__);
          if ($update_row){
              return $update_row;
          }else{
              return false;
          }
      }

      //database delete query
      public function delete($query){
          $delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
          if ($delete_row){
              return $delete_row;
          }else{
              return false;
          }
      }
  }
