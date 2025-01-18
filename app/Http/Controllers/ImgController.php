<?php

namespace App\Http\Controllers;

use App\Models\ImgModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ImgController extends Controller
{
    function send(Request $req)
    {
        // dd($req);
        $validator =  Validator::make($req->all(), [
            'img' => ['file', 'mimetypes:image/jpeg,image/png', 'mimes:png,jpg'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->get('img')], 400);
        }
        $img = $req->file('img');
        $hashName = str_replace('.' . $img->getClientOriginalExtension(), "", $img->hashName());




        Storage::putFileAs('', $req->file('img'), $req->file('img')->hashName());

        $img = ImgModel::create(['filename' => $req->file('img')->hashName(), 'name' => $hashName]);

        return response()->json([$req->file('img')->hashName()], 200);
    }
    function show(Request $req)
    {
        $img = ImgModel::get(['filename'])->map(function ($item) {
            return asset("storage/" . $item['filename']);
        })->toArray();
        // $img = collect($img->)
        return response()->json(['data' => ['url' => $img]], 200);
    }
    function detail_img(ImgModel $imgModel)
    {

        return response()->json(['data' => $imgModel], 200);
    }
    function delete(Request $req)
    {
        return response()->json(['data' => [$req->all(), 'sukses']], 200);
    }
}
