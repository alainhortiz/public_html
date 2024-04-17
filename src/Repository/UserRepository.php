<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @extends ServiceEntityRepository<User>
 *
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(User $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(User $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newHashedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }

    /**
     * Devuelve el total de usuarios registrados
     *
     * @return int
     */
    public function totalusers(): int
    {
        return count($this->createQueryBuilder('u')
            ->select('u')
            ->getQuery()->getResult()
        );
    }

    /**
     * Devuelve el total de usuarios registrados activos
     *
     * @return int
     */
    public function totalUsersActivos(): int
    {
        return count($this->createQueryBuilder('u')
            ->select('u')
            ->where("u.roles = JSON_ARRAY('ROLE_USER')")
            ->andWhere("u.isActive = true")
            ->getQuery()->getResult()
        );
    }

    /**
     * Devuelve el total de usuarios registrados activos
     *
     * @return int
     */
    public function totalUsersInactivos(): int
    {
        return count($this->createQueryBuilder('u')
            ->select('u')
            ->where("u.roles = JSON_ARRAY('ROLE_USER')")
            ->andWhere("u.isActive = false")
            ->getQuery()->getResult()
        );
    }

    /**
     * Devuelve el correo del admin
     *
     * @return array
     */
    public function correoAdmin(): array
    {
        return $this->createQueryBuilder('u')
            ->where("u.roles = JSON_ARRAY('ROLE_ADMIN')")
            ->andWhere("u.isActive = true")
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve los ultimos 5 usuarios nuevos
     *
     * @return array
     */
    public function nuevosUsuarios(): array
    {
        return $this->createQueryBuilder('u')
            ->andWhere("u.isActive = true")
            ->orderBy('u.id', 'DESC')
            ->setMaxResults(4)
            ->getQuery()
            ->getResult();
    }


    /**
     * Devuelve el total de usuarios registrados
     *
     * @param string $correo
     * @return array
     */
    public function nombreUsuarioporEmail(string $correo): array
    {
        return $this->createQueryBuilder('u')
            ->select('u.nombre')
            ->andWhere('u.email =:val')
            ->setParameter('val', $correo)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve un ID dado un Correo
     *
     * @param string $correo
     * @return int
     */
    public function obtenerIDdadoEmail(string $correo)
    {
        return $this->createQueryBuilder('u')
            ->select('u.id')
            ->andWhere('u.email = :val')
            ->setParameter('val', $correo)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve un Rol dado un Correo
     *
     * @param string $correo
     * @return array
     */
    public function obtenerRoldadoEmail(string $correo): array
    {
        return $this->createQueryBuilder('u')
            ->select('u.roles')
            ->andWhere('u.email = :val')
            ->setParameter('val', $correo)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve si ya existe este correo
     *
     * @param string $correo
     * @return int
     */
    public function cantidadUserporEmail(string $correo): int
    {
        return count($this->createQueryBuilder('u')
            ->andWhere('u.email =:val')
            ->setParameter('val', $correo)
            ->getQuery()
            ->getResult());
    }

    /**
     * Devuelve los usuarios asignados dado un producto
     *
     * @param string $producid
     * @return array
     */
    public function usuariosasignadosproduct(string $producid): array
    {
        return $this->createQueryBuilder('u')
            ->select('u.nombre')
            ->join('u.product', 'p')
            ->where('p.nombre = :user_id')
            ->setParameter('user_id', $producid)
            ->getQuery()
            ->getResult();
    }

    public function ultimoID()
    {
        return $this->createQueryBuilder('u')
            ->select('u.id')
            ->orderBy('u.id', 'DESC')
            ->getQuery()
            ->setMaxResults(1)
            ->getResult();

    }

    /**
     * Devuelve el nombre y apellido del usuario
     *
     * @param string $iduser
     * @return array
     */
    public function productoNombreApellido(): array
    {
        return $this->createQueryBuilder('u')
            ->select('u.id, u.nombre, u.apellidos')
            ->where("u.roles = JSON_ARRAY('ROLE_USER')")
            ->andWhere("u.isActive = true")
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el nombre y apellido del usuario
     *
     * @param int $iduser
     * @return array
     */
    public function usuarioActivado(int $iduser): array
    {
        return $this->createQueryBuilder('u')
            ->select('u.isActive')
            ->where("u.id =:val")
            ->setParameter('val', $iduser)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el saldo acumulado en USD de los productos Genrales
     *
     * @return array
     */
    public function totalAcumulado(): array
    {
        return $this->createQueryBuilder('u')
            ->select('sum(u.saldoGeneralUSD) as saldoGeneralUSD, 
            sum(u.saldoGeneralEUR) as saldoGeneralEUR, 
            sum(u.saldoLibroUSD) as saldoLibroUSD,
            sum(u.saldoLibroEUR) as saldoLibroEUR,
            sum(u.saldoServicioUSD) as saldoServicioUSD,
            sum(u.saldoServicioEUR) as saldoServicioEUR')
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el saldo acumulado en USD de los productos Genrales
     *
     * @param $userid
     * @return array
     */
    public function totalAcumuladoUser($userid): array
    {
        return $this->createQueryBuilder('u')
            ->select('u.saldoGeneralUSD, u.saldoGeneralEUR, u.saldoLibroUSD,u.saldoLibroEUR,u.saldoServicioUSD,u.saldoServicioEUR')
            ->where('u.id = :user_id')
            ->setParameter('user_id', $userid)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve los saldos de los usuarios por tipo de producto
     *
     * @return array
     */
    public function saldosUsuarios(): array
    {
        return $this->createQueryBuilder('u')
            ->select('u.id, u.nombre, u.apellidos, u.email, u.saldoInicialGeneralUSD, u.saldoGeneralUSD, u.saldoInicialGeneralEUR, u.saldoGeneralEUR, u.saldoInicialLibroUSD, u.saldoLibroUSD, u.saldoInicialLibroEUR, u.saldoLibroEUR, u.saldoInicialServicioUSD, u.saldoServicioUSD, u.saldoInicialServicioEUR, u.saldoServicioEUR')
            ->getQuery()
            ->getResult();
    }


    // /**
    //  * @return User[] Returns an array of User objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
