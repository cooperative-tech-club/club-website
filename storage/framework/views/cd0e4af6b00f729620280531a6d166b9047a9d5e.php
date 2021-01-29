<?php $__env->startSection('pageTitle','Copa Tech - User Management'); ?>

<?php $__env->startSection('content'); ?>
  <?php $__env->startComponent('dashboard.layouts.headers.auth'); ?>
    <?php $__env->startComponent('dashboard.layouts.headers.breadcrumbs'); ?>
      <li class="breadcrumb-item"><a href="<?php echo e(route('media.user.index')); ?>"><?php echo e(__('User Management')); ?></a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('List')); ?></li>
    <?php echo $__env->renderComponent(); ?>
  <?php echo $__env->renderComponent(); ?>

  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0"><?php echo e(__('Users')); ?></h3>
                <p class="text-sm mb-0">
                  <?php echo e(__('This is an example of user management. This is a minimal setup in order to get started fast.')); ?>

                </p>
              </div>
              <div class="col-4 text-right">
                <a href="<?php echo e(route('media.user.create')); ?>" class="btn btn-sm btn-primary"><?php echo e(__('Add user')); ?></a>
              </div>
            </div>
          </div>

          <div class="col-12 mt-2">
              <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <?php echo $__env->make('alerts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>

          <div class="table-responsive py-4">
            <table class="table align-items-center table-flush"  id="datatable-basic">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Photo</th>
                  <th scope="col"><?php echo e(__('Name')); ?></th>
                  <th scope="col"><?php echo e(__('Email')); ?></th>
                  <th scope="col"><?php echo e(__('Role')); ?></th>
                  <th scope="col"><?php echo e(__('Creation Date')); ?></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td>
                      <span class="avatar avatar-sm rounded-circle">
                        <img src="<?php echo e(config('app.url') . $user->profilePicture()); ?>" alt="" style="max-width: 100px; border-radiu: 25px">
                      </span>
                    </td>
                    <td><?php echo e($user->name); ?></td>
                    <td><a href="mailto:<?php echo e($user->email); ?>"><?php echo e($user->email); ?></a></td>
                    <td><?php echo e($user->role->name); ?></td>
                    <td><?php echo e($user->created_at->format('l, M d, Y')); ?></td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <?php if($user->id != auth()->id()): ?>
                            <a class="dropdown-item" href="<?php echo e(route('media.user.edit', $user)); ?>"><?php echo e(__('Edit')); ?></a>
                            <form action="<?php echo e(route('media.user.destroy', $user)); ?>" method="post">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('delete'); ?>
                              <button type="button" class="dropdown-item" onclick="confirm('<?php echo e(__("Are you sure you want to delete this user?")); ?>') ? this.parentElement.submit() : ''">
                                  <?php echo e(__('Delete')); ?>

                              </button>
                            </form>
                          <?php else: ?>
                            <a class="dropdown-item" href="<?php echo e(route('media.profile.edit')); ?>"><?php echo e(__('My Profile')); ?></a>
                          <?php endif; ?>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <?php echo $__env->make('dashboard.layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
  <link rel="stylesheet" href="<?php echo e(asset('assets/dashboard')); ?>/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('assets/dashboard')); ?>/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('assets/dashboard')); ?>/plugins/datatables.net-select-bs4/css/select.bootstrap4.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
  <script src="<?php echo e(asset('assets/dashboard')); ?>/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo e(asset('assets/dashboard')); ?>/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo e(asset('assets/dashboard')); ?>/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo e(asset('assets/dashboard')); ?>/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="<?php echo e(asset('assets/dashboard')); ?>/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="<?php echo e(asset('assets/dashboard')); ?>/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="<?php echo e(asset('assets/dashboard')); ?>/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="<?php echo e(asset('assets/dashboard')); ?>/plugins/datatables.net-select/js/dataTables.select.min.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard.layouts.app', [
  'title' => __('User Management'),
  'parentSection' => 'users',
  'elementName' => 'user'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mihz\Desktop\aekiti\resources\views/dashboard/media/users/index.blade.php ENDPATH**/ ?>