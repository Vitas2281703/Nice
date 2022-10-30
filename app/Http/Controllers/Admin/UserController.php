<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use A17\Twill\Models\Behaviors\HasTranslation;

class UserController extends BaseModuleController
{
    protected $moduleName = 'users';

    /**
     * @var array<string, bool>
     */
    protected $indexOptions = [
        'create' => false,
        'edit' => true,
        'publish' => false,
        'bulkPublish' => false,
        'feature' => false,
        'bulkFeature' => false,
        'restore' => false,
        'bulkRestore' => false,
        'forceDelete' => false,
        'bulkForceDelete' => false,
        'delete' => false,
        'duplicate' => false,
        'bulkDelete' => false,
        'reorder' => false,
        'permalink' => false,
        'bulkEdit' => false,
        'editInModal' => false,
        'skipCreateModal' => false,
        'includeScheduledInList' => false,
    ];
    protected $fieldsGroupsFormFieldNameSeparator = null;
}
