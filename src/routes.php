<?php

return [
    '~^articles/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'view'],
    '~^$~' => [\MyProject\Controllers\MainController::class, 'main'],
    '~^about$~' => [\MyProject\Controllers\AboutController::class, 'view'],
];