<!-- resources/views/reports/mission_order_report.blade.php -->


<?php $__env->startSection('title', $missionOrder->order_number . '-' . $missionOrder->employee->first_name . ' ' .
    $missionOrder->employee->last_name); ?>
<?php $__env->startSection('content'); ?>

    <div class="bg-white max-w-4xl mx-auto py-4 sm:px-2 lg:px-4 printable">
        <div id="report-content">
            <div class="bg-white p-2">
                <div class="flex flex-wrap mb-2">
                    <?php if (isset($component)) { $__componentOriginal8892e718f3d0d7a916180885c6f012e7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8892e718f3d0d7a916180885c6f012e7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.application-logo','data' => ['class' => 'w-2/5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-2/5']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $attributes = $__attributesOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $component = $__componentOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__componentOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>
                    <div class="w-3/5 px-10 mt-10 mb-6 md:mb-0 text-end">
                        <p>Beyrouth, <?php echo e($missionOrder->order_date->format('d/m/Y')); ?></p>
                    </div>
                    <div class="w-full px-3 mt-4 mb-2 md:mb-0 text-center">
                        <h3 class="text-lg font-semibold">ORDRE DE MISSION <?php echo e($missionOrder->order_number); ?></h3>
                    </div>
                </div>
                <table class="table-auto w-full text-left">
                    <thead>
                        <tr class="bg-blue-200">
                            <th colspan="2" class="px-4">Missionary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-1/3">Nom, Prénom :</td>
                            <td class="w-2/3"><?php echo e($missionOrder->employee->first_name); ?>

                                <?php echo e($missionOrder->employee->last_name); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/3">Fonction :</td>
                            <td class="w-2/3"><?php echo e($missionOrder->employee->position); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/3">Résidence administrative :</td>
                            <td class="w-2/3"><?php echo e($missionOrder->employee->administrativ_residence); ?></td>
                        </tr>

                    </tbody>
                </table>
                <table class="table-auto w-full text-left">
                    <thead>
                        <tr class="bg-blue-200">
                            <th colspan="2" class="px-4">Mission</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-1/3">Objet :</td>
                            <td class="w-2/3"><?php echo e($missionOrder->purpose); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/3">Lieu de départ :</td>
                            <td class="w-2/3"><?php echo e($missionOrder->departure_location); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/3">Lieu d'arrivée :</td>
                            <td class="w-2/3"><?php echo e($missionOrder->arrive_location); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/3">Débute le :</td>
                            <td class="w-2/3"><?php echo e($missionOrder->start_date->format('d/m/Y')); ?> heure
                                <?php echo e($missionOrder->start_time); ?></td>
                        </tr>
                        <tr>
                            <td class="w-1/3">S'achève le :</td>
                            <td class="w-2/3"><?php echo e($missionOrder->end_date->format('d/m/Y')); ?> heure
                                <?php echo e($missionOrder->end_time); ?></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table-auto w-full text-left">
                    <thead>
                        <tr class="bg-blue-200">
                            <th class="px-4">Pays de Mission</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-full">
                                <?php if(in_array(
                                        $missionOrder->bareme->id,
                                        array_column(App\Models\Bareme::where('pays', 'like', '%France%')->get('id')->toArray(), 'id'))): ?>
                                    <?php echo e($missionOrder->bareme->pays); ?>

                                    (<?php echo e($missionOrder->bareme->currency); ?>)
                                <?php else: ?>
                                    <?php echo e($missionOrder->bareme->pays); ?>

                                    (Montant:<?php echo e($missionOrder->bareme->pays_per_day . ' ' . $missionOrder->bareme->currency); ?>

                                    / Repas:<?php echo e($missionOrder->bareme->meal_cost); ?> /
                                    Hebergement:<?php echo e($missionOrder->bareme->accomodation_cost); ?>)
                                <?php endif; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table-auto w-full text-left">
                    <thead>
                        <tr class="bg-blue-200">
                            <th colspan="2" class="px-4">Frais de mission</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-2/3">Prise en charge des frais de transport :</td>
                            <td class="w-1/3"><?php echo e($missionOrder->charge == 1 ? 'OUI' : 'NON'); ?></td>
                        </tr>
                        <tr>
                            <td class="w-2/3">Prise en charge des indemnités journalières de mission :</td>
                            <td class="w-1/3"><?php echo e($missionOrder->ijm == 1 ? 'OUI' : 'NON'); ?></td>
                        </tr>
                        <tr>
                            <td class="w-2/3">Prise en charge d'une assurance voyage :</td>
                            <td class="w-1/3"><?php echo e($missionOrder->assurance == 1 ? 'OUI' : 'NON'); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="w-full"><?php echo e($missionOrder->budget_text); ?></td>
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
                            <td colspan="2" class="w-full"><?php echo e($missionOrder->description); ?>

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
        <!-- Add a print button -->
    <div class="mt-6 no-print text-center">
        <button onclick="window.print()" class="bg-blue-500 px-4 py-3 hover:bg-blue-700 text-white font-bold rounded">
            <?php echo e(__('Print Report')); ?>

        </button>
        <button id="download-pdf" class="bg-blue-500 px-4 py-3  hover:bg-blue-700 text-white font-bold rounded">
            <?php echo e(__('Save as PDF file')); ?>

        </button>
    </div>
    </div>

    <script>
        document.getElementById("download-pdf").addEventListener("click", function() {
            var element = document.getElementById('report-content'); // The element you want to print

            var opt = {
                margin: [0.1, 0.3, 0.5, 0.3],
                filename: "<?php echo e($missionOrder->order_number .
                    '-' .
                    $missionOrder->employee->first_name .
                    ' ' .
                    $missionOrder->employee->last_name .
                    '.pdf'); ?>",
                image: {
                    type: 'png',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2,
                    useCORS: true,
                }, // For better quality
                jsPDF: {
                    unit: 'in',
                    format: 'a4',
                    orientation: 'portrait'
                }
            };

            // Generate and download the PDF
            html2pdf().from(element).set(opt).save();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/mission-order-app/resources/views/mission_orders/mission_order_report.blade.php ENDPATH**/ ?>