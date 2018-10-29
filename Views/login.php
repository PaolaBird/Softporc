<?php 
print('<div class="app flex-row align-items-center">
  <div class="container-fluid  ">
    <div class="row justify-content-center">
      <div class="col-md-8 ">              <p class="text-muted">Control de acceso al sistema</p>

        <div class="card-group mb-0 ">
          <div class="card p-3 ">
            <div class="card-body ">
              <h1>Acceder</h1>
              <form method="post">
              <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" required>
              </div>
              <div class="input-group mb-4">
                <span class="input-group-addon"><i class="icon-lock"></i></span>
                <input type="password" name="clave" id="clave" class="form-control" placeholder="Password" required>
              </div>
              <div class="row">
                <div class="col-6">
                  <button type="submit" class="btn btn-primary px-4">Acceder</button>
                </div>
                <div class="col-6 text-right">
                  <button type="button" class="btn btn-link px-0">Olvidaste tu password?</button>
                </div>
                <form>
              </div><
            </div>
          </div>
          <div class="card text-white bg-primary py-5 d-md-down-none " style="width:44%">
            <div class="card-body text-center">
              <div>
                <h2>SOFTPORC</h2>
                <p>Sofware desarrollado para la administracion de una granja porcina..</p>
                <a href="https://www.udemy.com/user/juan-carlos-arcila-diaz/" target="_blank" class="btn btn-primary active mt-3">Ve al inicio!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div></div>
');