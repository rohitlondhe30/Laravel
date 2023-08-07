<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(!$note->trashed() ? __('Notes') : __('Trash')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert-success','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert-success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php echo e(session('success')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <div class="flex">
                <?php if(!$note->trashed()): ?>
                    <p class="opacity-70">
                        <strong>Created : </strong> <?php echo e($note->created_at->diffForHumans()); ?>

                    </p>
                    <p class="opacity-70 ml-8">
                        <strong>Updated : </strong> <?php echo e($note->updated_at->diffForHumans()); ?>

                    </p>
                    <a href="<?php echo e(route('notes.edit', $note)); ?>" class="btn-link ml-auto">Edit Note</a>
                    <form action="<?php echo e(route('notes.destroy', $note)); ?>" method="post">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you wish to move this note to trash?')">Move to Trash</button>
                    </form>
                <?php else: ?>
                    <p class="opacity-70">
                        <strong>Deleted: </strong> <?php echo e($note->created_at->diffForHumans()); ?>

                    </p>
                    <form action="<?php echo e(route('trashed.update', $note)); ?>" method="post">
                        <?php echo method_field('put'); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-danger ml-4">Restore Note</button>
                    </form>
                    <form action="<?php echo e(route('trashed.destroy', $note)); ?>" method="post">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you wish to delete this note permanantly?')">Delete</button>
                    </form>
                <?php endif; ?>
            </div>
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="font-bold text-4xl">
                    <?php echo e($note->title); ?>

                </h2>
                <p class="mt-6 whitespace-pre-wrap"><?php echo e($note->text); ?></p>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/notes/show.blade.php ENDPATH**/ ?>