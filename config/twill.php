<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Twill app locale
    |--------------------------------------------------------------------------
    */

    'locale' => 'ru',
    'fallback_locale' => config('app.fallback_locale'),
    'available_user_locales' => [
        'ru',
    ],

    /*
    |--------------------------------------------------------------------------
    | Twill File Library configuration
    |--------------------------------------------------------------------------
    |
    | This allows you to provide the package with your configuration
    | for the file library disk, endpoint type and others options depending
    | on your endpoint type.
    |
    | Supported endpoint types: 'local' and 's3'.
    | Set cascade_delete to true to delete files on the storage too when
    | deleting from the file library.
    | If using the 'local' endpoint type, define a 'local_path' to store files.
    | Supported file services:
    | - 'A17\Twill\Services\FileLibrary\Disk'
    |
    */

    'file_library' => [
        'endpoint_type' => env('FILE_LIBRARY_ENDPOINT_TYPE', 'local'),
        'cascade_delete' => env('FILE_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('FILE_LIBRARY_LOCAL_PATH', 'uploads'),
        'file_service' => env('FILE_LIBRARY_FILE_SERVICE', 'A17\Twill\Services\FileLibrary\Disk'),
        'acl' => env('FILE_LIBRARY_ACL', 'public-read'),
        'filesize_limit' => env('FILE_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => [],
        'prefix_uuid_with_local_path' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Twill Media Library configuration
    |--------------------------------------------------------------------------
    |
    | This allows you to provide the package with your configuration
    | for the media library disk, endpoint type and others options depending
    | on your endpoint type.
    |
    | Supported endpoint types: 'local' and 's3'.
    | Set cascade_delete to true to delete files on the storage too when
    | deleting from the media library.
    | If using the 'local' endpoint type, define a 'local_path' to store files.
    | Supported image services:
    | - 'A17\Twill\Services\MediaLibrary\Imgix'
    | - 'A17\Twill\Services\MediaLibrary\Local'
    |
    */

    'media_library' => [
        'endpoint_type' => env('MEDIA_LIBRARY_ENDPOINT_TYPE', 'local'),
        'cascade_delete' => env('MEDIA_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('MEDIA_LIBRARY_LOCAL_PATH', 'uploads'),
        'image_service' => env('MEDIA_LIBRARY_IMAGE_SERVICE', \A17\Twill\Services\MediaLibrary\Local::class),
        'acl' => env('MEDIA_LIBRARY_ACL', 'private'),
        'filesize_limit' => env('MEDIA_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => ['svg', 'jpg', 'gif', 'png', 'jpeg'],
        'init_alt_text_from_filename' => true,
        'prefix_uuid_with_local_path' => config('twill.file_library.prefix_uuid_with_local_path', false),
        'translated_form_fields' => false,
        'show_file_name' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Base classes for automatic generation of Modules and Capsules
    |--------------------------------------------------------------------------
    */

    'base_model' => A17\Twill\Models\Model::class,
    'base_translation_model' => A17\Twill\Models\Model::class,
    'base_slug_model' => A17\Twill\Models\Model::class,
    'base_revision_model' => A17\Twill\Models\Revision::class,
    'base_repository' => A17\Twill\Repositories\ModuleRepository::class,
    'base_request' => A17\Twill\Http\Requests\Admin\Request::class,

    'dashboard' => [
        'modules' => [
            'App\Models\Order' => [ // module name if you added a morph map entry for it, otherwise FQN of the model (eg. App\Models\Project)
                'name' => 'orders', // module name
                'label' => 'Заказы', // optional, if the name of your module above does not work as a label
                'label_singular' => 'Заказы', // optional, if the automated singular version of your name/label above does not work as a label
                'routePrefix' => 'orders', // optional, if the module is living under a specific routes group
                'count' => true, // show total count with link to index of this module
                'activity' => false, // show activities on this module in activities list
                'search' => true, // show results for this module in global search
                'search_fields' => ['user.name', 'user.phone', 'user.email'],
            ],
            'App\Models\Request' => [ // module name if you added a morph map entry for it, otherwise FQN of the model (eg. App\Models\Project)
                'name' => 'requests', // module name
                'label' => 'Заявки', // optional, if the name of your module above does not work as a label
                'label_singular' => 'Заявки', // optional, if the automated singular version of your name/label above does not work as a label
                'routePrefix' => 'orders', // optional, if the module is living under a specific routes group
                'count' => true, // show total count with link to index of this module
                'activity' => false, // show activities on this module in activities list
                'search' => true, // show results for this module in global search
                'search_fields' => ['user.name', 'user.phone', 'user.email'],
            ],
            'App\Models\News' => [ // module name if you added a morph map entry for it, otherwise FQN of the model (eg. App\Models\Project)
                'name' => 'news', // module name
                'label' => 'Новости', // optional, if the name of your module above does not work as a label
                'label_singular' => 'Новости', // optional, if the automated singular version of your name/label above does not work as a label
                'count' => true, // show total count with link to index of this module
                'create' => true, // show link in create new dropdown
                'draft' => true,
                'activity' => true, // show activities on this module in activities list
                'search' => true, // show results for this module in global search
                'search_fields' => ['title', 'description'],
            ],
            'App\Models\Promotion' => [ // module name if you added a morph map entry for it, otherwise FQN of the model (eg. App\Models\Project)
                'name' => 'promotions', // module name
                'label' => 'Акции', // optional, if the name of your module above does not work as a label
                'label_singular' => 'Акции', // optional, if the automated singular version of your name/label above does not work as a label
                'routePrefix' => 'main-page', // optional, if the module is living under a specific routes group
                'count' => true, // show total count with link to index of this module
                'create' => true, // show link in create new dropdown
                'draft' => true,
                'activity' => true, // show activities on this module in activities list
                'search' => true, // show results for this module in global search
                'search_fields' => ['title', 'description'],
            ],
            'App\Models\User' => [ // module name if you added a morph map entry for it, otherwise FQN of the model (eg. App\Models\Project)
                'name' => 'users', // module name
                'label' => 'Клиенты', // optional, if the name of your module above does not work as a label
                'label_singular' => 'Клиенты', // optional, if the automated singular version of your name/label above does not work as a label
                'routePrefix' => 'orders', // optional, if the module is living under a specific routes group
                'count' => true, // show total count with link to index of this module
                'activity' => false, // show activities on this module in activities list
                'search' => true, // show results for this module in global search
                'search_fields' => ['name', 'email', 'phone'],
            ],
        ],
    ],

    'frontend' => [
        'views_path' => '/',
    ],

];

