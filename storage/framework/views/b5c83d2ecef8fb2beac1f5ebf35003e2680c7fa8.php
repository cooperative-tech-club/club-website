<?php if(auth()->user()->isLead()): ?>
  <?php echo $__env->make('dashboard.lead.layouts.nav.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif(auth()->user()->isFacilitator()): ?>
  <?php echo $__env->make('dashboard.facilitator.layouts.nav.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
  <?php echo $__env->make('dashboard.member.layouts.nav.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH C:\Users\mihz\Desktop\aekiti\resources\views/dashboard/layouts/navbars/navs/auth.blade.php ENDPATH**/ ?>