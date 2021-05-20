<?php

namespace ContainerXNHuXxC;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaa353 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer660dd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties91ad4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'getConnection', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'getMetadataFactory', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'getExpressionBuilder', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'beginTransaction', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'getCache', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->getCache();
    }

    public function transactional($func)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'transactional', array('func' => $func), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->transactional($func);
    }

    public function commit()
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'commit', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->commit();
    }

    public function rollback()
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'rollback', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'getClassMetadata', array('className' => $className), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'createQuery', array('dql' => $dql), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'createNamedQuery', array('name' => $name), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'createQueryBuilder', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'flush', array('entity' => $entity), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'clear', array('entityName' => $entityName), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->clear($entityName);
    }

    public function close()
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'close', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->close();
    }

    public function persist($entity)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'persist', array('entity' => $entity), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'remove', array('entity' => $entity), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'refresh', array('entity' => $entity), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'detach', array('entity' => $entity), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'merge', array('entity' => $entity), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'getRepository', array('entityName' => $entityName), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'contains', array('entity' => $entity), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'getEventManager', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'getConfiguration', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'isOpen', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'getUnitOfWork', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'getProxyFactory', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'initializeObject', array('obj' => $obj), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'getFilters', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'isFiltersStateClean', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'hasFilters', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return $this->valueHolderaa353->hasFilters();
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

        $instance->initializer660dd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderaa353) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaa353 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaa353->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, '__get', ['name' => $name], $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        if (isset(self::$publicProperties91ad4[$name])) {
            return $this->valueHolderaa353->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa353;

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

        $targetObject = $this->valueHolderaa353;
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
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa353;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaa353;
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
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, '__isset', array('name' => $name), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa353;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaa353;
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
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, '__unset', array('name' => $name), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa353;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaa353;
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
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, '__clone', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        $this->valueHolderaa353 = clone $this->valueHolderaa353;
    }

    public function __sleep()
    {
        $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, '__sleep', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;

        return array('valueHolderaa353');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer660dd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer660dd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer660dd && ($this->initializer660dd->__invoke($valueHolderaa353, $this, 'initializeProxy', array(), $this->initializer660dd) || 1) && $this->valueHolderaa353 = $valueHolderaa353;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaa353;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaa353;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
