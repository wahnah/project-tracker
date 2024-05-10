

<?php $__env->startSection('title', "Home"); ?>


<?php $__env->startSection('content'); ?>
<div class="py-6">
    <div class="flex justify-content-between">
    <div class="w-1/2 p-4">
  <div class="bg-slate-50 shadow shadow-md rounded p-4 h-screen">
  <p class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-gray-500" style="font-size: 14px;
                    font-weight: bold;">Project Completion Pie Chart</p>

                    <PieChart></PieChart>

  </div>
</div>
        <div class="w-1/2 p-4 ">
            <!-- Small Card 1 -->
            <div class="bg-slate-50 shadow shadow-md rounded p-4 mb-4 h-1/2">
                <p class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-gray-500" style="font-size: 14px;
                    font-weight: bold;">Up-Coming Projects</p>
               <Slideshow></Slideshow>
            </div>
            <!-- Small Card 2 -->
            <div class="bg-slate-50 shadow shadow-md rounded p-4 h-1/2">
            <p class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-gray-500" style="font-size: 14px;
                    font-weight: bold;">Overdue Projects</p>
                
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Christopher Malambo\Desktop\projects-tracker project\projects-tracker\resources\views\home.blade.php ENDPATH**/ ?>