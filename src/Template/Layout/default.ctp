<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    

    <?= $this->fetch('meta') ?>
    <?= $this->Html->css(['bootstrap.min','estilo']) ?>
</head>
<body>
<?php
            if ($current_user['role'] == 'admin' or $current_user['role'] == 'author')
                    {
                    ?>
    <div class="jumbotron">
       
            <nav >
        <ul class="nav nav-pills nav-justified">
            <li role="presentation" ><?= $this->Html->link('Inicio', ['action' => 'inicio']) ?></li>
            <?php
        if ($current_user['role'] == 'admin')
        {
        ?>
            <li><?= $this->Html->link('Lista de usuarios', ['action' => 'index']) ?></li>
             <?php } ?>
    <?php
            if ($current_user['role'] == 'admin')
        {
        ?>
            <li role="presentation"><?= $this->Html->link('Agregar Usuario', ['action' => 'add']) ?></li>
            
            <?php } ?>
            <li role="presentation"><?= $this->Html->link('Imagenes',['action'=>'imagenes'])?></li>
           
            <li role="presentation"><?= $this->Html->link('Videos',['action'=>'videos'])?></li>
           
            <?php
            if ($current_user['role'] == 'admin' or $current_user['role'] == 'author')
                    {
                    ?>
            <li role="presentation"><?= $this->Html->link('Cerrar Sesion',['action'=>'logout'])?></li>
            <?php } ?>
                 
            
            
            
        </ul>
        
    </nav>
    <hr>
    <?php } ?>
    </div>


    
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
