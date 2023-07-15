<?php



// create connection

mysql_connect("localhost","root","") or die (mysql_error());
echo <script>

mysql_select_db("login") or die (mysql_error());

if(isset($_POST["signup"]))
{
    
     echo  $username=$_POST['username'];
    
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phoneCode=$_POST['phoneCode'];
    
    $phone=$_POST['phone'];
    
$query="insert into register (username,password,email,gender,phoneCode,phone) values ('$username','$password','$email','$gender','$phoneCode','$phone')";
    
    if(mysql_query){
        
        echo"<h3> You have register!! </h3>";
        
        
    }
        

if(!empty($username) || !empty($password) || !empty($gender) || !empty($email)  || !empty($ohoneCode)  || !empty($phone)) {
    
    #code
    
} else{
    
    echo "All field are required";
    
    die();
}
}
    ?>

        


//if(mysqli_connect_error()) {
//    
//        die('Connect Error('. mysqli_connect-errno(). ')'. mysqli_connect_error());
//    
//}
//    
//    else {
//        
//        // ? - for preface statemnt limit 1-atleast one row it will select
//        
//        $SELECT="Select email From register Where email = ? Limit 1";
//        
//        //value what ? ? ? ? ? //
//        
//        $Insert = "Insert Into register (username, password, gender, email, phoneCode. phone ) values (?,?,?,?,?,?)"
//            
//            //prepare statement for SELECT query
//            
//            //getting data from column eamil only
//            
//            $stmt= $conn ->prapare($SELECT);
//        
//        $stmt ->bind-param("s", $email);
//        
//        $stmt- >execute();
//        
//        $stmt-> bind_result($email);
//        
//        $stmt -> store_rsult();
//        
//        
//        //how many rows selcted
//        
//        
//        $rnum = $stmt-> num_rows; 
//        
//        
//        
//        if($rnum==0) {
//            
//            $stmt ->close();
//            
//            $stmt= $conn ->prepare($Insert);
//            
//            
//        }
//        
//        
//        
//        
//            
//            
//        
//        
//    }
//
//
