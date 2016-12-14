<?php 

namespace AppBundle\Repository;

use AppBundle\Entity\Users;
use Doctrine\ORM\EntityRepository;

class UsersRepository extends EntityRepository
{
    /**
     * @return Users[]
     */
    public function findAllUsersASC()
    {
        return $this->createQueryBuilder('users')
                ->orderBy('users.name', 'ASC')
                ->getQuery()
                ->execute();
    
    }

}




