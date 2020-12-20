<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stat;

class StatsController extends Controller
{
    public function index() {
      $stats = Stat::all();
      return view('admin.content.stat.index', compact('stats'));
    }

    public function show(Stat $stat) {
      return view('admin.content.stat.show', compact('stat'));
    }

    public function update(Request $request, Stat $stat) {

      $validated = $request->validate([
        'title' => 'required',
        'text' => 'required|max:10'
      ]);

      $stat->update($validated);

      return redirect('/admin/homu/about/stats');
    }
}
