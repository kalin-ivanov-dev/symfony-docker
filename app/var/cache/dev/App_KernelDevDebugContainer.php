<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNd4H0jO\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNd4H0jO/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNd4H0jO.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNd4H0jO\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNd4H0jO\App_KernelDevDebugContainer([
    'container.build_hash' => 'Nd4H0jO',
    'container.build_id' => '4c6b23b9',
    'container.build_time' => 1696193517,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNd4H0jO');
