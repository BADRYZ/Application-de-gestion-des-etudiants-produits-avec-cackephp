<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $product->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products view content">
            <h3><?= h($product->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Product Name') ?></th>
                    <td><?= h($product->Product_Name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Type') ?></th>
                    <td><?= h($product->Product_Type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Vendor') ?></th>
                    <td><?= h($product->Product_Vendor) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($product->ID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
