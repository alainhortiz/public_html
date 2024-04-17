<?php

namespace App\Repository;

use App\Entity\Notificacion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Notificacion>
 *
 * @method Notificacion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Notificacion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Notificacion[]    findAll()
 * @method Notificacion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NotificacionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Notificacion::class);
    }

    public function add(Notificacion $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Notificacion $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Devuelve el total de notificaciones del administrador
     *
     * @return int
     */
    public function totalNotificacionesAdmin(): int
    {
        return count($this->createQueryBuilder('u')
            ->select('u')
            ->andWhere('u.tipo < 4')
            ->getQuery()->getResult()
        );
    }

    /**
     * Devuelve el total de notificaciones del usuario
     *
     * @param $userid
     * @return int
     */
    public function totalNotificacionesUser($userid): int
    {
        return count($this->createQueryBuilder('n')
            ->select('n')
            ->join('n.user', 'u')
            ->where('u.id = :user_id')
            ->setParameter('user_id', $userid)
            ->andWhere('n.tipo > 3')
            ->getQuery()->getResult()
        );
    }

    /**
     * Devuelve las notificaciones del administrador
     *
     * @return array
     */
    public function notificacionesAdmin(): array
    {
        return $this->createQueryBuilder('n')
            ->select('n.tipo ,COUNT(n) as cant')
            ->where('n.tipo in (1,2,3,6)')
            ->andWhere('n.estado = false')
            ->groupBy('n.tipo')
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve las notificaciones del administrador
     *
     * @param $userid
     * @return array
     */
    public function notificacionesUser($userid): array
    {
        return $this->createQueryBuilder('n')
            ->select('n.tipo ,COUNT(n) as cant')
            ->join('n.user', 'u')
            ->where('u.id = :user_id')
            ->setParameter('user_id', $userid)
            ->andWhere('n.tipo in (4,5,7,8,9,10,11,12)')
            ->andWhere('n.estado = false')
            ->groupBy('n.tipo')
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el total de tipo de notificacion
     *
     * @return int
     */
    public function totalTipoNotificacion(): int
    {
        return count($this->createQueryBuilder('u')
            ->select('u')
            ->getQuery()->getResult()
        );
    }

//    /**
//     * @return Notificacion[] Returns an array of Notificacion objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Notificacion
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
