<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7xxSwLa\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7xxSwLa/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7xxSwLa.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7xxSwLa\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7xxSwLa\App_KernelDevDebugContainer([
    'container.build_hash' => '7xxSwLa',
    'container.build_id' => '40871290',
    'container.build_time' => 1699300048,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7xxSwLa');
