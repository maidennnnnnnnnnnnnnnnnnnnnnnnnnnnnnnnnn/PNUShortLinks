<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class LinkController extends Controller
{
    public function index(){
        $links = Link::all();
        return view('links.index', ["links" => $links]);
    }

    public function create() {
        return view('links.create_link');
    }

    public function store(Request $request) {
        var_dump($request->all());

        $request->validate([
            'link_input' => 'required|url',
            'name' => 'required|string|max:32',
        ]);

        $link = new Link();
        $link->original_link = $request->link_input;
        $link->name = $request->name;
        $link->short_link = Link::generateShortLink();
        $link->created_by = 'user';
        $link->updated_by = $link->created_by;
        $link->created_at = Carbon::now();
        $link->updated_at = Carbon::now();
        $link->status = 'active';
        $link->save();

        return redirect()->route('link.index');

    }
    public function redirectToLink($short_link) {
        $link = Link::where('short_link', $short_link)->first();

        if (!$link) {
            return redirect()->route('links.custom_not_found');
        }


        // Redirect to the original link
        return redirect($link->original_link);
    }
}
