<?php
include '../includes\init.php';

session_start();
if(isset($_POST['login'])){
    $name = $_POST['uname'];
    $name = filter_var($name, FILTER_SANITIZE_STRING) ;

    $password = sha1($_POST['password']);
    $password = filter_var($password,FILTER_SANITIZE_STRING);

    $select_admin = $conn->prepare("SELECT * FROM `admins` WHERE name = ? AND password = ?");
    $select_admin->execute([$name, $password]);

    
    if($select_admin_id->rowCount() > 0){
        $fetch_admin_id = $select_admin->fetch(PDO::FETCH_ASSOC);
        $_SESSION['admin_id'] = $fetch_admin_id['id'];
        $message[] = 'Login Worked!';
    }else{
        $message[] = 'Incorrect Username/Password';
    }
}

?>
<style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}
        
        input[type=text], input[type=password] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
        }
        
        button {
          background-color: #04AA6D;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
        }
        
        button:hover {
          opacity: 0.8;
        }
        
        .cancelbtn {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
        }
        
        .imgcontainer {
          text-align: center;
          margin: 24px 0 12px 0;
        }
        
        img.avatar {
          width: 40%;
          border-radius: 50%;
        }
        
        .container {
          padding: 16px;
        }
        
        span.psw {
          float: right;
          padding-top: 16px;
        }
        
        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
          span.psw {
             display: block;
             float: none;
          }
          .cancelbtn {
             width: 100%;
          }
        }

        .message
        </style>
    </head>
    <body class="p-5 " style="margin: auto">
        <?php
            if(isset($message)){
                foreach($message as $message){
                    echo '
                        <div>
                            <span>
                                '.$message.'
                            </span>
                            <i class="fa fa-times" onclick="this.parentElement.remove();"></i>
                        </div>
                    ';
                }
            }
        ?>
        <h2 class="mx-auto">Admin Login</h2>
        <form action="/action_page.php" method="post">
          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" oninput="this.value = this.value.replace(/\s/g, '')" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" oninput="this.value = this.value.replace(/\s/g, '')" required>
            <input type="submit" value="Login" name="login">
          </div>
        </form>
    </body>
</html>