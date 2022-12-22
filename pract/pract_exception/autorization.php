<?php
require_once 'WrongLoginException.php';
require_once 'WrongPasswordException.php';
class Autorizaton
{

    public static function autorization($login, $password, $confirmPassword)
    {
        try {

            if (strlen($login) > 20 || !(preg_match("#^[A-Za-z0-9\_]+$#", $login))) {
                throw new WrongLoginException('WrongLoginException');
            }
            if (strlen($password) > 20 || !(preg_match("#^[A-Za-z0-9\_]+$#", $password)) || $password != $confirmPassword) {
                throw new WrongPasswordException('WrongPasswordException');
            }
            echo ('успешно');
        } catch (WrongLoginException $e) {
            echo "false";
            echo $e->getMessage(), "\n";
            return false;
        } catch (WrongPasswordException $t) {
            echo "false";
            echo $t->getMessage(), "\n";
            return false;
        }
        return true;
    }
}

$user = new Autorizaton();
$user->autorization('Use_1', 'Us_e1r', 'Us_er1r');