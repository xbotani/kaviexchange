<?php

namespace App\Http\Controllers;

use App\Http\Requests\Currency\CurrencyIndexRequest;
use App\Http\Requests\Currency\CurrencyStoreRequest;
use App\Http\Requests\Currency\CurrencyUpdateRequest;
use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Illuminate\Support\Facades\Hash;

class CurrencyController extends Controller
{

    public function __construct()
    {

        $this->middleware('permission:create currency', ['only' => ['create', 'store']]);
        $this->middleware('permission:read currency', ['only' => ['index', 'show']]);
        $this->middleware('permission:update currency', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete currency', ['only' => ['destroy', 'destroyBulk']]);
    }

    public function index(CurrencyIndexRequest $request)
    {
        $currencys = Currency::query();
        if ($request->has('search')) {
            $currencys->where('name', 'LIKE', "%" . $request->search . "%");
            $currencys->orWhere('email', 'LIKE', "%" . $request->search . "%");
        }
        $order = $request->has('order') ? $request->order : 'desc';
        $field = $request->has('field') ? $request->field : 'updated_at';
        $currencys->orderBy($field, $order);
        $perPage = $request->has('perPage') ? $request->perPage : 10;
        return Inertia::render('Currency/Index', [
            'title'         => __('app.label.currency'),
            'filters'       => $request->all(['search', 'field', 'order']),
            'perPage'       => (int) $perPage,
            'currencys'         => $currencys->paginate($perPage),
            'breadcrumbs'   => [['label' => __('app.label.currency'), 'href' => route('currency.index')]],
        ]);
    }

    public function create()
    {

    }

    public function store(CurrencyStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $currency = Currency::create([
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
            return back()->with('error', __('app.label.created_error', ['name' => __('app.label.currency')]) . $th->getMessage());
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
            $currency = Currency::findOrFail($id);
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

    public function destroy(Currency $currency)
    {
        try {
            $currency->delete();
            return back()->with('success', __('app.label.deleted_successfully', ['name' => $currency->name]));
        } catch (\Throwable $th) {
            return back()->with('error', __('app.label.deleted_error', ['name' => $currency->name]) . $th->getMessage());
        }
    }

    public function destroyBulk(Request $request)
    {
        try {
            $currency = Currency::whereIn('id', $request->id);
            $currency->delete();
            return back()->with('success', __('app.label.deleted_successfully', ['name' => count($request->id) . ' ' . __('app.label.currency')]));
        } catch (\Throwable $th) {
            return back()->with('error', __('app.label.deleted_error', ['name' => count($request->id) . ' ' . __('app.label.currency')]) . $th->getMessage());
        }
    }

    public function home()
    {
        $currencys = Currency::all();

        return Inertia::render('Home', [
            'currencies'         => $currencys->sortBy('order')->values()->toArray(),
        ]);
    }
}
