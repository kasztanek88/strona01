<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Articles;
use Doctrine\ORM\EntityRepository;

class ArticlesRepository extends EntityRepository
{
    /**
     * @return Articles[]
     */
    public function findAllArticlesASC()
    {
        return $this->createQueryBuilder('articles')
            ->orderBy('articles.updateAt', 'ASC')
            ->getQuery()
            ->execute();

    }
}




