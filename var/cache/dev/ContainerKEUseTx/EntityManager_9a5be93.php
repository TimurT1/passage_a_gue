<?php

namespace ContainerKEUseTx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc28eb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer67820 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7fe7f = [
        
    ];

    public function getConnection()
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'getConnection', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'getMetadataFactory', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'getExpressionBuilder', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'beginTransaction', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'getCache', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'transactional', array('func' => $func), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->transactional($func);
    }

    public function commit()
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'commit', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->commit();
    }

    public function rollback()
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'rollback', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'getClassMetadata', array('className' => $className), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'createQuery', array('dql' => $dql), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'createNamedQuery', array('name' => $name), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'createQueryBuilder', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'flush', array('entity' => $entity), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'clear', array('entityName' => $entityName), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->clear($entityName);
    }

    public function close()
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'close', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->close();
    }

    public function persist($entity)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'persist', array('entity' => $entity), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'remove', array('entity' => $entity), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'refresh', array('entity' => $entity), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'detach', array('entity' => $entity), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'merge', array('entity' => $entity), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'contains', array('entity' => $entity), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'getEventManager', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'getConfiguration', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'isOpen', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'getUnitOfWork', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'getProxyFactory', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'initializeObject', array('obj' => $obj), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'getFilters', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'isFiltersStateClean', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'hasFilters', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return $this->valueHolderc28eb->hasFilters();
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

        $instance->initializer67820 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc28eb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc28eb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc28eb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, '__get', ['name' => $name], $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        if (isset(self::$publicProperties7fe7f[$name])) {
            return $this->valueHolderc28eb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc28eb;

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

        $targetObject = $this->valueHolderc28eb;
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
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc28eb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc28eb;
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
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, '__isset', array('name' => $name), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc28eb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc28eb;
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
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, '__unset', array('name' => $name), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc28eb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc28eb;
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
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, '__clone', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        $this->valueHolderc28eb = clone $this->valueHolderc28eb;
    }

    public function __sleep()
    {
        $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, '__sleep', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;

        return array('valueHolderc28eb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer67820 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer67820;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer67820 && ($this->initializer67820->__invoke($valueHolderc28eb, $this, 'initializeProxy', array(), $this->initializer67820) || 1) && $this->valueHolderc28eb = $valueHolderc28eb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc28eb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc28eb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
