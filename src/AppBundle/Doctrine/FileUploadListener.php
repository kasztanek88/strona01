<?php

namespace AppBundle\Doctrine;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use AppBundle\Entity\Users;
use AppBundle\Services\FileUploader;
use Symfony\Component\HttpFoundation\File\File;


class FileUploadListener
{
    private $uploader;
    private $targetPath = '../web/uploads/avatars';
    public function __construct(FileUploader $uploader)
    {
        $this->uploader = $uploader;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

     public function postLoad(LifecycleEventArgs $args)
    {
       
         $entity = $args->getEntity();
         
         if(!$entity instanceof Users)
         {
             return;
         }
        
        $fileName = $entity->getImage();

        $entity->setImage(new File($this->targetPath.'/'.$fileName));
        //var_dump($entity->getImage());die();
    }
    
    private function uploadFile($entity)
    {
        // upload only works for Users entities
        if (!$entity instanceof Users) {
            return;
        }

        $file = $entity->getImage();

        // only upload new files
        if (!$file instanceof UploadedFile) {
            return;
        }

        $fileName = $this->uploader->upload($file);
        $entity->setImage($fileName);
    }
}