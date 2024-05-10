

<?php $__env->startSection('title', "Create Project Task"); ?>

<?php $__env->startSection('content'); ?>

<div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden ">
                
                    <form class="flex flex-wrap" method="post" action="<?php echo e(route('projecttask.create')); ?>"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <label class="block mb-1 text-gray-600" for="sn">SN</label>
                        <input id="sn" name="sn"
                            class="w-full h-10 mb-2 mt-1 pl-3 pr-5 rounded-md shadow-sm border-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:ring-opacity-50"
                            type="text" />


                            <label class="block mb-1 text-gray-600" for="action_item">Action Item</label>
                        <input id="action_item" name="action_item"
                            class="w-full h-10 mb-2 mt-1 pl-3 pr-5 rounded-md shadow-sm border-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:ring-opacity-50"
                            type="text" />

                            <label class="block mb-1 text-gray-600" for="comment">Comment</label>
                        <input id="comment" name="comment"
                            class="w-full h-10 mb-2 mt-1 pl-3 pr-5 rounded-md shadow-sm border-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:ring-opacity-50"
                            type="text" />

                            <label class="block mb-1 text-gray-600" for="owner">Owner</label>
                        <input id="owner" name="owner"
                            class="w-full h-10 mb-2 mt-1 pl-3 pr-5 rounded-md shadow-sm border-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:ring-opacity-50"
                            type="text" />


                        <label for="new_due_date" class="mt-2 text-gray-600">Due Date</label>
                        <input id="new_due_date" name="new_due_date"
                        class="w-full h-10 mb-2 mt-1 px-3 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        type="date" />

                        <label for="end_date" class="mt-2 text-gray-600">End Date</label>
                        <input id="end_date" name="end_date"
                        class="w-full h-10 mb-2 mt-1 px-3 py-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        type="date" />

                        <label for="status" class="mt-2 text-gray-600">Status</label>
                        <select id="status" name="status"
                            class="w-full h-10 mb-2 mt-1 pl-3 pr-5 rounded-md shadow-sm border-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:ring-opacity-50"
                            placeholder="Regular input">--}}

                                <option value="open">open</option>
                                <option value="ongoing">ongoing</option>
                                <option value="closed">closed</option>

                        </select>

                        <label for="priority" class="mt-2 text-gray-600">Priority</label>
                        <select id="priority" name="priority"
                            class="w-full h-10 mb-2 mt-1 pl-3 pr-5 rounded-md shadow-sm border-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:ring-opacity-50"
                            placeholder="Regular input">--}}

                                <option value="high">high</option>
                                <option value="medium">medium</option>
                                <option value="low">low</option>

                        </select>

                        
                        <input id="project_id" name="project_id" value=<?php echo e($project_id); ?>

                            class="w-full h-10 mb-2 mt-1 pl-3 pr-5 rounded-md shadow-sm border-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:ring-opacity-50"
                            type="number" min="0" hidden/>

                        <br><br><br>

                        <button type="submit"
                            class="w-full h-10 px-5 mt-3 text-gray-100 transition-colors duration-200
        bg-yellow-600 rounded-lg focus:shadow-outline hover:bg-yellow-700">
                            Create
                        </button>
                    </form>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Christopher Malambo\Desktop\projects-tracker project\projects-tracker\resources\views\projecttasks\create.blade.php ENDPATH**/ ?>