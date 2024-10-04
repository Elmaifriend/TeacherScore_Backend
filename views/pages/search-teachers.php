
    <div class="container flex-grow-1 d-flex align-content-center flex-column row-gap-3 p-4">
    
        <div class="search-bar container-xxl d-flex justify-content-center align-items-center flex-column p-0">
            <h3>Materia</h3>
            <h5>Profesores</h5>
            <input type="text" class="form-control" id="search-input" placeholder="Profesor" aria-label="Profesor">
        </div>
    
        <div class="subjects d-flex align-content-stretch flex-column row-gap-2 flex-wrap">
            <image-card></image-card>
        </div>

        
    </div>

    <script>
        document.getElementById("search-input").addEventListener("keydown", (event) => {
            if (event.key === "Enter") {
                event.preventDefault();
                window.location.href = "/ver/profesor";
            }
        });
    </script>
</body>

</html>