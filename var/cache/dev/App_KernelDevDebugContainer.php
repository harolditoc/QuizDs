<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2xg0OCv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2xg0OCv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2xg0OCv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2xg0OCv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2xg0OCv\App_KernelDevDebugContainer([
    'container.build_hash' => '2xg0OCv',
    'container.build_id' => '93680e6e',
    'container.build_time' => 1673402357,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2xg0OCv');
