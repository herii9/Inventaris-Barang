<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{

    public function index(){
        $inventories = Inventory::with('employee')->paginate(10);

        return view('pages.inventory.index', [
            'inventories' => $inventories,
        ]);
    }

    public function cetak(){
        $inventoriescetak = Inventory::with('employee')->get();

        return view('pages.inventory.cetak', [
            'inventories' => $inventoriescetak,
        ]);
    }

    public function create(){
        $employees = Employee::all();

        return view('pages.inventory.create', [
            "employees" => $employees,
        ]);
    }

    public function store(Request $request)
    {       
        $validated = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'merk_tipe' => 'required|string|max:255',
            'no_sertifikat_pabrik_chasis_mesin' => 'nullable|string|max:255',
            'no_polisi'=> 'nullable|string|max:255',
            'no_rangka' => 'nullable|string|max:255',
            'asal_perolehan' => 'required|string|max:255',
            'tahun_pembelian' => 'required|integer|min:1900|max:' . date('Y'),
            'keadaan_barang_status' => 'required|string|max:255',
            'jumlah_barang' => 'required|integer|min:1',
            'harga_barang' => 'required|numeric|min:0',
            'employee_id' => 'required|string|max:255',
        ]);

        Inventory::create($validated);
        return redirect('/inventories')->with('success', 'Barang Berhasil ditambah');
    }

    public function edit($id){
        $employees = Employee::all();
        $inventory = Inventory::findOrFail($id);

        return view('pages.inventory.edit', [
            "employees" => $employees,
            "inventory" => $inventory,
        ]);
    }

    public function update(Request $request, $id)
    {       
        $validate = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'merk_tipe' => 'required|string|max:255',
            'no_sertifikat_pabrik_chasis_mesin' => 'nullable|string|max:255',
            'no_polisi'=> 'nullable|string|max:255',
            'no_rangka' => 'nullable|string|max:255',
            'asal_perolehan' => 'required|string|max:255',
            'tahun_pembelian' => 'required|integer|min:1900|max:' . date('Y'),
            'keadaan_barang_status' => 'required|string|max:255',
            'jumlah_barang' => 'required|integer|min:1',
            'harga_barang' => 'required|numeric|min:0',
            'employee_id' => 'required|string|max:255',
        ]);

        Inventory::where('id', $id)->update([
            "nama_barang" => $request->input('nama_barang'),
            "merk_tipe" => $request->input('merk_tipe'),
            "no_sertifikat_pabrik_chasis_mesin" => $request->input('no_sertifikat_pabrik_chasis_mesin'),
            "no_rangka" => $request->input('no_rangka'),
            "asal_perolehan" => $request->input('asal_perolehan'),
            "tahun_pembelian" => $request->input('tahun_pembelian'),
            "keadaan_barang_status" => $request->input('keadaan_barang_status'),
            "jumlah_barang" => $request->input('jumlah_barang'),
            "harga_barang" => $request->input('harga_barang'),
            "employee_id" => $request->input('employee_id'),
            "no_polisi" => $request->input('no_polisi'),
        ]);
        return redirect('/inventories')->with('success', 'Barang Berhasil diubah');
    }

    public function delete($id)
    {
        $inventory = Inventory::where('id', $id);
        $inventory->delete();

        return redirect('/inventories')->with('error', 'Pegawai Berhasil dihapus');
    }
}
