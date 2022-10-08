<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\ProductPurchase;
use App\Http\Requests\StoreProductPurchaseRequest;
use App\Http\Requests\UpdateProductPurchaseRequest;
use App\Http\Controllers\Controller;

class ProductPurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductPurchaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductPurchaseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductPurchase  $productPurchase
     * @return \Illuminate\Http\Response
     */
    public function show(ProductPurchase $productPurchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductPurchase  $productPurchase
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductPurchase $productPurchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductPurchaseRequest  $request
     * @param  \App\Models\ProductPurchase  $productPurchase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductPurchaseRequest $request, ProductPurchase $productPurchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductPurchase  $productPurchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductPurchase $productPurchase)
    {
        //
    }
}
