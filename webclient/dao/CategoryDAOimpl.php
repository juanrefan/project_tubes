<?php




class CategoryDAOimpl{


 
    public function SelectCategory()
    {
        $link= PDOUtil::createmySQLconnection();
        $result = $link->query("Select * from category");
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,"Categoryy");
        PDOUtil::closeConnection($link);
        return $result;
    }

    public function InsertCategory(Category $category){
        $result=0;
        $link= PDOutil::createmySQLconnection();
        $query ="INSERT INTO category(name)values(?)";
        $stmt=$link->prepare($query);
        $stmt->bindValue(1,$category->getName());
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