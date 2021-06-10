<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;
use App\Model\JenisBuku;

class JenisBukuController extends Controller
{
    public function index(Request $request)
    {
        $jenis_buku = JenisBuku::when($request->cari, function ($query) use ($request) {
            $query
            ->where('jenis', 'like', "%{$request->cari}%");
        })->paginate(5);

        $buku->appends($request->only('cari'));

        return view('jenis_buku.index', [
            'jenis_buku' => $jenis_buku,
        ])
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis'        => 'required',

        ]);

        JenisBuku::create($request->all());

        return redirect()
                ->route('jenis_buku.index')
                ->with('success','jenis_buku created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(JenisBuku $jenis_buku)
    {
        return view('jenis_buku.show', compact('jenis_buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisBuku $jenis_buku
        return view('jenis_buku.edit', compact('jenis_buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisBuku $jenis_buku)
    {
        $request->validate([
            'jenis_buku'        => 'required',
            'tahun_terbit' => 'required',
        ]);

        $jenis_buku->update($request->all());

        return redirect()
                ->route('jenis_buku.index')
                ->with('success','jenis_buku updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisBuku $jenis_buku)
    {
        $jenis_buku->delete();

        return redirect()->route('jenis_buku.index')
                ->with('success','JenisBuku deleted successfully');
    }
}
