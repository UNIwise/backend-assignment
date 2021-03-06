<?php
namespace Uniwise\Doctrine\Entity;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class CarRepository extends ServiceEntityRepository {

    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Car::class);
    }

    /**
     * @return array|Car[]
     */
    public function getAll() {
        return $this->findAll();
    }
}