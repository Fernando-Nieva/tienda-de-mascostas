<?php
namespace App\Http\Controllers;
use App\Models\Pet;
use Illuminate\Http\Request;
class PetController extends Controller
{
// Método para obtener datos y paginarlos
public function index(Request $request)
{
$query = Pet::query();
if ($request->has('buscar')) {
$query->where(function ($q) use ($request) {
$q->where('species', 'LIKE', '%' . $request->buscar . '%')
->orWhere('name', 'LIKE', '%' . $request->buscar . '%');
});
}
$pets = $query->latest()->paginate(5)->appends($request->query());
return view('pets.index', compact('pets'));
}
// Método para mostrar el formulario de creación
public function create()
{
return view('pets.create');
}
// Método para guardar los datos
public function store(Request $request)
{
$request->validate([
'name' => 'required|string|max:255',
'species' => 'required|string|max:255',
'age' => 'required|integer|min:0',
]);
Pet::create($request->all());
return redirect()->route('pets.index')
->with('success', 'Mascota registrada correctamente.');
}
}
