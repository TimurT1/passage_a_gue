<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKEUseTx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKEUseTx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKEUseTx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKEUseTx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKEUseTx\App_KernelDevDebugContainer([
    'container.build_hash' => 'KEUseTx',
    'container.build_id' => 'f37a4142',
    'container.build_time' => 1621244677,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKEUseTx');
