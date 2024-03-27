<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Interfaces\RekeningNumberInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\RekeningNumberRequest;
use App\Models\RekeningNumber;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RekeningNumberController extends Controller
{


    private RekeningNumberInterface $rekeningNumber;

    public function __construct(RekeningNumberInterface $rekeningNumber)
    {
        $this->rekeningNumber = $rekeningNumber;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $rekeningNumbers = $this->rekeningNumber->get();
        $pin = auth()->user()->pinRekening ? auth()->user()->pinRekening->pin : null;
        $pin = substr($pin, 0, -4);

        return view('dashboard.pages.reseller-dashboard.balance-withdraws.index', compact('rekeningNumbers', 'pin'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RekeningNumberRequest $request): RedirectResponse
    {
        $this->rekeningNumber->store($request->validated());
        return redirect()->back()->with('success', 'Berhasil menambahkan rekening baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RekeningNumberRequest $request, RekeningNumber $rekeningNumber):RedirectResponse
    {
        $this->rekeningNumber->update($rekeningNumber->id,$request->validated());
        return redirect()->back()->with('success','Berhasil memperbarui data rekening');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RekeningNumber $rekeningNumber): RedirectResponse
    {
        $this->rekeningNumber->delete($rekeningNumber->id);
        return redirect()->back()->with('success', 'Berhasil menghapus data rekening');
    }
}