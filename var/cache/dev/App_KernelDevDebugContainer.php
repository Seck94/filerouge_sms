<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRseiWOc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRseiWOc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRseiWOc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRseiWOc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRseiWOc\App_KernelDevDebugContainer([
    'container.build_hash' => 'RseiWOc',
    'container.build_id' => 'd6062385',
    'container.build_time' => 1605642174,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRseiWOc');
