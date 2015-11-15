

<?php
// $birthdayDate = ["year" => ...,"month" => ...,"day" => ...]
function age($birthdayDate) {
    $age=  idate('Y')-$birthdayDate['year'];
    if(idate('m') > $birthdayDate['month']){
        return $age;
    } elseif (idate('m') == $birthdayDate['month']){
        if (idate('d') >= $birthdayDate['day']){
            return $age;
        } else {
            return $age-1;
        }
    } else {
        return $age - 1;
    }   
}

