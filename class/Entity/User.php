<?php
/**
 * Created by PhpStorm.
 * User: Davvm
 * Date: 12/03/2019
 * Time: 10:41
 */

class User
{

    private $prenom;
    private $nom;
    private $email;
    private $password;
    private $ddn;
    private $last_connexion;


    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getDdn()
    {
        return $this->ddn;
    }

    /**
     * @param mixed $ddn
     */
    public function setDdn($ddn)
    {
        $this->ddn = $ddn;
    }

    /**
     * @return mixed
     */
    public function getLastConnexion()
    {
        return $this->last_connexion;
    }

    /**
     * @param mixed $last_connexion
     */
    public function setLastConnexion($last_connexion)
    {
        $this->last_connexion = $last_connexion;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
}