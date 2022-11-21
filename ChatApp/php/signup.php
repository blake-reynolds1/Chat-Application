<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        // check user email is valid or not
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){  //if email is valid
            // check to see if the email already exists in the database 
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){ //if email already exists
                echo "$email - This email already exists";
            }else{
                //check to see if user upload img
                if(isset($_FILES['image'])){ //if file is uploaded & $_FILES[] return us an array with file name, type, error, size, tmp_name
                    $img_name = $_FILES['image']['name']; //get user upload img name
                    $tmp_name = $_FILES['image']['tmp_name']; //temp name is used to save/move file in the folder

                    //explode image & get the last extension like jpg png
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode); // get the extension of an user uploaded img file

                    $extensions = ['png', 'jpeg', 'jpg']; //valid img extensions & stored in an array
                    if(in_array($img_ext, $extensions) === true){ // if user uploaded img extention that is valid
                        $time = time(); // return us the current time..need the time b/c when you upload the user img to in the folder
                                        // we rename user file with current time so all the img file will have a unique name
                        //move the user uploaded img to our particular folder
                        $new_img_name = $time.$img_name;
                        // move_uploaded doesn't work at all unless I do move_uploaded_file($tmp_name, "images/"/$new_img_name) but get php 500 error in signup.js
                        // if I remove this if statment then i get the same error
                         if(move_uploaded_file($tmp_name, "images/".$new_img_name)){ //if user uploaded img move to our folder succesfully
                            $status = "Active now"; // once user is signed up then his status will be active now)
                            $random_id = rand(time(), 10000000); //create random id for user

                            //insert all the user data inside the table 
                            $sql2 = mysqli_query($conn, "INSERT INTO users ('unique_id', 'fname', 'lname', 'email', 'password', 'img', 'status')
                                                VALUES ('{$random_id}', '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");
                            if($sql2){ // if these data inserted
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if(mysqli_num_rows($sql3) > 0){
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id']; //use this session we used user unique_id in other php file
                                    echo "success"; 
                                }
                            }else{
                                echo "Something went wrong";
                            }
                        } else{ // this else is for testing 
                            echo "nope";
                        }
                    }else{
                        echo "Please select an image file - jpg, jpeg, png";
                    }
                }else{
                    echo "Please select an Image for your profile";
                }
            }
        }else{
            echo "$email - This is not a valid email";
        }
    }else{
        echo "All input field are required!";
    }
?>