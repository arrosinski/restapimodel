<?php

namespace App\Repository;

use App\Entity\CompanyEmployee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CompanyEmployee>
 *
 * @method CompanyEmployee|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompanyEmployee|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompanyEmployee[]    findAll()
 * @method CompanyEmployee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompanyEmployeeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompanyEmployee::class);
    }

//    /**
//     * @return CompanyEmployee[] Returns an array of CompanyEmployee objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CompanyEmployee
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
