<?php


function wh_log($msg){
    $logfile='log/log_'.date("Y-m-d").'.log';
    file_put_contents($logfile,$msg. "\n",FILE_APPEND);


}
?>
<?php
function databaseTest(){
    include('connection.php');

    if($conn){
        wh_log("#############################################");
        wh_log("The testing of database connection is succeed");
        wh_log("It has passed the test case");
        wh_log("Test case server name:".$servername);
        wh_log("Test case user name:".$username);
        wh_log("Test case database name:".$dbname);
        wh_log("#############################################");
    }
    else{
        wh_log("#############################################");
        wh_log("The testing of database connection is failed");
        wh_log("It has not passed the test case");
        wh_log("Test case server name:".$servername);
        wh_log("Test case user name:".$username);
        wh_log("Test case database name:".$dbname);
        wh_log("#############################################");
    }
}
databaseTest();



function admin_verify(){
    include('admin_verification.php');
    $passed=0;
    $failed=0;
    $count=0;
    $users=array("shubham","Shubham122","");
    $passwords= array("kukki303","ku");
    foreach($users as $user){
        foreach($passwords as $password){
            $count++;
            if(admin_verification($user,$password)){
                wh_log("#############################################");
                wh_log("The testing of admin verification is succeed");
                wh_log("It has passed the test case");
                wh_log("Test case user name:".$user);
                wh_log("Test case password name:".$password);
                wh_log("#############################################");
                $passed++;
            }
            else{
                wh_log("#############################################");
                wh_log("The testing of admin verification is failed");
                wh_log("It has not passed the test case");
                wh_log("Test case user name:".$user);
                wh_log("Test case password name:".$password);
                wh_log("#############################################");
                $failed++;
            }


        }
    }
    wh_log("Total test case executed ".$count);
    wh_log("Total test case passed ".$passed);
    wh_log("Total test case failed ".$failed);    
    
}
admin_verify();

function ngo_verify(){
    include('ngo_verification.php');
    $passed=0;
    $failed=0;
    $count=0;

    $users=array("shubham","abdshubham13@gmail.com","");
    $passwords= array("kukki303","1234");

    foreach($users as $user){
        foreach($passwords as $password){
            $count++;
            if(ngo_verification($user,$password)){
                wh_log("#############################################");
                wh_log("The testing of ngo verification is succeed");
                wh_log("It has passed the test case");
                wh_log("Test case user name:".$user);
                wh_log("Test case password name:".$password);
                wh_log("#############################################");
                $passed++;
            }
            else{
                wh_log("#############################################");
                wh_log("The testing of ngo verification is failed");
                wh_log("It has not passed the test case");
                wh_log("Test case user name:".$user);
                wh_log("Test case password name:".$password);
                wh_log("#############################################");
                $failed++;
            }


        }

    }
    wh_log("Total test case executed ".$count);
    wh_log("Total test case passed ".$passed);
    wh_log("Total test case failed ".$failed);
    
}
ngo_verify();


function mail_test(){
   // $doner_email="abdshubham13@gmail.com";
    //$doner_name="shubham";
    include('mail.php');
    $passed=0;
    $failed=0;
    $count=0;

    $doner_emails=array("shubham","abdshubham13@gmail.com","");
    //$doner_names= array("kukki303","1234");

    foreach($doner_emails as $doner_email){
        $count++;
            if(!$mail->send()) {
                wh_log("#############################################");
                wh_log("The testing of email transfer is failed");
                wh_log("It has not passed the test case");
                wh_log("Test case user email:".$doner_email);
                wh_log("Test case user name:".$doner_name);
                wh_log("#############################################");
                $failed++;
            } else {
                wh_log("#############################################");
                wh_log("The testing of email transfer is succeed");
                wh_log("It has passed the test case");
                wh_log("Test case user name:".$doner_email);
                wh_log("Test case user name:".$doner_name);
                wh_log("#############################################");
                $passed++
            }
        

        }

        wh_log("Total test case executed ".$count);
        wh_log("Total test case passed ".$passed);
        wh_log("Total test case failed ".$failed);
    

 }
mail_test();





function ngo_registration(){
    include('ngo_registration.php');
    $passed=0;
    $failed=0;
    if(ngo_registration($name, $chairman, $contact_no, $address, $email, $pass, $establishment_year)){
                wh_log("#############################################");
                wh_log("The testing of email transfer is failed");
                wh_log("It has not passed the test case");
                wh_log("Test case user email:".$email);
                wh_log("Test case user name:".$name);
                wh_log("#############################################");
                $passed++;
    }
    else{
        wh_log("#############################################");
        wh_log("The testing of email transfer is succeed");
        wh_log("It has passed the test case");
        wh_log("Test case user name:".$name);
        wh_log("Test case user name:".$email);
        wh_log("#############################################");
        $failed++

    }
        wh_log("Total test case passed ".$passed);
        wh_log("Total test case failed ".$failed);
}
ngo_registration();
?> 

