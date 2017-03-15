<?php

namespace AppBundle\Repository;
use AppBundle\Entity\Category;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends \Doctrine\ORM\EntityRepository
{

    /**
     * @return array
     */
    public function getAllCategory()
    {
        return $this->createQueryBuilder('c')
            ->select('c')
            ->orderBy('c.orderId')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return int
     */
    public function getFirstCategory()
    {
        return $this->createQueryBuilder('c')
            ->select('c')
            ->orderBy('c.orderId')
            ->getQuery()
            ->setMaxResults(1)
            ->getSingleResult();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getCategoryById($id)
    {
        return $this->createQueryBuilder('c')
            ->select('c')
            ->andWhere('c.id = :id')
            ->setParameter(':id' , $id)
            ->getQuery()
            ->getSingleResult();
    }
}
