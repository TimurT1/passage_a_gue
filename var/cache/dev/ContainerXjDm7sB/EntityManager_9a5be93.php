<?php

namespace ContainerXjDm7sB;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc19be = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc9b8d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties103e2 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'getConnection', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'getMetadataFactory', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'getExpressionBuilder', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'beginTransaction', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'getCache', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'transactional', array('func' => $func), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->transactional($func);
    }

    public function commit()
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'commit', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->commit();
    }

    public function rollback()
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'rollback', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'getClassMetadata', array('className' => $className), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'createQuery', array('dql' => $dql), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'createNamedQuery', array('name' => $name), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'createQueryBuilder', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'flush', array('entity' => $entity), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'clear', array('entityName' => $entityName), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->clear($entityName);
    }

    public function close()
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'close', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->close();
    }

    public function persist($entity)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'persist', array('entity' => $entity), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'remove', array('entity' => $entity), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'refresh', array('entity' => $entity), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'detach', array('entity' => $entity), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'merge', array('entity' => $entity), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'contains', array('entity' => $entity), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'getEventManager', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'getConfiguration', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'isOpen', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'getUnitOfWork', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'getProxyFactory', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'initializeObject', array('obj' => $obj), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'getFilters', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'isFiltersStateClean', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'hasFilters', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return $this->valueHolderc19be->hasFilters();
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

        $instance->initializerc9b8d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc19be) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc19be = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc19be->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, '__get', ['name' => $name], $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        if (isset(self::$publicProperties103e2[$name])) {
            return $this->valueHolderc19be->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc19be;

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

        $targetObject = $this->valueHolderc19be;
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
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc19be;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc19be;
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
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, '__isset', array('name' => $name), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc19be;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc19be;
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
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, '__unset', array('name' => $name), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc19be;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc19be;
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
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, '__clone', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        $this->valueHolderc19be = clone $this->valueHolderc19be;
    }

    public function __sleep()
    {
        $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, '__sleep', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;

        return array('valueHolderc19be');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc9b8d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc9b8d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc9b8d && ($this->initializerc9b8d->__invoke($valueHolderc19be, $this, 'initializeProxy', array(), $this->initializerc9b8d) || 1) && $this->valueHolderc19be = $valueHolderc19be;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc19be;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc19be;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
