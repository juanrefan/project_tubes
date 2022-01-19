<?php

class UserController{

    public function index(){

        $log=filter_input(INPUT_POST,'log');
        if($log){

            $username=filter_input(INPUT_POST,'user');
            $password=filter_input(INPUT_POST,'pass');
        

            $parameter=array('username' => $username, 'password'=> $password);
            $response =  Utility::curl_post(ApiService::AUTHENTICATE_URL,$parameter);
            $result=json_decode($response);
            $user = $result->user_data;
            //var_dump($result);



            if($user != null && $user->username == $username){

                $_SESSION['mySession'] = true;
                $_SESSION['session_user']=$user->name;
                header("location:index.php");
            }else{
               echo '<div>invalid username or password</div>';
        }
        include_once 'pages/login.php';

  } 


    }
    public function logout(){


        session_unset();
        session_destroy();
        header("location: index.php");
    }


}
  
  

?>