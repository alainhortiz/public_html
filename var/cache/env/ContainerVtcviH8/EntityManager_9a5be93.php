<?php

namespace ContainerVtcviH8;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6bb60 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf7294 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties284ba = [
        
    ];

    public function getConnection()
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'getConnection', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'getMetadataFactory', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'getExpressionBuilder', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'beginTransaction', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'getCache', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'transactional', array('func' => $func), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'commit', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->commit();
    }

    public function rollback()
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'rollback', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'getClassMetadata', array('className' => $className), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'createQuery', array('dql' => $dql), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'createNamedQuery', array('name' => $name), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'createQueryBuilder', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'flush', array('entity' => $entity), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'clear', array('entityName' => $entityName), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->clear($entityName);
    }

    public function close()
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'close', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->close();
    }

    public function persist($entity)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'persist', array('entity' => $entity), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'remove', array('entity' => $entity), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'detach', array('entity' => $entity), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'merge', array('entity' => $entity), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'contains', array('entity' => $entity), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'getEventManager', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'getConfiguration', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'isOpen', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'getUnitOfWork', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'getProxyFactory', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'initializeObject', array('obj' => $obj), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'getFilters', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'isFiltersStateClean', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'hasFilters', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return $this->valueHolder6bb60->hasFilters();
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

        $instance->initializerf7294 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder6bb60) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6bb60 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6bb60->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, '__get', ['name' => $name], $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        if (isset(self::$publicProperties284ba[$name])) {
            return $this->valueHolder6bb60->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bb60;

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

        $targetObject = $this->valueHolder6bb60;
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
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bb60;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6bb60;
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
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, '__isset', array('name' => $name), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bb60;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6bb60;
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
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, '__unset', array('name' => $name), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bb60;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6bb60;
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
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, '__clone', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        $this->valueHolder6bb60 = clone $this->valueHolder6bb60;
    }

    public function __sleep()
    {
        $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, '__sleep', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;

        return array('valueHolder6bb60');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializerf7294 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf7294;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf7294 && ($this->initializerf7294->__invoke($valueHolder6bb60, $this, 'initializeProxy', array(), $this->initializerf7294) || 1) && $this->valueHolder6bb60 = $valueHolder6bb60;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6bb60;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6bb60;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
