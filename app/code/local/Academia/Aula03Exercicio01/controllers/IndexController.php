<?php

class Academia_Aula03Exercicio01_IndexController extends Mage_Core_Controller_Front_Action{
  
   public function blocksAction(){
       $this->loadLayout();
       $block = $this->getLayout()->createBlock('academia_aula3exercicio01/exer01');
       $block->setText("Exercicio 01 da Aula 3");
       $this->getLayout()->getBlock('content')->insert($block);
       $this->renderLayout();
   }

}
?>
