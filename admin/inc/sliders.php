<?php

class Sliders{

        public $db;

    public function __construct()
    {
        $this->db = new Db();      
    }

    public function addSlider($data){        
        $mn_sl_title = $mn_sl_btn = $mn_sl_description = $mn_sl_btn_url = null;
         $mn_sl_title = trim(htmlspecialchars($data['mn_sl_title'])); 
         $mn_sl_description = trim(htmlspecialchars($data['mn_sl_description'])); 
         $mn_sl_btn = trim(htmlspecialchars($data['mn_sl_btn'])); 
          $mn_sl_btn_url = trim(htmlspecialchars($data['mn_sl_btn_url']));

         if(empty($mn_sl_title) || empty($mn_sl_description) || empty($mn_sl_btn)){
            $msg['err'] = "Fields must not be empty";
            return $msg;
         }
         $query = "INSERT INTO mn_sliders(mn_sl_title,mn_sl_description,mn_sl_btn,mn_sl_btn_url)VALUES('$mn_sl_title','$mn_sl_description','$mn_sl_btn','$mn_sl_btn_url');";
         $msg = [];
         $stmt = $this->db->pdo->prepare($query);
         $result = $stmt->execute();
         if($result){
            $msg['success'] = "Insert slider successfull";
             return $msg;
         }else{
            $msg['err'] = "There is some problem";
             return $msg;
         }
        
    }
    public function getSliders(){
        $query = "SELECT * FROM mn_sliders";
        $stmt = $this->db->pdo->prepare($query);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $result = $stmt->fetchAll();
            return $result;
        }      

    }


}