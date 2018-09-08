<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guestbook;
use Auth;

class GuestbookController extends Controller
{
    /**
     * Show our guestbook
     * 
     * @param Request $request
     * @return Response
     */
    public function list(Request $request)
    {
        $entry = Guestbook::orderBy('created_at', 'desc')
            ->paginate(25);

        return view('guestbook.list', compact('entry'));
    }

    /**
     * Save an entry
     * 
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, Guestbook::validation());
        $book = Guestbook::create([
            'user_id' => Auth::user()->id,
            'message' => $request->input('message')
        ]);

        return redirect()
            ->back()
            ->with('success', 'Thanks, your entry has been saved.');
    }
}
