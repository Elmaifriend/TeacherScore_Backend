
    
    <div class="container flex-grow-1 d-flex align-content-center flex-column row-gap-3 p-4">
    
        <div class="search-bar container-xxl d-flex justify-content-center align-items-center flex-column p-0">
            <h3>Carreras</h3>
            <input type="text" class="form-control" id="search-input" placeholder="Carrera" aria-label="Carrera">
        </div>
    
        <div class="majors d-flex align-content-stretch flex-column row-gap-2 flex-wrap">
            <simple-card></simple-card>
        </div>

        
    </div>

    <script src="/js/bootstrap.bundle.js"></script>
    <script>
        document.getElementById("search-input").addEventListener("keydown", (event) => {
            if (event.key === "Enter") {
                event.preventDefault();
                window.location.href = "/buscar/materia";
            }
        });
    </script>