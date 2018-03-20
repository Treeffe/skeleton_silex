<?php

namespace skeleton_silex\Domain;

use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface
{
    /**
     * Identifiant.
     *
     * @var integer
     */
    private $idUser;

    /**
     *  .
     *
     * @var string
     */
    private $nomUser;

    /**Nom
     *
     *
     * @var string
     */
    private $prenomUser;

    /**prenom.
     *
     *
     * @var string
     */
    private $adresseUser;
    
    /**prenom.
     *
     *
     * @var string
     */
    private $mailUser;

    /**Adresse.
     *
     *
     * @var integer
     */
    
    private $villeUser;
    /**
     * Ville
     *
     * @var String
     */


    private $loginUser;

    private $password;
    /**

     * Salt that was originally used to encode the password.

     *

     * @var string

     */

    private $salt;


    /**

     * Role.

     * Values : ROLE_USER or ROLE_ADMIN.

     *

     * @var string

     */

    private $role;


    /**

     * @inheritDoc

     */
    

    public function getIdUser() {
        return $this->idUser;
    }

    public function setIdUser($idUser) {
        $this->idUser = $idUser;
    }


    public function getNomUser() {
        return $this->nomUser;
    }

    public function setNomUser($nomUser) {
        $this->nomUser = $nomUser;
    }

    public function getPrenomUser() {
        return $this->prenomUser;
    }

    public function setPrenomUser($prenomUser) {
        $this->prenomUser = $prenomUser;
    }

    public function getAdresseUser() {
        return $this->adresseUser;
    }

    public function setAdresseUser($adresseUser) {
        $this->adresseUser = $adresseUser;
    }

    public function getMailUser() {
        return $this->mailUser;
    }

    public function setMailUser($mailUser) {
        $this->mailUser = $mailUser;
    }

    public function getVilleUser() {
        return $this->villeUser;
    }

    public function setVilleUser($villeUser) {
        $this->villeUser = $villeUser;
    }

    public function getLoginUser() {
        return $this->loginUser;
    }

    public function setLoginUser($loginUser) {
        $this->loginUser = $loginUser;
    }


    public function getMdpUser() {
        return $this->mdpUser;

    }

    public function setMdpUser($mdpUser) {

        $this->mdpUser = $mdpUser;

    }


    /**

     * @inheritDoc

     */

    public function getSalt()

    {

        return $this->salt;

    }


    public function setSalt($salt)

    {

        $this->salt = $salt;

    }


    public function getRole()

    {

        return $this->role;

    }


    public function setRole($role) {

        $this->role = $role;

    }
    /**

     * @inheritDoc

     */

    public function getRoles()

    {

        return array($this->getRole());

    }


    /**

     * @inheritDoc

     */

    public function eraseCredentials() {

        // Nothing to do here

    }
    
    
    private $username;
    
    public function getPassword() {
        return $this->password;

    }

    public function setPassword($password) {

        $this->password = $password;

    }
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }
    

}
