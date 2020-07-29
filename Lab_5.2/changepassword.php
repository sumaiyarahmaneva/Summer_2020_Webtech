<?php
    session_start();
    if(!empty($_SESSION))
    {
        if(empty($_SESSION['status']))
        {
            header('location:Login.html');
        }
    }
    else
    {
        if(empty($_COOKIE['status']))
        {
            echo $_COOKIE['status'];
            header('location:Login.html');
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>CHANGEPASSWORD</title>
</head>
<body>
    <fieldset>
        <p>X-Company</p>
        <?php
            if(!empty($_SESSION))
            {
                echo "<p align='right'>Logged in as <a href='viewprofile.php'>".$_SESSION['username']."</a>|<a href='logout.php'>Logout</a></p>";
            }
            else
                echo "<p align='right'>Logged in as <a href='viewprofile.php'>".$_COOKIE['userName']."</a>|<a href='logout.php'>Logout</a></p>";
        ?>
    </fieldset>
    <fieldset>
        <table width="100%" border="1">
            <tr>
                <td rowspan="6" width="30%">
                    Account
                    <hr/>
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="viewprofile.php">View Profile</a></li>
                        <li><a href="editprofile.php">Edit Profile</a></li>
                        <li><a href="changeprofilepicture.php">Change Profile Picture</a></li>
                        <li><a href="changepassword.php">Change Password</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </td>
                <td rowspan="6">
                    <fieldset>
                        <legend><b>CHANGE PASSWORD</b></legend>
                        <form method="post">
                            <table>
                                <tr>
                                    <td><font size="3">Current Password</font></td>
                                    <td>:</td>
                                    <td><input type="password" name="password" /></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><font size="3" color="blue">New Password</font></td>
                                    <td>:</td>
                                    <td><input type="password" name="newpassword" /></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><font size="3" color="red" >Retype New Password</font></td>
                                    <td>:</td>
                                    <td><input type="password" name="renewpassword"/></td>
                                    <td></td>
                                </tr>
                            </table>
                            <hr />
                            <input type="submit" name="submit" value="submit" />
                        </form>
                    </fieldset>
                </td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
            <p align="center">Copyright © 2017 </p>
    </fieldset> 
</body>
<?php
    if(isset($_POST['submit']))
    {
        if(!empty($_SESSION))
        {
            if($_SESSION['password']==$_POST['password'])
            {
                if($_POST['newpassword']==$_POST['renewpassword'])
                {
                    $_SESSION['password']=$_POST['newpassword'];
                    echo "Password Changed";
                }
                else
                    echo "New password must be same as old password";
            }
            else
                echo "Current Password is not correct";
        }
        elseif(!empty($_COOKIE['password']))
        {
            if($_COOKIE['password']==md5($_POST['password']))
            {
                if($_POST['newpassword']==$_POST['renewpassword'])
                {
                    setcookie('password',$_POST['password'],time()+3600,'/');
                    echo "Password is Changeded";
                }
                else
                    echo "New password must be same as old password";
            }
            else
                echo "Current Password is not correct";
        }
    }
    
?>