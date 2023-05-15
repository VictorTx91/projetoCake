<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column m-2">
        <div class="side-nav item">
            <i class="bi bi-house"></i> <?= $this->Html->link(__('home'), ['action' => 'index']) ?> > <?= $this->Html->link(__('adicionar'), ['action' => 'add']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="user form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Adicionar Usuário') ?></legend>
                <div>
                        <label class="label-grid">CPF</label>
                        <?php echo $this->Form->control('cpf', ['label'=> false ,'class' => 'input-width']);?>
                    </div>
                    <div>
                        <label class="label-grid">Nome</label>
                        <?php echo $this->Form->control('nome', ['label'=> false ,'class' => 'input-width']);?>
                    </div>
                    <div>
                        <label class="label-grid">Email</label>
                        <?php echo $this->Form->control('email', ['label'=> false ,'class' => 'input-width']);?>
                    </div>
                    <div>
                        <label class="label-grid">Idade</label>
                        <?php echo $this->Form->control('idade', ['label'=> false ,'class' => 'input-width']);?>
                    </div>
            </fieldset>
            <div class="fix-button"><?= $this->Form->button(__('Gravar'),['class' => 'btn btn-success float-right']) ?></div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<?php echo $this->Html->css('user/user');?>
