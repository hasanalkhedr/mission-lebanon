<!-- resources/views/reports/tournee_order_report.blade.php -->

@extends('layouts.app')
@section('title', $tournee->order_number . '-' . $tournee->employee->first_name . ' ' . $tournee->employee->last_name)
@section('content')
        <div id="report-content">
            <div class="report-page" style="width: 210mm; height: 277mm; margin: 0 auto; padding: 8mm; box-sizing: border-box;">
            <!-- Header -->
            <div class="flex justify-between items-start mb-2">
                <x-application-logo class="h-12 w-2/5" />
                <div class="text-right w-3/5">
                    <p>Beyrouth, {{ $tournee->order_date->format('d/m/Y') }}</p>
                </div>
            </div>
                    <!-- Title -->
            <h1 class="text-2xl font-bold text-center mb-2">ORDRE DE TOURNEE {{ $tournee->order_number }}</h1>

                <table class="table-auto w-full text-left">
                    <thead>
                        <tr class="bg-blue-200">
                            <th colspan="2" class="px-4">Tourneeaire</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-1/3">Nom, Prénom :</td>
                            <td class="w-2/3">{{ $tournee->employee->first_name }} {{ $tournee->employee->last_name }}
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1/3">Fonction administrative:</td>
                            <td class="w-2/3">{{ $tournee->employee->position }}</td>
                        </tr>
                        <tr>
                            <td class="w-1/3">Résidence administrative :</td>
                            <td class="w-2/3">{{ $tournee->employee->administrativ_residence }}</td>
                        </tr>

                    </tbody>
                </table>
                <table class="table-auto w-full text-left">
                    <thead>
                        <tr class="bg-blue-200">
                            <th colspan="2" class="px-4">Détails Tournee</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-1/3">Objet :</td>
                            <td class="w-2/3">{{ $tournee->purpose }}</td>
                        </tr>
                        <tr>
                            <td class="w-1/3">Lieu de départ :</td>
                            <td class="w-2/3">{{ $tournee->departure_location }}</td>
                        </tr>
                        <tr>
                            <td class="w-1/3">Lieu d'arrivée :</td>
                            <td class="w-2/3">{{ $tournee->arrive_location }}</td>
                        </tr>
                        <tr>
                            <td class="w-1/3">Débute le :</td>
                            <td class="w-2/3">{{ $tournee->start_date->format('d/m/Y') }} heure
                                {{ $tournee->start_time }}</td>
                        </tr>
                        <tr>
                            <td class="w-1/3">S'achève le :</td>
                            <td class="w-2/3">{{ $tournee->end_date->format('d/m/Y') }} heure
                                {{ $tournee->end_time }}</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table-auto w-full text-left">
                    <thead>
                        <tr class="bg-blue-200">
                            <th class="px-4">Pays de Tournee</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-full">
                                {{ $tournee->bareme->pays }} | {{ $tournee->bareme->currency }}
                                                       </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table-auto w-full text-left">
                    <thead>
                        <tr class="bg-blue-200">
                            <th colspan="2" class="px-4">Frais de tournee</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-2/3">Prise en charge des frais de transport :</td>
                            <td class="w-1/3">{{ $tournee->charge == 1 ? 'OUI' : 'NON' }}</td>
                        </tr>
                        <tr>
                            <td class="w-2/3">Prise en charge des indemnités journalières de tournee :</td>
                            <td class="w-1/3">{{ $tournee->ijm == 1 ? 'OUI' : 'NON' }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="w-full">{{ $tournee->budget_text }}</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table-auto w-full text-left">
                    <thead>
                        <tr class="bg-blue-200">
                            <th colspan="2" class="px-4">Observations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2" class="w-full">{{ $tournee->description }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table-auto w-full text-left">
                    <thead>
                        <tr class="bg-blue-200">
                            <th colspan="2" class="px-4">Signature de l'autorité compétente</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2" class="w-full px-28 pt-2 pb-2 justify-end items-end text-right">
                                <span class="font-bold text-lg w-24 text-center">SCIORTINO Sabine</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="w-full px-24 pt-0 pb-40 text-right">
                                <span class="font-light text-md  w-16 text-center">COCAC - Directrice de l'IFL</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- Action Buttons -->
    <div class="flex justify-center space-x-4 mb-8 no-print">
        <button onclick="window.print()"
            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-200 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z">
                </path>
            </svg>
            {{ __('Print Report') }}
        </button>
        <button id="download-pdf"
            class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-200 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
            </svg>
            {{ __('Save as PDF file') }}
        </button>
    </div>

    <style>
        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
                margin: 0 !important;
                padding: 0 !important;
                background: white !important;
            }

            .report-page {
                width: 190mm !important;
                height: 277mm !important;
                margin: 10mm auto !important;
                page-break-after: avoid;
                page-break-inside: avoid;
            }

            .no-print {
                display: none !important;
            }
        }


        /* Screen styles */
        .report-page {
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 0;
        }

        .report-page {
            overflow: hidden;
            /* Prevent any hidden overflow */
        }

        .btn-blue {
            background: #2563eb;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.375rem;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .btn-green {
            background: #059669;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.375rem;
            font-weight: bold;
            display: flex;
            align-items: center;
        }
    </style>
    <script>
        document.getElementById("download-pdf").addEventListener("click", async function() {
            var element = document.getElementById('report-content'); // The element you want to print
            const loading = createLoadingIndicator();

            try {
                await generatePDF(element);
            } catch (error) {
                alert("Failed to generate PDF. Please try printing instead (Ctrl+P).");
                alert(error);
            } finally {
                loading.remove();
            }
        });

        function createLoadingIndicator() {
            const loading = document.createElement('div');
            loading.style.position = 'fixed';
            loading.style.top = '0';
            loading.style.left = '0';
            loading.style.width = '100%';
            loading.style.height = '100%';
            loading.style.backgroundColor = 'rgba(0,0,0,0.7)';
            loading.style.color = 'white';
            loading.style.display = 'flex';
            loading.style.flexDirection = 'column';
            loading.style.justifyContent = 'center';
            loading.style.alignItems = 'center';
            loading.style.zIndex = '9999';
            loading.innerHTML = `
                <div style="font-size: 24px; margin-bottom: 20px;">Generating PDF...</div>
                <div style="width: 50%; height: 20px; background: #555; border-radius: 10px;">
                    <div id="progress-bar" style="width: 0%; height: 100%; background: #4CAF50; border-radius: 10px;"></div>
                </div>
                <p id="progress-text" style="margin-top: 10px;">Initializing...</p>
            `;
            document.body.appendChild(loading);
            return loading;
        }

        function updateProgress(percentage, message) {
            const progressBar = document.getElementById('progress-bar');
            const progressText = document.getElementById('progress-text');
            if (progressBar) progressBar.style.width = percentage + '%';
            if (progressText) progressText.textContent = message;
        }

        async function generatePDF(element, customOptions = {}) {
            try {
                updateProgress(10, "Preparing content...");

                const defaultOptions = {
                    margin: 0,
                    filename: `Mémoire-{{ $tournee->order_number }}-{{ $tournee->employee->first_name }}_{{ $tournee->employee->last_name }}.pdf`,
                    html2canvas: {
                        scale: 2,
                        useCORS: true,
                    },
                    jsPDF: {
                        unit: 'mm', // Use millimeters for more precise control
                        format: 'a4',
                        orientation: 'portrait',
                    }
                };

                const options = {
                    ...defaultOptions,
                    ...customOptions
                };

                updateProgress(30, "Generating PDF...");

                // Create a promise that resolves when the PDF is generated
                await new Promise((resolve, reject) => {
                    html2pdf()
                        .set(options)
                        .from(element)
                        .save()
                        .then(() => {
                            updateProgress(90, "Finalizing PDF...");
                            setTimeout(() => {
                                updateProgress(100, "Done!");
                                resolve();
                            }, 500);
                        })
                        .catch(reject);
                });
            } catch (error) {
                console.error("PDF generation failed:", error);
                updateProgress(0, "Failed to generate PDF");
                throw error; // Re-throw if you want calling code to handle it
            }
        }
    </script>
@endsection
