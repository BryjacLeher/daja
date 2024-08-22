<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade\Pdf;

class EmpleadoController extends Controller
{
    // Consultar todos los empleados
    public function index()
    {
        $empleados = Empleado::orderBy('nombre', 'asc')->get();
        return view('empleados.index',compact('empleados'));
    }

    public function create()
    {
        return view('empleados.create');
    }

    // Registrar un nuevo empleado
    public function store(Request $request)
    {
        // Validar el request
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'nullable|string|max:20',
            'paga_por_hora' => 'required|numeric',
        ]);

        $empleado = new Empleado();
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->telefono = $request->telefono;
        $empleado->paga_por_hora = $request->paga_por_hora;
        $empleado->save();

        // Generar QR y PDF
        $pdfPath = $this->generateQRCodeAndPDF($empleado);
        

        // Redirige al índice con la ruta del PDF
        return redirect()->route('empleados.index')->with('pdfPath', $pdfPath);
    }

    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);

        return view('empleados.edit',compact('empleado'));
    }

    // Editar un empleado existente
    public function update(Request $request, $id)
    {
        $empleado = Empleado::findOrFail($id);

        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->telefono = $request->telefono;
        $empleado->paga_por_hora = $request->paga_por_hora;

        $empleado->save();

        return redirect()->route('empleados.index');
    }

    // Eliminar un empleado
    public function destroy($id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();

        return redirect()->route('empleados.index');
    }

    // Consultar un empleado por ID
    public function show($id)
    {
        $empleado = Empleado::findOrFail($id);
        return response()->json($empleado);
    }

    public function qr($id)
    {   
        $empleado = Empleado::findOrFail($id);
        // Generar QR y PDF
        $pdfPath = $this->generateQRCodeAndPDF($empleado);
        

        // Redirige al índice con la ruta del PDF
        return redirect()->route('empleados.index')->with('pdfPath', $pdfPath);

    }
    // Generar QR y PDF
    private function generateQRCodeAndPDF(Empleado $empleado)
    {
        $claveUnica = $empleado->id; // Usar ID como clave única

        // Ruta para almacenar el QR
        $qrCodePath = public_path('storage/qr-codes/employee-' . $claveUnica . '.png');
        
        // Verifica si el directorio existe; si no, créalo
        $directory = dirname($qrCodePath);
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }

        // Generar código QR
        $qrCode = QrCode::format('png')->size(200)->generate($claveUnica);
        file_put_contents($qrCodePath, $qrCode);

        // Generar PDF
        $pdf = Pdf::loadView('pdf.employee', [
            'empleado' => $empleado,
            'qrCodePath' => asset('storage/qr-codes/employee-' . $claveUnica . '.png') // Usa asset() para la URL
        ]);

        $pdfPath = public_path('storage/pdfs/employee-' . $claveUnica . '.pdf');

        // Verifica si el directorio existe; si no, créalo
        $pdfDirectory = dirname($pdfPath);
        if (!file_exists($pdfDirectory)) {
            mkdir($pdfDirectory, 0777, true);
        }

        $pdf->save($pdfPath);
        $pdfPath = asset('storage/pdfs/employee-' . $claveUnica . '.pdf');
        return $pdfPath; // Retorna la ruta del PDF generado
    }


    // Buscar empleados por nombre
    public function search(Request $request)
    {
        $request->validate([
            'termino' => 'required|string|max:255',
        ]);

        $termino = $request->input('termino');

        $empleados = Empleado::where('nombre', 'like', "%{$termino}%")
            ->orderBy('id', 'desc')
            ->paginate(20);

        return view('empleados.index', [
            'empleados' => $empleados,
            'termino' => $termino
        ]);
    }
}
