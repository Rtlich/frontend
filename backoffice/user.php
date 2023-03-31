<?php
class user
{
    private int $idUser ;
    private string $lastName ;
    private string $name ;
    private string $adress ;
    private string $phoneNumber ;
    private string $sexe ;
    private string $email;
    private string $role;
    private string $password;
    private int $status;

   

    public function __construct($id , $lastName, $name, $adress,$phoneNumber,$sexe,$email,$role,$password,$status)
    {
        $this->idUser = $id;
        $this->lastName = $lastName;
        $this->name = $name;
        $this->adress = $adress;
        $this->phoneNumber = $phoneNumber;
        $this->sexe = $sexe;
        $this->email =$email;
        $this->role = $role;
        $this->password = $password ;
        $this->status = $status;
    }

    /**
     * Get the value of idClient
     */
    public function getUseridt()
    {
        return $this->idUser;
    }

    



    public function getpassword()
    {
        return $this->password;
    }

    public function getrole()
    {
        return $this->role;
    }
    public function getsexe()
    {
        return $this->sexe;
    }

    public function getphoneNumber()
    {
        return $this->phoneNumber;
    }

    public function getAdress()
    {
        return $this->adress;
    }
    public function getemail()
    {
        return $this->email;
    }
    public function getname()
    {
        return $this->name;
    }

    public function getlastName()
    {
        return $this->lastName;
    }

    public function getstatus()
    {
        return $this->status;
    }






    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    public function setpassword($password)
    {
        $this->password = $password;

        return $this;
    }
    public function setrole($role)
    {
        $this->role = $role;

        return $this;
    }
    public function setsexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }
    public function setphoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
    public function setemail($email)
    {
        $this->email = $email;

        return $this;
    }
    public function setlastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }
    public function setname($name)
    {
        $this->name = $name;

        return $this;
    }


    public function setstatus($status)
    {
        $this->status = $status;

        return $this;
    }

}