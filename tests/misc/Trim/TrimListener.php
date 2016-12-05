<?php

namespace AppBundle\Doctrine;


use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use AppBundle\Entity\Articles;
use AppBundle\Services\trimArticles;

class TrimListener implements EventSubscriber
{
    private $trimArticles;

    public function __construct(trimArticles $trimArticles)
    {
        $this->trimArticles = $trimArticles;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if(!$entity instanceof Articles)    {
            return;
        }

        $this->Trimmer($entity);
        
    }

    public function preUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if(!$entity instanceof Articles)    {
            return;
        }

        $this->Trimmer($entity);
    }
    public function getSubscribedEvents()
    {
        return ['prePersist', 'preUpdate'];
    }

    public function Trimmer(Articles $entity)
    {
        if (!$entity->getArtContent())  {
            return;
        }

        $trimmed = $this->trimArticles->trimArticle($entity->getArtContent());
        $entity->setTrimmedArt($trimmed);
    }
}