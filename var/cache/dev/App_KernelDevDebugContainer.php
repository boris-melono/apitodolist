<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYuxuwco\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYuxuwco/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYuxuwco.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYuxuwco\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYuxuwco\App_KernelDevDebugContainer([
    'container.build_hash' => 'Yuxuwco',
    'container.build_id' => '8837ec84',
    'container.build_time' => 1656005526,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYuxuwco');
