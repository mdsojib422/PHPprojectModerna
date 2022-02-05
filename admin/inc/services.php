<?php 
class Services{
    private $db;

    function __construct(){
        $this->db = new Db();
    }
    function getServices(){
        $sql = "SELECT ys_services FROM ys_homepage";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $data = $stmt->fetchAll();
            return $data;
        }
    }
 
    function addService($data){
        $srvName = $data['mn_srv_title'];
        $srvDescription = $data['mn_srv_description'];
        $srvIcon_select = $data['mn_srv_icon'];
        $mn_srv_color = $data['mn_srv_color'];

        $sql = "INSERT INTO mn_services(mn_srv_title,mn_srv_description,mn_srv_icon,mn_srv_color)VALUES('$srvName','$srvDescription','$srvIcon_select','$mn_srv_color');";
        $stmt = $this->db->pdo->prepare($sql);
        if($stmt->execute()){
            $msg =  "Insert successfull";
            return $msg;
        }
    }


}
