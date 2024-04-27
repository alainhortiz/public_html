<?php

namespace ContainerTxHd3fm;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder33b58 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc5a5d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties00fa8 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'getConnection', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'getMetadataFactory', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'getExpressionBuilder', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'beginTransaction', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'getCache', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'transactional', array('func' => $func), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'commit', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->commit();
    }

    public function rollback()
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'rollback', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'getClassMetadata', array('className' => $className), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'createQuery', array('dql' => $dql), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'createNamedQuery', array('name' => $name), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'createQueryBuilder', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'flush', array('entity' => $entity), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'clear', array('entityName' => $entityName), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->clear($entityName);
    }

    public function close()
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'close', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->close();
    }

    public function persist($entity)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'persist', array('entity' => $entity), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'remove', array('entity' => $entity), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'refresh', array('entity' => $entity), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'detach', array('entity' => $entity), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'merge', array('entity' => $entity), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'contains', array('entity' => $entity), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'getEventManager', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'getConfiguration', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'isOpen', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'getUnitOfWork', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'getProxyFactory', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'initializeObject', array('obj' => $obj), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'getFilters', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'isFiltersStateClean', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'hasFilters', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return $this->valueHolder33b58->hasFilters();
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

        $instance->initializerc5a5d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder33b58) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder33b58 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder33b58->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, '__get', ['name' => $name], $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        if (isset(self::$publicProperties00fa8[$name])) {
            return $this->valueHolder33b58->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33b58;

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

        $targetObject = $this->valueHolder33b58;
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
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33b58;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder33b58;
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
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, '__isset', array('name' => $name), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33b58;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder33b58;
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
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, '__unset', array('name' => $name), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33b58;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder33b58;
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
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, '__clone', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        $this->valueHolder33b58 = clone $this->valueHolder33b58;
    }

    public function __sleep()
    {
        $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, '__sleep', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;

        return array('valueHolder33b58');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc5a5d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc5a5d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc5a5d && ($this->initializerc5a5d->__invoke($valueHolder33b58, $this, 'initializeProxy', array(), $this->initializerc5a5d) || 1) && $this->valueHolder33b58 = $valueHolder33b58;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder33b58;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder33b58;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
