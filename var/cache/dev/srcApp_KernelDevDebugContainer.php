<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9xd1yLv\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9xd1yLv/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9xd1yLv.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9xd1yLv\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container9xd1yLv\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '9xd1yLv',
    'container.build_id' => '2506fb6b',
    'container.build_time' => 1627527881,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9xd1yLv');
