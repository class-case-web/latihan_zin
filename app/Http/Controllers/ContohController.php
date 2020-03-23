<?php

namespace App\Http\Controllers;

use App\Author;

class ContohController extends Controller
{
    public function Index()
    {
        $all = Author::all('id','nama','email','telpon');
        $find = Author::findById(2);

        $arr['page'] = 'Contoh';
        $arr['semua'] = $all;
        $arr['cari'] = $find;
        return view('Contoh.index',$arr);
    }

    public function Update($id)
    {
        $data = Author::all('id','nama','email','telpon');
        foreach ($data as $key => $row) {
            echo $key . ' ';
            echo $row->nama;
            echo "<br>";
        }

        $data1 = Author::all('id','nama','email'.'telpon')
            ->where('id', $id)->first();
            echo '<br>' . $data1->nama;
    }
}
