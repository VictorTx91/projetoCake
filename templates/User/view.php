<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column m-2">
        <div class="side-nav item">
            <i class="bi bi-house"></i> <?= $this->Html->link(__('home'), ['action' => 'index']) ?> > <?= $this->Html->link(__('ver'), ['action' => 'view']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="user view content">
            <table>
            <legend><?= __('Usuário') ?></legend>
                <tr>
                    <th><?= __('Cpf') ?></th>
                    <td><?= h($user->cpf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($user->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idade') ?></th>
                    <td><?= $user->idade === null ? '' : $this->Number->format($user->idade) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php echo $this->Html->css('user/user');?>