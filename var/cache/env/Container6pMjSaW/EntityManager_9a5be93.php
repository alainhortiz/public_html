<?php

namespace Container6pMjSaW;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2ec3a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer73240 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc03fb = [
        
    ];

    public function getConnection()
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'getConnection', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'getMetadataFactory', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'getExpressionBuilder', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'beginTransaction', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'getCache', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'transactional', array('func' => $func), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'commit', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->commit();
    }

    public function rollback()
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'rollback', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'getClassMetadata', array('className' => $className), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'createQuery', array('dql' => $dql), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'createNamedQuery', array('name' => $name), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'createQueryBuilder', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'flush', array('entity' => $entity), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'clear', array('entityName' => $entityName), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->clear($entityName);
    }

    public function close()
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'close', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->close();
    }

    public function persist($entity)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'persist', array('entity' => $entity), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'remove', array('entity' => $entity), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'detach', array('entity' => $entity), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'merge', array('entity' => $entity), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'contains', array('entity' => $entity), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'getEventManager', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'getConfiguration', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'isOpen', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'getUnitOfWork', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'getProxyFactory', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'initializeObject', array('obj' => $obj), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'getFilters', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'isFiltersStateClean', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'hasFilters', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return $this->valueHolder2ec3a->hasFilters();
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

        $instance->initializer73240 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder2ec3a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2ec3a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2ec3a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, '__get', ['name' => $name], $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        if (isset(self::$publicPropertiesc03fb[$name])) {
            return $this->valueHolder2ec3a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ec3a;

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

        $targetObject = $this->valueHolder2ec3a;
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
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ec3a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2ec3a;
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
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, '__isset', array('name' => $name), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ec3a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2ec3a;
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
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, '__unset', array('name' => $name), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ec3a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2ec3a;
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
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, '__clone', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        $this->valueHolder2ec3a = clone $this->valueHolder2ec3a;
    }

    public function __sleep()
    {
        $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, '__sleep', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;

        return array('valueHolder2ec3a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer73240 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer73240;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer73240 && ($this->initializer73240->__invoke($valueHolder2ec3a, $this, 'initializeProxy', array(), $this->initializer73240) || 1) && $this->valueHolder2ec3a = $valueHolder2ec3a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2ec3a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2ec3a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
