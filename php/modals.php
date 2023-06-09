<div id="myModal1" class="modal">
        
            <div class="modal-body modal-dialog">
                <div class="modal-content">
                    <div class="container col-lg-11">
                        <span class="close close1">&times;</span>

                            <h1 class="text-center white">Iniciar Sesion</h1>

                            <form class="text-center" action="registro.php" method="POST">
                        
                                <img class="logo" src="./img/registro.png" width="130px" height="130px" alt="img">

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label white">Email</label>
                                    <input type="text" class="form-control bg-light" name="email" placeholder="Ingresa tu email" required>
                                </div> 

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label white">Contraseña</label>
                                    <input type="password" class="form-control bg-light" name="password" placeholder="Ingresa tu contraseña" required>
                                    <div id="emailHelp" class="white">Verifique los datos proporcionados</div> 
                                </div>

                                <button type="submit" class="btn btn-success">Iniciar Sesion</button>

                            </form>
                    </div>
                </div>
            </div>
</div>



<div id="myModal2" class="modal">
        
            <div class="modal-body modal-dialog">
                <div class="modal-content">
                    <div class="container col-lg-11">
                        <span class="close close2">&times;</span>

                            <h1 class="text-center white">Registro</h1>

                            <form class="text-center" action="registro.php" method="POST">
                        
                                <img class="logo" src="./img/registro.png" width="130px" height="130px" alt="img">

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label white">Nombre Completo</label>
                                    <input type="text" class="form-control bg-light" name="nombre" placeholder="Ingresa tu nombre completo"" required>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label white">Usuario</label>
                                    <input type="text" class="form-control bg-light" name="usuario" placeholder="Ingresa un usuario" required>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label white">Email</label>
                                    <input type="text" class="form-control bg-light" name="email" placeholder="Ingresa un correo" required>
                                </div> 

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label white">Contraseña</label>
                                    <input type="password" class="form-control bg-light" name="password" placeholder="Ingresa una contraseña" required>
                                    <div id="emailHelp" class="white">Verifique los datos proporcionados</div> 
                                </div>

                                <button type="submit" class="btn btn-success">Registrar</button>

                            </form>
                    </div>
                </div>
            </div>
</div>




<div id="myModal3" class="modalComentarios">

    <div class="modal-body modal-dialog">
        <div class="modalComentarios-content">
            <span class="close close4">&times;</span>
            <h1>Comentarios sobre la pagina</h1>
            <button type="submit" id="openModal3" class="btn btn-success">Añadir Comentario</button>
            <div id="myModal4" class="modal">

                <div class="container">
                    <h1 class="text-center white">Comentarios sobre la pagina</h1>

                    <form id="formulario" class="text-center white">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Ingresa tu email">
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje:</label>
                            <textarea class="form-control" id="mensaje" placeholder="Ingresa tu mensaje"></textarea>
                        </div>
                        <button type="submit" id="agregar" class="btn btn-success">Añadir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
