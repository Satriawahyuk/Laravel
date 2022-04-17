<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friends;

class CobaController extends Controller
{
    /*
    public function index()
    {
            return 'test berhasil';
    }

    public function urutan($ke)
    {
        $friends = Friends::paginate(3);
            return view ('friend', compact('friends'));
    }
    public function coba($ke)
    {
            return view ('coba', ['ke' => $ke]);
    }
*/


    public function index ()
    {
        $friends = Friends::paginate(3);
        return view ('index', compact('friends'));
    }

    public function create ()
    {
        return view ('create');
    }
    public function store(Request $request)
    {
        // Validate the request...
 
        $friends = new Friends;
 
        $friends->nama = $request->nama;
        $friends->no_telp = $request->no_telp;
        $friends->alamat = $request->alamat;
 
        $friends->save();
    }

}
