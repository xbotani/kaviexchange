<?php

namespace App\Http\Controllers;

use App\Http\Requests\CurrencyKoya\CurrencyIndexRequest;
use App\Http\Requests\CurrencyKoya\CurrencyStoreRequest;
use App\Http\Requests\CurrencyKoya\CurrencyUpdateRequest;
use App\Models\CurrencyKoya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class KoyaController extends Controller
{

    public function __construct()
    {

        $this->middleware('permission:create currency', ['only' => ['create', 'store']]);
        $this->middleware('permission:update currency', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete currency', ['only' => ['destroy', 'destroyBulk']]);
    }

     public function index(CurrencyIndexRequest $request)
    {
        $currencys = CurrencyKoya::query();
        if ($request->has('search')) {
            $currencys->where('name', 'LIKE', "%" . $request->search . "%");
            $currencys->orWhere('code', 'LIKE', "%" . $request->search . "%");
            $currencys->orWhere('currency_code', 'LIKE', "%" . $request->search . "%");
        }
        $order = $request->has('order') ? $request->order : 'desc';
        $field = $request->has('field') ? $request->field : 'updated_at';
        $currencys->orderBy($field, $order);
        $perPage = $request->has('perPage') ? $request->perPage : 10;
        return Inertia::render('CurrencyKoya/Index', [
            'title'         => __('app.label.currencykoya'),
            'filters'       => $request->all(['search', 'field', 'order']),
            'perPage'       => (int) $perPage,
            'currencys'     => $currencys->paginate($perPage),
            'breadcrumbs'   => [['label' => __('app.label.currencykoya'), 'href' => route('koya.index')]],
        ]);
    }

    public function create()
    {

    }

    public function store(CurrencyStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $currency = CurrencyKoya::create([
                'name' => $request->name,
                'code' => $request->code,
                'currency_code' => $request->currency_code,
                'order' => $request->order,
                'sale' => $request->sale,
                'buy' => $request->buy,
            ]);
            DB::commit();
            return back()->with('success', __('app.label.created_successfully', ['name' => $currency->name]));
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', __('app.label.created_error', ['name' => __('app.label.currencykoya')]) . $th->getMessage());
        }
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(CurrencyUpdateRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $currency = CurrencyKoya::findOrFail($id);
            $currency->update([
                'name' => $request->name,
                'code' => $request->code,
                'currency_code' => $request->currency_code,
                'order' => $request->order,
                'sale' => $request->sale,
                'buy' => $request->buy,
            ]);
            DB::commit();
            return back()->with('success', __('app.label.updated_successfully', ['name' => $currency->name]));
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', __('app.label.updated_error') . $th->getMessage());
        }
    }

    public function destroy(CurrencyKoya $koya)
    {
        try {
            $koya->delete();
            return back()->with('success', __('app.label.deleted_successfully', ['name' => $koya->name]));
        } catch (\Throwable $th) {
            return back()->with('error', __('app.label.deleted_error', ['name' => $koya->name]) . $th->getMessage());
        }
    }

    public function destroyBulk(Request $request)
    {
        try {
            $currency = CurrencyKoya::whereIn('id', $request->id);
            $currency->delete();
            return back()->with('success', __('app.label.deleted_successfully', ['name' => count($request->id) . ' ' . __('app.label.currencykoya')]));
        } catch (\Throwable $th) {
            return back()->with('error', __('app.label.deleted_error', ['name' => count($request->id) . ' ' . __('app.label.currencykoya')]) . $th->getMessage());
        }
    }

    public function home()
    {
        try {
            $currencys = CurrencyKoya::orderBy('order', 'asc')->get();

            return Inertia::render('Home', [
                'currencies' => $currencys->toArray(),
                'title' => __('app.label.currencykoya'),
                'isKoyaBranch' => true,
            ]);
        } catch (\Throwable $th) {
            return back()->with('error', 'Error loading currencies: ' . $th->getMessage());
        }
    }
}
