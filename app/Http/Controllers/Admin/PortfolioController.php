<?php

namespace App\Http\Controllers\admin;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePortfolioRequest;
use App\Models\technology;
use App\Models\type;

class PortfolioController extends Controller
{

    public function index()
    {
        $portfolio = Portfolio::all();
        $technologies = technology::all();
        $types = type::all();
        return view('admin.index', compact('portfolio', 'technologies', "types"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $technologies = technology::all();
        $types = type::all();
        return view("admin.create", compact('technologies', "types"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortfolioRequest $request)
    {
        $dati_validi = $request->validated();

        $new_portfolio = new Portfolio();
        $new_portfolio->fill($dati_validi);
        $new_portfolio->save();

        return redirect()->route("admin.portfolios.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
