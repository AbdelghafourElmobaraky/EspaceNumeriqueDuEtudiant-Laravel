<?php

namespace App\Http\Controllers;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\TemplateProcessor;

use PhpOffice\PhpWord\PhpWord;
use Illuminate\Http\Request;

class ConventionStageController extends Controller
{
    public function genererPDF(Request $request)
    {
        // Chemin du modèle Word
        $templatePath = storage_path('app/templates/convention_stage.docx');
    
        // Chemin de sortie du fichier PDF
        $outputPath = storage_path('app/generated/convention_stage.pdf');
    
        // Charger le modèle Word
        $templateProcessor = new TemplateProcessor($templatePath);
    
        // Remplacer les espaces réservés par les informations saisies
        $templateProcessor->setValue('NOM_ETUDIANT', $request->input('nom_etudiant'));
        $templateProcessor->setValue('TITRE_STAGE', $request->input('titre_stage'));
    
        // Enregistrer le document en PDF
        $templateProcessor->saveAs($outputPath);
    
        // Télécharger le fichier PDF
        return response()->download($outputPath, 'convention_stage.pdf')->deleteFileAfterSend();
    }
    

}
