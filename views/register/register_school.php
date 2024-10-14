<div class="container-md d-flex justify-content-center">
    <div class="d-flex flex-column">

        <h1 class="text-center">Registrar Universidad</h1>

        <form method="POST" action="/registrar/escuela" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Nombre de la escuela</label>
                <input type="text" class="form-control" id="nombre" placeholder="Universidad Autonoma de..." name="nombre">
            </div>
            <div class="form-group">
                <label for="acronimo">Acronimo de la escuela</label>
                <input type="text" class="form-control" id="acronimo" placeholder="UNAM..." name="acronimo">
            </div>
            <div class="form-group">
                <label class="d-block" for="foto">Sube el logo de tu escuela</label>
                <input type="file" class="form-control-file" id="foto" name="foto">
            </div>
            
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
        
    </div>
</div>
