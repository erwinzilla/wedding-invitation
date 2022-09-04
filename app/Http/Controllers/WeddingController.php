<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Wish;
use Illuminate\Http\Request;
use Validator;

class WeddingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pin = null)
    {
        if ($pin != '010300') {
            return redirect('wedding');
        }

        $data = Attendance::all();
        $data2 = Wish::all()->sortBy('approve');

        $param = [
            'hadir' => Attendance::where('coming', 1)->sum('qty'),
            'mungkin' => Attendance::where('coming', 2)->sum('qty'),
            'tidak' => Attendance::where('coming', 0)->sum('qty'),
            'approve' => Wish::where('approve', true)->get()->count(),
            'pending' => Wish::where('approve', false)->get()->count()
        ];

        return view('manage.data', [
            'data' => $data,
            'data2' => $data2,
            'param' => $param
        ]);
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
    public function store(Request $request)
    {
        // validasi
        $rules = [
            'name'      => 'required|min:3|max:100',
        ];

        $messages = [
            'name.required'         => 'Nama wajib diisi',
            'name.min'              => 'Nama minimal 3 karakter',
            'name.max'              => 'Nama maksimal 100 karakter',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return 'error';
        }

        // tambah data
        $attendance = new Attendance([
            'coming'        => $request->coming,
            'qty'           => $request->qty,
            'name'          => $request->name,
            'address'       => $request->address,
        ]);
        $attendance->save();

        $hasil = $attendance->id;

        if($hasil){
            $request->session()->put('attendance', 'sudah mengisi');
            $result = 'success';
        } else {
            $result = 'error';
        }

        return $result;
    }

    public function store_wish(Request $request)
    {
        // validasi
        $rules = [
            'name'      => 'required|min:3|max:100',
            'wish'      => 'required|min:3',
        ];

        $messages = [
            'name.required'         => 'Nama wajib diisi',
            'name.min'              => 'Nama minimal 3 karakter',
            'name.max'              => 'Nama maksimal 100 karakter',
            'wish.required'         => "Do'a / Pesan wajib diisi",
            'wish.min'              => "Do'a / Pesan minimal 3 karakter",
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return 'error';
        }

        // tambah data
        $wish = new Wish([
            'name'          => $request->name,
            'wish'          => $request->wish,
        ]);
        $wish->save();

        $hasil = $wish->id;

        if($hasil){
            $request->session()->put('wish', 'sudah mengisi');
            $result = 'success';
        } else {
            $result = 'error';
        }

        return $result;
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
    public function update(Request $request, $id)
    {
        $hasil = Wish::where('id', $id)
            ->update([
                'approve'       => true
            ]);

        if($hasil){
            $params = [
                'status'    => 'success',
                'message'   => 'Sukses menyetujui data'
            ];
        } else {
            $params = [
                'status'    => 'error',
                'message'   => 'Gagal menyetujui data'
            ];
        }

        return redirect('wedding/manage/010300')->with($params);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wish = Wish::find($id);

        $hasil = $wish->delete();

        if($hasil){
            $params = [
                'status'    => 'success',
                'message'   => 'Sukses menghapus data',
            ];
        } else {
            $params = [
                'status'    => 'error',
                'message'   => 'Gagal menghapus data, ada kesalahan sistem',
            ];
        }

        return redirect('wedding/manage/010300')->with($params);
    }

    public function invitation(Request $request, $name = null)
    {
        $attendance = false;
        if ($request->session()->get('attendance')) {
            $attendance = true;
        }

        $wish = false;
        if ($request->session()->get('wish')) {
            $wish = true;
        }

        $data = [
            'attendance'    => $attendance,
            'wish'          => $wish
        ];

        $data2 = Wish::where('approve', true)->get();

        return view('welcome', [
            'name' => $name,
            'data' => $data,
            'data2' => $data2
        ]);
    }
}
