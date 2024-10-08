<?php 


    if(!isset($_SESSION)){
        session_start();
    }
        function signUp($doc) {
        global $conn;
        if(mysqli_query($conn,$doc))
        return true;

    }
    function checkId($uname,$sql){
        global $conn;
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,"s",$uname);
        mysqli_stmt_execute($stmt);
        $result =mysqli_stmt_get_result($stmt); 
        if(!$result || mysqli_num_rows($result)==0){
            return true;
        }
        else{
            return false;
        }
    }

    function setSession($uname,$sql) {
        $_SESSION['userLoggedIn'] = 1;
        global $conn;
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,"s",$uname);
        mysqli_stmt_execute($stmt);
        $result =mysqli_stmt_get_result($stmt);
        $temp=mysqli_fetch_array($result);
        $_SESSION['name'] = $temp['name'];
        $_SESSION['email'] = $temp['email'];
        return true;

    }

    function checkLogin(){
        if(!empty($_SESSION['userLoggedIn']) && $_SESSION['userLoggedIn'] == 1){
            return true;
        }
        else {
            return false;
        }
    }
    function removeAll() {
        unset($_SESSION['userLoggedIn']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
    }
    ?>