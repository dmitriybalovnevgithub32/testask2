<?php

/*
General requirements:
- implement the task as good as you can
- upload result to the GIT Gist
*/


/*
Implement a Person class.

Person has following attributes:
- unique integer ID
- name
- surname
- sex M/F
- birth date
You can get these information from the instance but you can not change them. (we do not consider ability to change name or sex)

Operations:
- Get person age in days.
*/

class Person
{
    public $uniqueintegerid = 10;
    public $name = "Dmitriy123";
    public $surname = "gooddimon";
    public $sexmf = "m";
    public $birthdate = " ";

    public function __construct($uniqueid, $name, $surename, $birth_date, $semf)
    {
    }

}

/*
Implement Mankind class, which works with Person instances.

General requirements:
- there can only exist a single instance of the class (Martians are not mankind...)
- allow to use the instance as array (use person IDs as array keys) and allow to loop through the instance via foreach

Required operations:
- Load people from the file (see below)
- Get the Person based on ID
- get the percentage of Men in Mankind

Loading people from the file:

Input file is in CSV format. Each person is in separate line.
Each line contains ID of the person, name, surname, sex (M/F) and birth date in format dd.mm.yyyy.
Attributes are separated by semicolon (;) File is using UTF8 encoding.

Example:
123;Michal;Walker;M;01.11.1962
3457;Pavla;Nowak;F;13.04.1887

Expected number of records in the file <= 1000.

Also suggest how to handle the situation when the file is much larger (100 MiB+) - in terms of this method and the Mankind class itself.
*/

class Mankind
{
    public function csv()
    {

    }

    public function getpeoplebyid($id)
    {
        $id = 10;
        $csvresult = fopen(__FILE__ . "./csv.csv", 777);
        foreach ($csvresult as $index => $item) {
            if ($index == $id) {

            }
        }

    }

}

$makind = new Mankind();

foreach ($makind as $index => $item) {

    print_r($index);
    print_r($item);

}

$file = __FILE__ . '*.csv';
$csv = fopen(__FILE__ . "./csv.csv", 777);
var_dump($csv);
die();
$makind->csv($csv);


class Myclass extends Person

$headers1 = ['id', 'fname', 'lname', 'male', 'birthday'];

$headers = ["name", "email", "adress"];
$data = ['id', "name"];

