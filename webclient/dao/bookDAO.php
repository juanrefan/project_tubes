<?php




class bookDAO{
    


 
    public function SelectBook()
    {
        $link= PDOUtil::createmySQLconnection();
        $result = $link->query("Select * from bok");
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,"Book");
        PDOUtil::closeConnection($link);
        return $result;
    }

    public function InsertBook(Buku $buku){
        $result=0;
        $link= PDOutil::createmySQLconnection();
        $query ="INSERT INTO barang(title,author,publisher,description,cover)values(?,?,?,?)";
        $stmt=$link->prepare($query);
        $stmt->bindValue(1,$buku->getTitle());
        $stmt->bindValue(2,$buku->getAuthor());
        $stmt->bindValue(3,$buku-> getPublisher());
        $stmt->bindValue(4,$buku->getDescription());
        $stmt->bindValue(5,$buku->getCover());
        $link->beginTransaction();
        if($stmt->execute()){
    
          $link->commit();
        }else{
           $link->rollBlack();
        }
        PDOUtil::closeConnection($link);
        return $result;
      
    }
   



}


?>