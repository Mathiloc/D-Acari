<!-- Modal container -->
<div class="modal-container" id="modal_container">
                <div class="contentBx">
                    <span id="close_modal" class="close-btn">&times;</span>
                    
          
                     <div class="container mt-5">
                     <h2 >Formulario de Registro</h2>
                     <form action="#" method="POST">
                         <div class="inputBx">
                             <label for="nombre" class="form-label">Nombre</label>
                             <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" required>
                         </div>
                         <div class="inputBx">
                             <label for="apellido" class="form-label">Apellido</label>
                             <input type="text" class="form-control" id="apellido" name="apellido" placeholder="apellido" required>
                         </div>
                         
                         <div class="inputBx">
                             <label for="documento" class="form-label">Documento de Identidad</label>
                             <input type="text" class="form-control" id="documento" name="documento"  placeholder="documento" required>
                         </div>
                         <div class="inputBx">
                             <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                             <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="fecha_nacimiento" required>
                         </div>
                         <div class="inputBx">
                             <label for="telefono" class="form-label">Teléfono</label>
                             <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="telefono" required>
                         </div>
                         <div class="inputBx">
                             <label for="correo" class="form-label">Correo Electrónico</label>
                             <input type="email" class="form-control" id="correo" name="correo" placeholder="correo" required>
                         </div>
                         <div class="inputBx">
                             <label for="contrasena" class="form-label">Contraseña</label>
                             <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="contrasena" required>
                         </div>
                         <button type="inputBx" class="btn btn-primary" name="registro">Registrar</button>


                         <script>
    const openBtn = document.getElementById("open");
    const modalContainer = document.getElementById("modal_container");
    const closeModal = document.getElementById("close_modal");

    // Mostrar el modal cuando se hace clic en "Inscribirse"
    openBtn.addEventListener("click", () => {
        modalContainer.style.display = "block";
    });

    // Cerrar el modal cuando se hace clic en "X"
    closeModal.addEventListener("click", () => {
        modalContainer.style.display = "none";
    });

    // Cerrar el modal cuando el usuario hace clic fuera del modal
    window.addEventListener("click", (e) => {
        if (e.target === modalContainer) {
            modalContainer.style.display = "none";
        }
    });
</script>