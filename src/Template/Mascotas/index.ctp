<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mascota[]|\Cake\Collection\CollectionInterface $mascotas
 */
?>
<div class="mascotas index large-12 medium-8 columns content">
    <h3>
        <?= __('Mascotas') ?>
        <span style="float: right;">
            <?= $this->Html->link(__('Registrar'), ['action' => 'add'], array('class'=>'button')) ?>
        </span>
    </h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('personas_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_mascota_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('raza') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('edad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mascotas as $mascota): ?>
            <tr>
                <td><?= $this->Number->format($mascota->id) ?></td>
                <td><?= $mascota->has('persona') ? $this->Html->link($mascota->persona->id, ['controller' => 'Personas', 'action' => 'view', $mascota->persona->id]) : '' ?></td>
                <td><?= $mascota->has('tipo_mascotum') ? $this->Html->link($mascota->tipo_mascotum->id, ['controller' => 'TipoMascota', 'action' => 'view', $mascota->tipo_mascotum->id]) : '' ?></td>
                <td><?= h($mascota->raza) ?></td>
                <td><?= h($mascota->nombre) ?></td>
                <td><?= h($mascota->sexo) ?></td>
                <td><?= $this->Number->format($mascota->edad) ?></td>
                <td><?= h($mascota->created) ?></td>
                <td><?= h($mascota->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mascota->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mascota->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mascota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mascota->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
