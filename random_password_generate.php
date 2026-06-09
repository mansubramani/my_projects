<?php
function generatePassword($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $password = '';
    $charLength = strlen($characters);

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $charLength - 1);
        $password .= $characters[$randomIndex];
    }

    return $password;
}

echo "Your random password is: " . generatePassword(12);
?>
