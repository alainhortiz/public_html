<?php

namespace App\Repository;

use App\Entity\Producto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Producto>
 *
 * @method Producto|null find($id, $lockMode = null, $lockVersion = null)
 * @method Producto|null findOneBy(array $criteria, array $orderBy = null)
 * @method Producto[]    findAll()
 * @method Producto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Producto::class);
    }

    /**
     * @param Producto $entity
     * @param bool $flush
     */
    public function add(Producto $entity, bool $flush = true): void
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
    public function remove(Producto $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * Devuelve el total de productos registrados
     *
     * @return int
     */
    public function totalproductos(): int
    {
        return count($this->createQueryBuilder('u')
            ->select('u')
            ->where('u.tipoProducto in (1,2)')
            ->andWhere('u.isActive = true')
            ->getQuery()->getResult()
        );
    }

    /**
     * Devuelve el total de Id de Productos
     *
     * @param string $idd
     * @return int
     */
    public function totalIdProductos(string $idd): int
    {
        return count($this->createQueryBuilder('p')
            ->select('p')
            ->where('p.idd = :idd')
            ->andWhere('p.isActive = true')
            ->setParameter('idd', $idd)
            ->getQuery()->getResult()
        );
    }

    /**
     * Devuelve el total de servicios registrados
     *
     * @return int
     */
    public function totalservicios(): int
    {
        return count($this->createQueryBuilder('u')
            ->select('u')
            ->where('u.tipoProducto = 3')
            ->andWhere('u.isActive = true')
            ->getQuery()->getResult()
        );
    }

    /**
     * Devuelve los ultimos 5 registros de venta por servicios registrados
     *
     * @return array
     */
    public function ultimos5registros(): array
    {
        return $this->createQueryBuilder('u')
            ->where('u.tipoProducto in (1,2)')
            ->andWhere('u.isActive = true')
            ->orderBy('u.id', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve los ultimos 3 productos registrados por usuario
     *
     * @param int $userid
     * @return array
     */
    public function ultimos3productosUser(int $userid): array
    {
        return $this->createQueryBuilder('p')
            ->join('p.user', 'u')
            ->where('u.id = :user_id')
            ->setParameter('user_id', $userid)
            ->andWhere('p.tipoProducto in (1,2)')
            ->andWhere('p.isActive = true')
            ->orderBy('p.id', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve los ultimos 3 servicios registrados por usuario
     *
     * @param int $userid
     * @return array
     */
    public function ultimos3serviciosUser(int $userid): array
    {
        return $this->createQueryBuilder('p')
            ->join('p.user', 'u')
            ->where('u.id = :user_id')
            ->setParameter('user_id', $userid)
            ->andWhere('p.tipoProducto = 3')
            ->andWhere('p.isActive = true')
            ->orderBy('p.id', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve los productos asignados dado un usuario
     *
     * @param int $userid
     * @return array
     */
    public function productosasignados(int $userid): array
    {
        return $this->createQueryBuilder('p')
            ->join('p.user', 'u')
            ->where('u.id = :user_id')
            ->setParameter('user_id', $userid)
            ->andWhere('p.tipoProducto in (1,2)')
            ->andWhere('p.isActive = true')
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve los servicios asignados dado un usuario
     *
     * @param int $userid
     * @return array
     */
    public function serviciosasignados(int $userid): array
    {
        return $this->createQueryBuilder('p')
            ->join('p.user', 'u')
            ->where('u.id = :user_id')
            ->setParameter('user_id', $userid)
            ->andWhere('p.tipoProducto = 3')
            ->andWhere('p.isActive = true')
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el total de productos registrados
     *
     * @param $userid
     * @return array
     */
    public function totalusd($userid): array
    {
        return $this->createQueryBuilder('p')
            ->select('SUM(p.beneficioxventa)')
            ->join('p.user', 'u')
            ->where('u.id = :user_id')
            ->setParameter('user_id', $userid)
            ->andWhere("p.tipodemoneda = 'dolar'")
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el total de productos registrados
     *
     * @param $userid
     * @return array
     */
    public function totaleuros($userid): array
    {
        return $this->createQueryBuilder('p')
            ->select('SUM(p.beneficioxventa)')
            ->join('p.user', 'u')
            ->where('u.id = :user_id')
            ->setParameter('user_id', $userid)
            ->andWhere("p.tipodemoneda = 'euro'")
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el total de productos registrados
     *
     * @param $productos
     * @return array
     */
    public function dadoproductoobteneriddnombre($productos): array
    {

        return $this->createQueryBuilder('p')
            ->select('p.nombre, p.idd')
            ->where('p.nombre IN(:var)')
            ->setParameter('var', $productos)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el total de productos registrados
     *
     * @return array
     */
    public function obtenerbeneficio(): array
    {
        return $this->createQueryBuilder('p')
            ->select('u.id, u.nombre, u.apellidos, u.empresa ,SUM(p.beneficioxventa) as suma')
            ->join('p.user', 'u')
            ->groupBy('u.id, u.nombre, u.apellidos, u.empresa')
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el total acumulado de royal
     *
     * @param string $iduser
     * @return array
     */
    public function dadoproductoobteneruserroyal(string $iduser): array
    {
        return $this->createQueryBuilder('p')
            ->select('u.nombre, p.beneficioxventa')
            ->join('p.user', 'u')
            ->where('p.id = :user_id')
            ->setParameter('user_id', $iduser)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el total de los productos en existencia
     *
     * @return int
     */
    public function totalProductosExistencia(): int
    {
        return count($this->createQueryBuilder('p')
            ->where('p.tipoProducto in (1,2)')
            ->andWhere('p.stock > 0')
            ->andWhere('p.isActive = true')
            ->getQuery()
            ->getResult()
        );
    }

    /**
     * Devuelve los productos en existencia
     *
     * @return array
     */
    public function productosExistencia(): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.tipoProducto in (1,2)')
            ->andWhere('p.stock > 0')
            ->andWhere('p.isActive = true')
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve los productos agotados
     *
     * @return array
     */
    public function productosAgotados(): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.tipoProducto in (1,2)')
            ->andWhere('p.stock <= p.stockAdvertencia')
            ->andWhere('p.isActive = true')
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve los productos agotados
     * @param $userid
     * @return array
     */
    public function productosAgotadosUser($userid): array
    {
        return $this->createQueryBuilder('p')
            ->join('p.user', 'u')
            ->where('u.id = :user_id')
            ->andWhere('p.tipoProducto in (1,2)')
            ->andWhere('p.stock <= p.stockAdvertencia')
            ->setParameter('user_id', $userid)
            ->andWhere('p.isActive = true')
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve los servicios
     *
     * @return array
     */
    public function todosServicios(): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.tipoProducto = 3')
            ->andWhere('p.isActive = true')
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el id y nombre del servicio
     *
     * @param string $iduser
     * @return array
     */
    public function productoIdNombre(): array
    {
        return $this->createQueryBuilder('p')
            ->select('p.id, p.nombre')
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el id y nombre del servicio
     *
     * @param string $nomb
     * @return array
     */
    public function productoIdNom(string $nomb): array
    {
        return $this->createQueryBuilder('p')
            ->select('p.id')
            ->where('p.nombre =:val')
            ->setParameter('val', $nomb)
            ->getQuery()
            ->getResult();
    }

}
