<?php


class Osoba
{
    private $name;
    private $surname;
    private $sex;
    private $birthday;
    private $phoneNumber;

    public function __construct($name, $surname,$sex,$birthday,$phoneNumber){
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> sex = $sex;
        $this -> birthday = $birthday;
        $this -> phoneNumber = $phoneNumber;
    }

    public function getInfo(){
        return "Osoba {name: ".$this -> name.", surname: ".$this -> surname.", sex: ".$this -> sex.", birthday: ".$this -> birthday.", Phone Number: ".$this -> phoneNumber."}";
    }

    public function getPhoneNumber(){
        return $this -> phoneNumber;
    }

    public function setPhoneNumber($phoneNumber){
        $this -> phoneNumber = $phoneNumber;
    }

    public function setSurname($surname){
        $this -> surname = $surname;
    }

    public function getDays(){
        return date_diff(date_create($this -> birthday),date('Y-m-d'));
    }
}