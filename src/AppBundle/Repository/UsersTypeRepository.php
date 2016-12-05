<?php 

namespace AppBundle\Repository;

use AppBundle\Entity\Users;
use Doctrine\ORM\EntityRepository;

class UsersTypeRepository extends EntityRepository
{
    public function createAlphabeticalQueryBuilder_type()
    {
        return $this->createQueryBuilder('users_type')
                ->orderBy('users_type.type', 'ASC');
    }
    
}

?>




