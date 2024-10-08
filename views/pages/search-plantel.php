<div class="container flex-grow-1 d-flex align-content-center flex-column row-gap-3 py-4">
    
    <div class="search-bar container-xxl d-flex justify-content-center align-items-center flex-column p-0">
        <h3>Plantel</h3>
        <div class="search-input container p-0">
            <i class="icon bi bi-search"></i>
            <input type="text" class="form-control" id="search-input" placeholder="Plantel" aria-label="Plantel">
        </div>
    </div>

    <div class="universities d-flex align-content-stretch flex-column row-gap-2 flex-wrap">
        <button type="button" class="image-card btn btn-dark card mb-3 w-100">
            <div class="row g-0 w-100">
                <div class="col-4 col-sm-2 col-xl-1 d-flex align-items-center p-2">
                    <img src="/assets/logo-placeholder.png" class="logo img-fluid rounded-start" alt="university-logo">
                </div>
                <div class="col d-flex align-items-center">
                    <div class="card-body">
                        <h5 class="card-title text-start">Titulo</h5>
                        <p class="card-text text-start">Calle tal, colonia tal</p>
                    </div>
                </div>
            </div>
        </button>
    </div>
    
</div>
<script>
    document.getElementById("search-input").addEventListener("keydown", (event) => {
        if (event.key === "Enter") {
            event.preventDefault();
            window.location.href = "/buscar/carrera";
        }
    });
</script>