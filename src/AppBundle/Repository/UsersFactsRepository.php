<?php 

namespace AppBundle\Repository;

use AppBundle\Entity\Users;
use Doctrine\ORM\EntityRepository;

class UsersFactsRepository extends EntityRepository
{
    
    public function createAlphabeticalQueryBuilder()
    {
        return $this->createQueryBuilder('users_facts')
                ->orderBy('users_facts.fact', 'ASC');
    }
}
?>




