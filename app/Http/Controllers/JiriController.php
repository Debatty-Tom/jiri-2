<?php

namespace App\Http\Controllers;

use App\Http\Requests\JiriStoreRequest;
use App\Models\Jiri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JiriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $upcomingJiris = Auth::user()
            ->pastJiris()
            ->get();
        $pastJiris = Auth::user()
            ->upcomingJiris()
            ->get();

        return view('jiri.index', compact('upcomingJiris', 'pastJiris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('jiri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JiriStoreRequest $request): \Illuminate\Http\RedirectResponse
    {
        $jiri = Jiri::create($request->validated());

        return to_route('jiris.show',$jiri->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Jiri $jiri): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('jiri.show', compact('jiri'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jiri $jiri)
    {
        return view('jiri.edit', compact('jiri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JiriStoreRequest $request, Jiri $jiri)
    {
        $jiri->update($request->all());

        return to_route('jiris.show', $jiri);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jiri $jiri)
    {
        $jiri->delete();

        return to_route('jiris.index');
    }
}
