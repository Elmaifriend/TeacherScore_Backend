

    <div class="container flex-grow-1 d-flex align-content-center flex-column row-gap-3 py-4">
    
        <div class="search-bar container-xxl d-flex justify-content-center align-items-center flex-column p-0">
            <h3>Carreras</h3>
            <div class="search-input container p-0">
                <i class="icon bi bi-search"></i>
                <input type="text" class="form-control" id="search-input" placeholder="Carrera" aria-label="Carrera">
            </div>
        </div>
    
        <div class="majors d-flex align-content-stretch flex-column row-gap-2 flex-wrap">
            <button type="button" class="major-card image-card btn btn-dark card mb-3 w-100">
                <div class="card-body">
                    <h5 class="card-title m-0">Texto</h5>
                </div>
            </button>
        </div>

        
    </div>

    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("search-input").addEventListener("keydown", (event) => {
            if (event.key === "Enter") {
                event.preventDefault();
                window.location.href = "/buscar/materia";
            }
        });
    </script>