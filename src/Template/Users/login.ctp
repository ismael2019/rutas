
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create('User', ['class' => 'navbar-form navbar-lefth']) ?>
  <div class="form-group">
    <?= $this->Form->input('username',['class' => 'form-control']) ?>
  </div>
  <div class="form-group">
    <?= $this->Form->input('password',['class' => 'form-control']) ?>
  </div>
   <div class="form-group">
    <?= $this->Form->button(__('Login'),['class'=>'btn btn-primary']); ?>
  </div>
  <?= $this->Form->end() ?>
<hr>
<br>
<div class="jumbotron">
	<h1>Bienvenido Usuario</h1>
	<p>Para poder Ingresar a la Pagina debera introducir el nombre de usuario y el password proporcionado por el administrador</p>
  <div class="container" id="deslizar">
   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          En que Consiste Esta Pagina
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        Esta Pagina esta Diseñada con el fin de compartir imagenes y videos de todo tipo 
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Imagenes
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
       En la seccion de imagenes se podra subir imagenes tanto el usuario como el administrador 
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Videos 
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
       En la seccion de Videos podran subir distintos tipos de videos tanto los usuarios como el administrador 
      </div>
    </div>
  </div>
</div>
  </div>
</div>

