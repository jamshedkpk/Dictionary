<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
public function index()
{
return view('Dashboard.Layout.Admin');
}
public function create()
{
}
public function store(Request $request)
{
}
public function show($id)
{
}
public function edit($id)
{
}
public function update(Request $request, $id)
{
}
public function destroy($id)
{
}
}
