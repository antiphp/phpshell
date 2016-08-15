<?php
/**
 * template file
 */
?>
<?php if ($this->namespaces->has($this->phpClass)): ?>
namespace <?= $this->namespace->get($this->phpClass)->getName(); ?>
<?php endif; ?>

<?php if ($this->phpClass->isFinal()): ?>final <?php endif; ?>
<?php if ($this->phpClass->isAbstract()): ?>abstract <?php endif; ?>
class <?= $this->phpClass->getName(); ?>

{}

