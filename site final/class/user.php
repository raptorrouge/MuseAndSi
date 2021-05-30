<?php
class user
{
    private $ID_User;
    private $NOM_User;
    private $PRENOM_User;
    private $AGE_User;
    private $ROLE_User;
    private $Photo_Profil;

    /**
     * user constructor.
     * @param $ID_User
     * @param $NOM_User
     * @param $PRENOM_User
     * @param $AGE_User
     * @param $ROLE_User
     * @param $Photo_Profil
     */
    public function __construct()
    {
    }





    /**
     * @return mixed
     */
    public function getIDUser()
    {
        return $this->ID_User;
    }

    /**
     * @param mixed $ID_User
     */
    public function setIDUser($ID_User)
    {
        $this->ID_User = $ID_User;
    }

    /**
     * @return mixed
     */
    public function getNOMUser()
    {
        return $this->NOM_User;
    }

    /**
     * @param mixed $NOM_User
     */
    public function setNOMUser($NOM_User)
    {
        $this->NOM_User = $NOM_User;
    }

    /**
     * @return mixed
     */
    public function getPRENOMUser()
    {
        return $this->PRENOM_User;
    }

    /**
     * @param mixed $PRENOM_User
     */
    public function setPRENOMUser($PRENOM_User)
    {
        $this->PRENOM_User = $PRENOM_User;
    }

    /**
     * @return mixed
     */
    public function getAGEUser()
    {
        return $this->AGE_User;
    }

    /**
     * @param mixed $AGE_User
     */
    public function setAGEUser($AGE_User)
    {
        $this->AGE_User = $AGE_User;
    }

    /**
     * @return mixed
     */
    public function getROLEUser()
    {
        return $this->ROLE_User;
    }

    /**
     * @param mixed $ROLE_User
     */
    public function setROLEUser($ROLE_User)
    {
        $this->ROLE_User = $ROLE_User;
    }




}