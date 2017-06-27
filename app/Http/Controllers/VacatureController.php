<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vac;

class VacatureController extends Controller
{
    public function index($id)
    {
      $vacs = Vac::where('id', $id)->first();
      return view('vacatures.vacature')
        ->with('vacs', $vacs);
    }
    public function destroy($id)
    {
        $task = Vac::findOrFail($id);

        $task->delete();

        Session::flash('flash_message', 'Task successfully deleted!');

        return redirect()->route('/home');
    }
}
