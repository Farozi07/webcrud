<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneController extends Controller
{
    public function index(){
        $phone = Phone::all();
        return view('show_phone',['phone'=>$phone]);
    }

    public function insertPhone(){
        $result=Phone::create([
            'imei'=>1234567890,
            'merek'=>'Samsung',
            'nama'=>'Note 10 Plus',
            'status'=>'resmi',
            'jumlah'=>'30',
            'harga'=> 7000000,
        ]);
        dump($result);
    }

    public function create(){
        return view ('form_daftarhp');
    }

    public function store(Request $request){
        $validateData=$request->validate([
            'imei'=> 'required|size:10',
            'merek'=> 'required',
            'nama'=> 'required',
            'status'=> 'required|in:resmi,tidakresmi',
            'jumlah'=> 'required',
            'harga'=> 'required',
        ]);

        Phone::create($validateData);

        // $phone= new Phone();
        // $phone->imei=$validateData['imei'];
        // $phone->merek=$validateData['merek'];
        // $phone->nama=$validateData['nama'];
        // $phone->status=$validateData['status'];
        // $phone->jumlah=$validateData['jumlah'];
        // $phone->harga=$validateData['harga'];
        // $phone->save();
        return redirect()->route('phone.index');
    }

    public function edit(Phone $phone){
        return view ('edithp')->with('phone',$phone);
    }
    public function update(Request $request, Phone $phone){
        $validateData=$request->validate([
            'imei'=> 'required|size:10|unique:phones,imei,'.$phone->id,
            'merek'=> 'required',
            'nama'=> 'required',
            'status'=> 'required|in:resmi,tidakresmi',
            'jumlah'=> 'required',
            'harga'=> 'required',
        ]);
        $phone->update($validateData);
        return redirect()->route('phone.index',['phone'=>$phone->id])->with('Pesan',"Update data {$validateData['nama']} berhasil");
    }

    public function detail(Phone $phone){
        $result=Phone::findOrFail( $phone->id );
        return view ('detailhp')->with('phone',$phone);
    }

    public function delete(Phone $phone){
        $phone->delete();
        return redirect(route('phone.index'))->with('pesan',"Hapus data $phone->nama berhasil");
    }
}
