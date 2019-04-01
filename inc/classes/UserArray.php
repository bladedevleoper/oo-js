<?php 

class UserArray
{

    //public $title;

    public function __construct($title)
    {
        $this->title = $title;
    }
    public function User()
    {
        $user = [
            '' => 'Please Select Your Help',
            'Yes' => 'I need the help',
            'No' => 'Do not need the help'
        ];

        $another = [
            '' => 'Please Select Your Help',
            'yes' => 'Choose the Yes option',
            'no' => 'Choose the no option'
        ];

        return compact('user', 'another');
    }

}