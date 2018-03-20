<?php

namespace skeleton_silex\DAO;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use skeleton_silex\Domain\User;


class UserDAO extends DAO implements UserProviderInterface
{
    /**
     * Returns a user matching the supplied id.
     *
     * @param integer $id The user id.
     *
     * @return \ChicAndCheap\Domain\User|throws an exception if no matching user is found
     */
    public function find($id) {
        $sql = "select * from user where idUser=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No user matching id " . $id);
    }

    /**
     * {@inheritDoc}
     */
public function loadUserByUsername($username)

    {
        $sql = "select * from user where loginUser=?";
        $row = $this->getDb()->fetchAssoc($sql, array($username));


        if ($row)

            return $this->buildDomainObject($row);
        else

            throw new UsernameNotFoundException(sprintf('User "%s" not found.', $username));
  }
    /**
    * {@inheritDoc}
    */

    public function refreshUser(UserInterface $user)

    {
        $class = get_class($user);

        if (!$this->supportsClass($class)) {

            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', $class));
        }

        return $this->loadUserByUsername($user->getUsername());
  }
    /**
     * {@inheritDoc}
     */
    public function supportsClass($class)
    {
        return 'skeleton_silex\Domain\User' === $class;
    }

    /**
     * Creates a User object based on a DB row.
     *
     * @param array $row The DB row containing User data.
     * 
     */
    protected function buildDomainObject($row) {
        $user= new User();
        $user->setIdUser($row['idUser']);
        $user->setNomUser($row['nomUser']);
        $user->setPrenomUser($row['prenomUser']);
        $user->setUsername($row['loginUser']);
        $user->setPassword($row['mdpUser']);
        $user->setAdresseUser($row['adresseUser']);
        
        $user->setVilleUser($row['villeUser']);
        $user->setSalt($row['saltSys']);
        $user->setRole($row['role']);
        return $user;
    }
    
   
    public function save(User $user) {
       
        	 
              $userData = array(
                 'nomUser' => $user->getNomUser(),
                 'prenomUser' => $user->getPrenomUser(),
                 'loginUser' => $user->getUsername(),
                 'mdpUser' => $user->getPassword(), 
                 'saltSys' => $user->getSalt(),
                 'role' => 'role'
                 );
             // The user has already been saved : update it
             $this->getDb()->insert('user', $userData);
         
											}
}