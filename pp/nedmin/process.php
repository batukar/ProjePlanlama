<?php
include 'connect.php';
ob_start();
session_start();


//admin kayıt
if (isset($_POST['signup'])) {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    //şifre uyuşma kontrolü
    if ($password_1 === $password_2) { // 3tane eşittir 
        //echo 'şifreler aynı';

        //şifre 6dan büyük veya eşitse
        if (strlen($password_1) >= 6) {
            //echo 'başarılı';
            $admin_control = $db->prepare("SELECT * FROM user");
            $admin_control->execute();

            $has_admin = $admin_control->rowCount();

            if ($has_admin == 0) { // çift eşittir 

                $pass = md5($password_2);
                //md5 =>> '123456' -> e10adc3949ba59abbe56e057f20f883e

                $admin_signup = $db->prepare("INSERT INTO user SET
                    user_name='$user_name',
                    email='$email',
                    password='$pass'
                ");
                $insert = $admin_signup->execute();

                if ($insert) {
                    // echo 'başarılı';
                    header("Location: login.php?status=ok&user_name=$user_name");
                } else {
                    // echo 'başarısız';
                    header("Location: login.php?register=no#signup");
                }
            } else {
                // echo 'kayıtlı admin mevcut';
                header("Location: login.php?register=hasadmin#signup");
            }
        } else {
            // echo 'şifre 6 karakterden az';
            header("Location: login.php?register=lowchar#signup");
        }
    } else {
        // echo 'şifreler farklı';
        header("Location: login.php?register=inequal#signup");
    }
}

//admin giriş
if (isset($_POST['login'])) {
    $user_name = $_POST['user_name'];
    $pass = md5($_POST['password']);

    $login = $db->prepare("SELECT * FROM user WHERE user_name='$user_name' and password='$pass'");
    $login->execute();

    $count = $login->rowCount();

    if ($count == 1) {
        $_SESSION['user_name'] = $user_name;
        header("Location: index.php");
    } else {
        header("Location: login.php?login=no");
    }
}

// ? update && insert

// skill insert
if (isset($_POST['insert_skills'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $first_skill = $_POST['first_skill'];
    $second_skill = $_POST['second_skill'];
    $third_skill = $_POST['third_skill'];
    $forth_skill = $_POST['forth_skill'];
    $first_counter = $_POST['first_counter'];
    $second_counter = $_POST['second_counter'];
    $third_counter = $_POST['third_counter'];
    $forth_counter = $_POST['forth_counter'];
    $cv = $_POST['cv'];

    $insert_skill = $db->prepare("INSERT INTO skills SET
        title='$title',
        content='$content',
        first_skill='$first_skill',
        second_skill='$second_skill',
        third_skill='$third_skill',
        forth_skill='$forth_skill',
        first_counter='$first_counter',
        second_counter='$second_counter',
        third_counter='$third_counter',
        forth_counter='$forth_counter',
        cv='$cv'
    ");
    $insert = $insert_skill->execute();

    if ($insert) {
        header("Location: skill.php?insert=ok");
    } else {
        header("Location: skill.php?insert=no");
    }
}

// skill update
if (isset($_POST['update_skills'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $first_skill = $_POST['first_skill'];
    $second_skill = $_POST['second_skill'];
    $third_skill = $_POST['third_skill'];
    $forth_skill = $_POST['forth_skill'];
    $first_counter = $_POST['first_counter'];
    $second_counter = $_POST['second_counter'];
    $third_counter = $_POST['third_counter'];
    $forth_counter = $_POST['forth_counter'];
    $cv = $_POST['cv'];

    $update_skill = $db->prepare("UPDATE skills SET
        title='$title',
        content='$content',
        first_skill='$first_skill',
        second_skill='$second_skill',
        third_skill='$third_skill',
        forth_skill='$forth_skill',
        first_counter='$first_counter',
        second_counter='$second_counter',
        third_counter='$third_counter',
        forth_counter='$forth_counter',
        cv='$cv' WHERE skill_id=1
    ");
    $update = $update_skill->execute();

    if ($update) {
        header("Location: skill.php?update=ok");
    } else {
        header("Location: skill.php?update=no");
    }
}
