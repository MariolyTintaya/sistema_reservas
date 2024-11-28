<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

use FPDF as GlobalFPDF;

class ReservaReporteController extends Controller
{
    public function generarReporte()
    {
        // Obtén las reservas con sus relaciones necesarias
        $reservas = Reserva::with(['cliente', 'tour'])->get();

        // Crear el PDF con FPDF
        $pdf = new GlobalFPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);

        // Título del reporte
        $pdf->Cell(0, 10, 'Reporte de Reservas', 0, 1, 'C');
        $pdf->Ln(10);

        // Encabezados de tabla
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(20, 10, 'ID', 1, 0, 'C');
        $pdf->Cell(50, 10, 'Cliente', 1, 0, 'C');
        $pdf->Cell(50, 10, 'Tour', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Personas', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Fecha', 1, 1, 'C');

        // Datos de la tabla
        $pdf->SetFont('Arial', '', 12);
        foreach ($reservas as $reserva) {
            $pdf->Cell(20, 10, $reserva->id_reserva, 1, 0, 'C');
            $pdf->Cell(50, 10, $reserva->cliente->nombre ?? 'N/A', 1, 0, 'C');
            $pdf->Cell(50, 10, $reserva->tour->informe ?? 'N/A', 1, 0, 'C');
            $pdf->Cell(30, 10, $reserva->num_personas, 1, 0, 'C');
            $pdf->Cell(40, 10, $reserva->fecha_creacion, 1, 1, 'C');
        }

        // Salida del PDF
        $pdf->Output('D', 'Reporte_Reservas.pdf', true);
    }
}
