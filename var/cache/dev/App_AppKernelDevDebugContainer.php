<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQxQ90Qa\App_AppKernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQxQ90Qa/App_AppKernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQxQ90Qa.legacy');

    return;
}

if (!\class_exists(App_AppKernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQxQ90Qa\App_AppKernelDevDebugContainer::class, App_AppKernelDevDebugContainer::class, false);
}

return new \ContainerQxQ90Qa\App_AppKernelDevDebugContainer([
    'container.build_hash' => 'QxQ90Qa',
    'container.build_id' => '81ea9405',
    'container.build_time' => 1641419102,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQxQ90Qa');
