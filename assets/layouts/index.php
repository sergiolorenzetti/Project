<?php include 'header.php'; ?>

<body style="background: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);" class="py-5">
    
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-6 col-lg-5">

                <div class="card shadow-lg border-0 rounded-4">

                    <div class="card-body p-4 p-md-5">
                        
                        <div class="text-center mb-4">
                            <i class="bi bi-moon-stars-fill text-primary" style="font-size: 3.5rem;"></i>
                            
                            <h1 class="h3 mt-3 mb-3 fw-light">Descubra seu Signo</h1>
                        </div>
                        
                        <form method="post" action="show_zodiac_sign.php"> 
                            
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Seu nome" required>
                                <label for="name">Nome</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                                <label for="data_nascimento">Data de Nascimento</label>
                            </div>

                            <div class="d-grid gap-2 col-10 mx-auto mt-4">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                                <button type="reset" class="btn btn-outline-secondary">Limpar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include 'footer.php'; ?>