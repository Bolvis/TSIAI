<pre>
<?php

if(isset ($_COOKIE['jezyk']))
{
    echo $_COOKIE['jezyk'].'</br>';
    switch ($_COOKIE['jezyk'])
    {
        default:echo 'you have cookie</br>';
        break;
        case 'pl':echo 'masz ciasteczko</br>';
        break;
        case 'es':echo 'tienes una galleta</br>';
        break;
        case 'fr':echo 'vous avez un cookie</br>';
        break;
        case 'ru':echo 'у тебя есть печенье</br>';
        break;
        case 'de':echo 'Du hast einen Keks</br>';
        break;
    }
}else {
    echo 'Nie ma ciastka';
    setcookie('jezyk',$jezyk);
}