

<?php $__env->startSection('title', "Edit Project Task"); ?>

<?php $__env->startSection('content'); ?>

<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden">
            <form class="flex flex-wrap" method="post" action="<?php echo e(route('projecttask.update', $project->id)); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <label class="block mb-1 text-gray-600" for="sn">SN</label>
                <input id="sn" name="sn"
                    class="w-full h-10 mb-2 mt-1 pl-3 pr-5 rounded-md shadow-sm border-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:ring-opacity-50"
                    type="text" value="<?php echo e(old('sn', $project->sn)); ?>" />

                <label class="block mb-1 text-gray-600" for="action_item">Action Item</label>
                <input id="action_item" name="action_item"
                    class="w-full h-10 mb-2 mt-1 pl-3 pr-5 rounded-md shadow-sm border-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:ring-opacity-50"
                    type="text" value="<?php echo e(old('action_item', $project->action_item)); ?>" />

                <label class="block mb-1 text-gray-600" for="comment">Comment</label>
                <textarea id="comment" name="comment"
                    class="w-full h-10 mb-2 mt-1 pl-3 pr-5 rounded-md shadow-sm border-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:ring-opacity-50"
                    type="text" value="<?php echo e(old('comment', $project->comment)); ?>"></textarea>

                <label class="block mb-1 text-gray-600" for="owner">Owner</label>
                <input id="owner" name="owner"
                    class="w-full h-10 mb-2 mt-1 pl-3 pr-5 rounded-md shadow-sm border-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:ring-opacity-50"
                    type="text" value="<?php echo e(old('owner', $project->owner)); ?>" />

                <label class="block mb-1 text-gray-600" for="priority">Priority</label>
                <select id="priority" name="priority"
                    class="w-full h-10 mb-2 mt-1 pl-3 pr-5 rounded-md shadow-sm border-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:ring-opacity-50">
                    <option value="high" <?php echo e(old('priority', 'high') == 'high' ? 'selected' : ''); ?>>High</option>
                    <option value="medium" <?php echo e(old('priority', 'medium') == 'medium' ? 'selected' : ''); ?>>Medium</option>
                    <option value="low" <?php echo e(old('priority', 'low') == 'low' ? 'selected' : ''); ?>>Low</option>
                </select>

                <label class="block mb-1 text-gray-600" for="status">Status</label>
                <select id="status" name="status"
                    class="w-full h-10 mb-2 mt-1 pl-3 pr-5 rounded-md shadow-sm border-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:ring-opacity-50">
                    <option value="open" <?php echo e(old('status', 'open') == 'open' ? 'selected' : ''); ?>>Open</option>
                    <option value="ongoing" <?php echo e(old('status', 'ongoing') == 'ongoing' ? 'selected' : ''); ?>>Ongoing</option>
                    <option value="closed" <?php echo e(old('status', 'closed') == 'closed' ? 'selected' : ''); ?>>Closed</option>
                </select>

                <label class="block mb-1 text-gray-600" for="new_due_date">New Due Date</label>
                <input id="new_due_date" name="new_due_date"
                    class="w-full h-10 mb-2 mt-1 px-3 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    type="date" value="<?php echo e(old('new_due_date', $project->new_due_date)); ?>" />

                <label class="block mb-1 text-gray-600" for="project_id">Project ID</label>
                <input id="project_id" name="project_id"
                    class="w-full h-10 mb-2 mt-1 pl-3 pr-5 rounded-md shadow-sm border-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:ring-opacity-50"
                    type="number" min="0" value="<?php echo e(old('project_id', $project->project_id)); ?>" />

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Christopher Malambo\Desktop\projects-tracker project\projects-tracker\resources\views\projecttasks\edit.blade.php ENDPATH**/ ?>