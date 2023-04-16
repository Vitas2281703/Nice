<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Models\OrderPoint;
use App\Models\OrderService;
use App\Models\User;
use App\Services\Contracts\DeviceService;
use App\Services\Contracts\OrderServiceService;
use App\Services\Contracts\PromotionService;
use App\Services\Contracts\ServiceService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class OrderController extends BaseModuleController
{

    public function __construct(
        Application $app,
        Request $request,
        public readonly OrderServiceService $service
    )
    {
        parent::__construct($app, $request);
    }
    protected $moduleName = 'orders';



    protected $ignoreFieldsBeforeSave = [
        'point'
    ];
    protected $titleColumnKey = 'formatted_title';

    protected $indexColumns = [
        'formatted_title' => [ // field column
            'title' => 'Номер заказа',
            'field' => 'formatted_title',
        ],
        'status' => [
            'title' => 'Статус заказа',
            'field' => 'status'
        ],
        'status_payment' => [
            'title' => 'Статус оплаты',
            'field' => 'status_payment'
        ],
        'created_at' => [
            'title' => 'Дата и время',
            'field' => 'formatted_created_at'
        ]
    ];

    protected $indexOptions = [
        'permalink' => false,
    ];

    protected function formData($request): array
    {
        $order = $this->service->getAdminOrder($this->request->route()->parameters()['order']);

        $user = User::query()->where('id', $order->user_id)->first();

        return [
            'fio' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
        ];
    }

    /**
     * @param int $id
     * @param \A17\Twill\Models\Model|null $item
     * @return array
     */
    protected function form($id, $item = null)
    {
        if (! $item && $id) {
            $item = $this->repository->getById($id, $this->formWith, $this->formWithCount);
        } elseif (! $item && ! $id) {
            $item = $this->repository->newInstance();
        }

        $fullRoutePrefix = 'admin.' . ($this->routePrefix ? $this->routePrefix . '.' : '') . $this->moduleName . '.';
        $previewRouteName = $fullRoutePrefix . 'preview';
        $restoreRouteName = $fullRoutePrefix . 'restoreRevision';

        $baseUrl = $item->urlWithoutSlug ?? $this->getPermalinkBaseUrl();
        $localizedPermalinkBase = $this->getLocalizedPermalinkBase();
        $itemId = $this->getItemIdentifier($item);
        $fields = $this->repository->getFormFields($item);
        $orderPoints = OrderPoint::query()->where('order_id', $id)->get();
        $sum = 0;
        foreach ($orderPoints as $point) {
            $fields['browsers']['point'][] = [
                'id' => $point->id,
                'name' => $point->orderService->title.' Цена: '.$point->orderService->price
            ];
            $sum += ($point->orderService->price * $point->amount);
        }
        $order = $this->service->getAdminOrder($this->request->route()->parameters()['order']);
        $fields['sum'] = ['name' => $sum];
        $fields['sum_with_bonuses'] = ['name' => $sum - $order->bonuses];
        $data = [
                'item' => $item,
                'moduleName' => $this->moduleName,
                'routePrefix' => $this->routePrefix,
                'titleFormKey' => $this->titleFormKey ?? $this->titleColumnKey,
                'publish' => $item->canPublish ?? true,
                'publishDate24Hr' => Config::get('twill.publish_date_24h') ?? false,
                'publishDateFormat' => Config::get('twill.publish_date_format') ?? null,
                'publishDateDisplayFormat' => Config::get('twill.publish_date_display_format') ?? null,
                'translate' => $this->moduleHas('translations'),
                'translateTitle' => $this->titleIsTranslatable(),
                'permalink' => $this->getIndexOption('permalink'),
                'createWithoutModal' => ! $itemId && $this->getIndexOption('skipCreateModal'),
                'form_fields' => $fields,
                'baseUrl' => $baseUrl,
                'localizedPermalinkBase'=>$localizedPermalinkBase,
                'permalinkPrefix' => $this->getPermalinkPrefix($baseUrl),
                'saveUrl' => $itemId ? $this->getModuleRoute($itemId, 'update') : moduleRoute($this->moduleName, $this->routePrefix, 'store', [$this->submoduleParentId]),
                'editor' => Config::get('twill.enabled.block-editor') && $this->moduleHas('blocks') && ! $this->disableEditor,
                'blockPreviewUrl' => Route::has('admin.blocks.preview') ? URL::route('admin.blocks.preview') : '#',
                'availableRepeaters' => $this->getRepeaterList()->toJson(),
                'revisions' => $this->moduleHas('revisions') ? $item->revisionsArray() : null,
            ] + (Route::has($previewRouteName) && $itemId ? [
                'previewUrl' => moduleRoute($this->moduleName, $this->routePrefix, 'preview', [$itemId]),
            ] : [])
            + (Route::has($restoreRouteName) && $itemId ? [
                'restoreUrl' => moduleRoute($this->moduleName, $this->routePrefix, 'restoreRevision', [$itemId]),
            ] : []);

        return array_replace_recursive($data, $this->formData($this->request));
    }
}
