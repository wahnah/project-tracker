

<?php $__env->startSection('title', "Tasks for "); ?>

<?php $__env->startSection('content'); ?>

<br>

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<a class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded" href="<?php echo e(route('projecttask.form', ['id' => $project_id])); ?>">Add Task</a>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <h3 class="mb-4 font-semibold text-lg text-yellow-600 leading-tight">Open Projects Task List
                </h3>
                <opentasks :project-id="<?php echo e($project_id); ?>"></opentasks>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <h3 class="mb-4 font-semibold text-lg text-yellow-600 leading-tight">Closed Projects Task List
                </h3>
                <closedtasks :project-id="<?php echo e($project_id); ?>"></closedtasks>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Christopher Malambo\Desktop\projects-tracker project\projects-tracker\resources\views\projecttasks\index.blade.php ENDPATH**/ ?>