<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	// Lista usuarios
	public function index()
	{
		$users = User::orderBy('id','desc')->paginate(10);
		return view('Usuarios.index', compact('users'));
	}

	// Formulario crear
	public function create()
	{
		return view('Usuarios.newuser');
	}

	// Almacenar usuario
	public function store(Request $request)
	{
		$request->validate([
			'name' => 'required|string|max:255',
			'email' => 'required|email|unique:users,email',
			'password' => 'required|string|min:4',
		]);

		$user = new User();
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = Hash::make($request->password);
		// campos opcionales
		if ($request->filled('estado')) {
			$user->estado = $request->estado;
		}
		$user->save();

		return redirect()->route('usuarios.index')->with('success', 'Usuario creado correctamente.');
	}

	// Formulario editar
	public function edit($id)
	{
		$user = User::findOrFail($id);
		return view('Usuarios.newuser', compact('user'));
	}

	// Actualizar usuario
	public function update(Request $request, $id)
	{
		$request->validate([
			'name' => 'required|string|max:255',
			'email' => 'required|email|unique:users,email,'.$id,
			'password' => 'nullable|string|min:4',
		]);

		$user = User::findOrFail($id);
		$user->name = $request->name;
		$user->email = $request->email;
		if ($request->filled('password')) {
			$user->password = Hash::make($request->password);
		}
		if ($request->filled('estado')) {
			$user->estado = $request->estado;
		}
		$user->save();

		return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado.');
	}

	// Eliminar usuario
	public function destroy($id)
	{
		$user = User::findOrFail($id);
		$user->delete();
		return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado.');
	}
}
