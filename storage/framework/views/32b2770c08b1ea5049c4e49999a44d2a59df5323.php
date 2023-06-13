<div>
 <?php $__env->slot('header', null, []); ?> 
    <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
    <?php echo e(__('chat')); ?>

</h2>  <?php $__env->endSlot(); ?>

    <div class="chat_container">

        <div class="chat_list_container">

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('chat.chat-list')->html();
} elseif ($_instance->childHasBeenRendered('l1024436159-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1024436159-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1024436159-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1024436159-0');
} else {
    $response = \Livewire\Livewire::mount('chat.chat-list');
    $html = $response->html();
    $_instance->logRenderedChild('l1024436159-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        </div>

        <div class="chat_box_container">

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('chat.chatbox')->html();
} elseif ($_instance->childHasBeenRendered('l1024436159-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l1024436159-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1024436159-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1024436159-1');
} else {
    $response = \Livewire\Livewire::mount('chat.chatbox');
    $html = $response->html();
    $_instance->logRenderedChild('l1024436159-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('chat.send-message')->html();
} elseif ($_instance->childHasBeenRendered('l1024436159-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l1024436159-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1024436159-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1024436159-2');
} else {
    $response = \Livewire\Livewire::mount('chat.send-message');
    $html = $response->html();
    $_instance->logRenderedChild('l1024436159-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div><?php /**PATH /Users/sergeybegrakyan/MY_PROJECT/resources/views/livewire/chat/main.blade.php ENDPATH**/ ?>