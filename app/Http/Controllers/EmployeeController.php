<?php
namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee; // melakukan import model Employee
use App\Models\Position;
use Illuminate\Http\Request;
class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with(['department', 'position'])->latest()->paginate(5); //Eloquent

        // return view('welcome');
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $departments = Department::all();
        $positions = Position::all();
        return view('employees.create', compact('departments', 'positions'));
    }

    //menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap'  => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'tanggal_lahir' => 'required|date',
            'alamat'        => 'required|string|max:255',
            'tanggal_masuk' => 'required|date',
            'department_id' => 'required|integer|exists:departments,id',
            'jabatan_id'    => 'required|integer|exists:positions,id',
            'status'        => 'required|string|max:50',
        ]);
        Employee::create($request->all());
        return redirect()->route('employees.index');
    }

    // menampilkan data (read)
    public function show(string $id)
    {
        $employee = Employee::with(['department', 'position'])->find($id);
        // $employee = Employee::find($id); ini diganti yg atas
        return view('employees.show', compact('employee'));
    }

    public function edit(string $id)
    {
        $employee = Employee::with(['department', 'position'])->find($id);
        $departments = Department::all();
        $positions = Position::all();
        // $employee = Employee::find($id);
        return view('employees.edit', compact('employee', 'departments', 'positions'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_lengkap'  => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'tanggal_lahir' => 'required|date',
            'alamat'        => 'required|string|max:255',
            'tanggal_masuk' => 'required|date',
            'department_id' => 'required|integer|exists:departments,id',
            'jabatan_id'    => 'required|integer|exists:positions,id',
            'status'        => 'required|string|max:50',
        ]);
        $employee = Employee::findOrFail($id);
        $employee->update($request->only([
            'nama_lengkap',
            'email',
            'nomor_telepon',
            'tanggal_lahir',
            'alamat',
            'tanggal_masuk',
            'department_id',
            'jabatan_id',
            'status',
        ]));
        return redirect()->route('employees.index');
    }

    //untuk menghapus data
    public function destroy(string $id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
