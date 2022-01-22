<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users view large-12 medium-8 columns content">
    <h3 style="text-transform: uppercase;">
        <?= h($user->nombres) ?>
        <span style="float: right;">
            <?= $this->Html->link(__('Lista de usuarios'), ['action' => 'index'], array('class'=>'button')) ?> 
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], array('class'=>'button')) ?>
            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id], array('class'=>'button'), ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
        </span>
    </h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
</div>
