<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $user
 */
?>
<div class="user index content">
    <div><h3><?= __('Usuários') ?></h3></div>
    
    <?= $this->Html->link(__('Novo'). ' <i class="bi bi-plus-lg"></i>',['action' => 'add'],
    ['target' => '_blank', 'escape' => false, 'class' => 'float-right btn btn-primary btn-lg', 'id' => 'white-color']
) ?>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('CPF') ?></th>
                    <th><?= $this->Paginator->sort('Nome') ?></th>
                    <th><?= $this->Paginator->sort('Email') ?></th>
                    <th><?= $this->Paginator->sort('Idade') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $user): ?>
                <tr>
                    <td><?= h($user->cpf) ?></td>
                    <td><?= h($user->nome) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= $user->idade === null ? '' : $this->Number->format($user->idade) ?></td>
                    <td>
                        <?= $this->Html->link(__('Ver') . ' <i class="bi bi-file-text"></i>', ['action' => 'view', $user->ID], ['escape' => false, 'target' => '_blank', 'class' => 'btn btn-primary btn-lg']) ?>
                        <?= $this->Html->link(__('Editar') . ' <i class="bi bi-pencil"></i>', ['action' => 'edit', $user->ID], ['escape' => false, 'target' => '_blank', 'class' => 'btn btn-primary btn-lg']) ?>
                        <?= $this->Form->postLink(__('Excluir') . ' <i class="bi bi-trash"></i>', ['action' => 'delete', $user->ID],
                        ['escape' => false, 'class' => 'btn btn-danger btn-lg', 'target' => '_blank', 'confirm' => __('Tem certeza de que deseja excluir o registro de CPF {0}?', $user->cpf)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próxima') . ' >') ?>
            <?= $this->Paginator->last(__('última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de um total de {{count}}')) ?></p>
    </div>
</div>

<?php echo $this->Html->css('user/user');?>