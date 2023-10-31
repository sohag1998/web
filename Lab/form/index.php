<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details</title>
    <?php 

        $host_name ="localhost";
        $user_name ="weblab";
        $password="weblab";
        $db_name ="student";

        $conn = new mysqli($host_name, $user_name, $password, $db_name);
        if($conn -> connect_error){
            die( "Faild to connect mysql" . $conn -> connect_error);
        }

        if(isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['password']) && isset($_POST['gender'])){

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = (string)md5($_POST['password']);
            $gender = $_POST['gender'];
            
            $sql = "INSERT INTO stu_reg(name, email, password, gender)
                    VALUES('$name', '$email', '$password', '$gender')";
            
            $result = $conn -> query($sql);
            
        }
    ?>
</head>
<style>
    body{
        margin: 0;
        background: #151644;
        font-family: monospace;
    }
    .container{
        width: 400px;
        margin: auto;
    }
    .content{
        margin-top: 100px;
        padding: 30px 20px;
        background: #fff;
        text-align: center;
        border: 2px solid #fff;
        border-radius: 20px;
    }
    .content h3{
        margin: 0;
        padding: 0;
        margin-bottom: 30px;
    }
    .container table{
        table-layout: auto;
        width: 100%;
    }
    .right{
        text-align: left;
    }
    form td input{
        margin: 5px 0;
        width: 98%;
        padding: 5px 2px;
        border: 1px solid #151644;
        border-radius: 5px;
    }
    .gender input{
        width: 30px;
    }
    .button{
        width: 35%;
        margin-top: 20px;
        padding:8px 30px;
        background: #151644;
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        border: 1px solid #151644;
        border-radius: 5px;

    }
</style>
<body>
    <div class="container">
        <div class="content">
        <h3>Personal details</h3>
            <form method="POST">
                <table>
                    <tr>
                        <td class="right"><label for="name">First Name: </label></td>
                        <td><input type="text" id="name" name="name"></td>
                    </tr>
                    <tr>
                        <td class="right"><label for="email">Email: </label></td>
                        <td><input type="email" id="email" name="email"></td>
                    </tr>
                    <tr>
                        <td class="right"><label for="pass">Password: </label></td>
                        <td><input type="password" id="pass" name="password"></td>
                    </tr>
                    <tr>
                        <td class="right"><label for="">Gender: </label></td>
                        <td class="gender">
                            <input type="radio" name="gender" id="male" value="male" checked>
                            <label for="male">Male</label>
                            <input type="radio" name="gender" id="female" value="female">
                            <label for="female">Female</label>
                        </td>
                    </tr>
                </table>
                <input class="button" type="button" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>