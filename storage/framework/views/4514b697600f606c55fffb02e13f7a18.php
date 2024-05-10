

<?php $__env->startSection('title', "Edit Project"); ?>

<?php $__env->startSection('content'); ?>

<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden">
        <form class="flex flex-wrap" method="post" action="<?php echo e(route('project.update', $project->id)); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
                <label class="block mb-1 text-gray-600" for="projectname">Project Name</label>
                <input id="projectname" name="projectname"
                    class="w-full h-10 mb-2 mt-1 pl-3 pr-5 rounded-md shadow-sm border-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:ring-opacity-50"
                    type="text" value="<?php echo e(old('projectname', $project->projectname)); ?>" />

                <label class="block mb-1 text-gray-600" for="description">Description</label>
                <input id="description" name="description"
                    class="w-full h-10 mb-2 mt-1 pl-3 pr-5 rounded-md shadow-sm border-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:ring-opacity-50"
                    type="text" value="<?php echo e(old('description', $project->description)); ?>" />

                <label for="start_date" class="mt-2 text-gray-600">Start Date</label>
                <input id="start_date" name="start_date"
                    class="w-full h-10 mb-2 mt-1 px-3 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    type="date" value="<?php echo e(old('start_date', $project->start_date)); ?>" />

                <label for="end_date" class="mt-2 text-gray-600">End Date</label>
                <input id="end_date" name="end_date"
                    class="w-full h-10 mb-2 mt-1 px-3 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    type="date" value="<?php echo e(old('end_date', $project->end_date)); ?>" />

                <label for="status" class="mt-2 text-gray-600">Status</label>
                <select id="status" name="status"
                    class="w-full h-10 mb-2 mt-1 pl-3 pr-5 rounded-md shadow-sm border-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:ring-opacity-50">
                    <option value="active" <?php echo e($project->status == 'active' ? 'selected' : ''); ?>>active</option>
                    <option value="completed" <?php echo e($project->status == 'completed' ? 'selected' : ''); ?>>completed</option>
                    <option value="on hold" <?php echo e($project->status == 'on hold' ? 'selected' : ''); ?>>on hold</option>
                </select>

                <label class="block mb-1 text-gray-600" for="projectmanager_id">Project Manager</label>
                <input id="projectmanager_id" name="projectmanager_id"
                    class="w-full h-10 mb-2 mt-1 pl-3 pr-5 rounded-md shadow-sm border-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:ring-opacity-50"
                    type="number" min="0" value="<?php echo e(old('projectmanager_id', $project->projectmanager_id)); ?>" />

                <br><br><br>
                <button type="submit"
                    class="w-full h-10 px-5 mt-3 text-gray-100 transition-colors duration-200
        bg-yellow-600 rounded-lg focus:shadow-outline hover:bg-yellow-700">
                    Update
                </button>
            </form>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Christopher Malambo\Desktop\projects-tracker project\projects-tracker\resources\views\projects\edit.blade.php ENDPATH**/ ?>