
    <div class="container flex-grow-1 d-flex align-content-center flex-column row-gap-3 p-4">
    
        <div class="search-bar container-xxl d-flex justify-content-center align-items-center flex-column p-0">
            <h3>Materias</h3>
            <input type="text" class="form-control" id="search-input" placeholder="Materia" aria-label="Materia">
        </div>
    
        <div class="subjects d-flex align-content-stretch flex-column row-gap-2 flex-wrap">
            <simple-card></simple-card>
        </div>

        
    </div>

    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("search-input").addEventListener("keydown", (event) => {
            if (event.key === "Enter") {
                event.preventDefault();
                window.location.href = "/buscar/profesor";
            }
        });
    </script>