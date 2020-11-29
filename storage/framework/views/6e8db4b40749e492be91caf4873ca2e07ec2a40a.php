<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>

                    

                <?php if(Auth::user()->access=="ADMIN"): ?>
                <?php
                    define("category", "Category: Support")
                ?>

                <div></br></div>

                <b><div class= ""> <?php print(category) ?> </div></b>

                <a href="https://careers.mcdonalds.com/main/">Manage User Accounts</a></br>
                <a href="https://careers.bk.com/">Assign Roles</a></br>
                <a href="https://whataburger.com/careers">Help Desk</a>

                <?php endif; ?>

                <?php if(Auth::user()->access=="FINANCE_ADMIN"): ?>
                <?php
                    define("category", "Category: Finance")
                ?>

                <div></br></div>

                <b><div class= ""> <?php print(category) ?> </div></b>

                <a href="https://careers.mcdonalds.com/main/">Finance Reports</a></br>
                <a href="https://careers.bk.com/">Accounts Payable</a></br>
                <a href="https://whataburger.com/careers">Accounts Receivable</a></br>
                <a href="https://jobs.tacobell.com/">Tax</a></br>

                <?php endif; ?>

                <?php if(Auth::user()->access=="SALES_ADMIN"): ?>
                <?php
                    define("category", "Category: Sales")
                ?>

                <div></br></div>

                <b><div class= ""> <?php print(category) ?> </div></b>

                <a href="https://careers.mcdonalds.com/main/">Sales Reports</a></br>
                <a href="https://careers.bk.com/">Sales Leads</a></br>
                <a href="https://whataburger.com/careers">Sales Demo</a>

                <?php endif; ?>

                <?php if(Auth::user()->access=="HR_ADMIN"): ?>
                <?php
                    define("category", "Category: HR")
                ?>

                <div></br></div>

                <b><div class= ""> <?php print(category) ?> </div></b>

                <a href="https://careers.mcdonalds.com/main/">New Hire On-boarding</a></br>
                <a href="https://careers.bk.com/">Benefits</a></br>
                <a href="https://whataburger.com/careers">Payroll</a></br>
                <a href="https://jobs.tacobell.com/">Off-boarding</a></br>
                <a href="https://www.jackintheboxjobs.com/">HR Reports</a>

                <?php endif; ?>

                <?php if(Auth::user()->access=="TECH_ADMIN"): ?>
                
                <?php
                    define("category", "Category: Technology")
                ?>

                <div></br></div>

                <b><div class= ""> <?php print(category) ?> </div></b>
                
                <a href="https://careers.mcdonalds.com/main/">Application Monitoring</a></br>
                <a href="https://careers.bk.com/">Tech Support</a></br>
                <a href="https://whataburger.com/careers">App Development</a></br>
                <a href="https://jobs.tacobell.com/">App Admin</a></br>
                <a href="https://www.jackintheboxjobs.com/">Release Management</a> 

                <?php endif; ?>


                </div>    
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abeer\SEproject\resources\views/home.blade.php ENDPATH**/ ?>