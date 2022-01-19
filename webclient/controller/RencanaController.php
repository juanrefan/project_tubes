<?php


class RencanaController{

    

    public function index(){

    

            $submitpress = filter_input(INPUT_POST,'submt');
            if(isset($submitpress)){
                $id=filter_input(INPUT_POST,'ids');
                $jadwal=filter_input(INPUT_POST,'jadwal');
                $mahasiswanim= filter_input(INPUT_POST,'mahasiswas');
                $sendata= array('id'=>$id,'jadwal_id'=>$jadwal,'mahasiswa_nim'=>$mahasiswanim);
                $response = Utility::curl_post(Apiservice::ADD_rencana_URL,$sendata);
                $result = json_decode($response);
                if($result){
                    echo '<div>data successfully added</div>';
                }else{
                    echo '<div>failed added data</div>';
                }
              
//            $category = new Categoryy();
//            $book->setName($name);
//            $result=$this->bokdao->InsertCategory($book);
            }

        $response=Utility::curl_get(Apiservice::FETCH_rencana_URL,array());
        $rencanas=json_decode($response);
        include_once "pages/rencana_page.php";
         

        
        
    }

    public function delete(){
        $Delets = filter_input(INPUT_GET, 'delet');
        if (isset($Delets)) {
            $response = Utility::curl_post(Apiservice::DELETE_rencana_URL,array("request_id"=>$Delets));
            $result = json_decode($response);
            if($result->status==1){
                header("location: ?mn=rencana");
                echo '<div>data successfully added</div>';
            }else{
                echo '<div>failed added data</div>';
            }
//            if (isset($deleted)) {
//             $link= new PDO('mysql:host=localhost; dbname=dbpwl21','root','',
//              );
//              $link->setAttribute(PDO::ATTR_AUTOCOMMIT,false);
//              $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//              $query = 'DELETE FROM barang where id = ?';
//              $stmt=$link->prepare($query);
//             $stmt->bindParam(1,$deleted,PDO::PARAM_STR);
//              $link->beginTransaction();
//              if ($stmt->execute()) {
//                  $link->commit();
//                } else {
//                  $link->rollBack();
//                }
//                $link = null;
            }
    }

}
?>


