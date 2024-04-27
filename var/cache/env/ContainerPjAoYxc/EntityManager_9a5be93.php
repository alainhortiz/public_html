<?php

namespace ContainerPjAoYxc;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf8fa7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1da25 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties99dfb = [
        
    ];

    public function getConnection()
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'getConnection', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'getMetadataFactory', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'getExpressionBuilder', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'beginTransaction', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'getCache', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'transactional', array('func' => $func), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'commit', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->commit();
    }

    public function rollback()
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'rollback', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'getClassMetadata', array('className' => $className), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'createQuery', array('dql' => $dql), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'createNamedQuery', array('name' => $name), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'createQueryBuilder', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'flush', array('entity' => $entity), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'clear', array('entityName' => $entityName), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->clear($entityName);
    }

    public function close()
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'close', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->close();
    }

    public function persist($entity)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'persist', array('entity' => $entity), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'remove', array('entity' => $entity), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'detach', array('entity' => $entity), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'merge', array('entity' => $entity), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'contains', array('entity' => $entity), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'getEventManager', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'getConfiguration', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'isOpen', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'getUnitOfWork', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'getProxyFactory', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'initializeObject', array('obj' => $obj), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'getFilters', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'isFiltersStateClean', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'hasFilters', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return $this->valueHolderf8fa7->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer1da25 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderf8fa7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf8fa7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf8fa7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, '__get', ['name' => $name], $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        if (isset(self::$publicProperties99dfb[$name])) {
            return $this->valueHolderf8fa7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8fa7;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf8fa7;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8fa7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf8fa7;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, '__isset', array('name' => $name), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8fa7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf8fa7;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, '__unset', array('name' => $name), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8fa7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf8fa7;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, '__clone', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        $this->valueHolderf8fa7 = clone $this->valueHolderf8fa7;
    }

    public function __sleep()
    {
        $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, '__sleep', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;

        return array('valueHolderf8fa7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer1da25 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1da25;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1da25 && ($this->initializer1da25->__invoke($valueHolderf8fa7, $this, 'initializeProxy', array(), $this->initializer1da25) || 1) && $this->valueHolderf8fa7 = $valueHolderf8fa7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf8fa7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf8fa7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
