<?php
// --- INÍCIO DA LÓGICA PHP ---
$baseAssetPath = '/project/assets/imgs/';
$nome = $_POST['name'] ?? '';
$data_nascimento_input = $_POST['data_nascimento'] ?? '';
$zodiacSign = "";
$description = "";
$signoID = "";
$iconFile = "";

// Validação básica
if (!empty($nome) && !empty($data_nascimento_input)) {

    $xml = simplexml_load_file('signos.xml');
    $data_nascimento = strtotime($data_nascimento_input);
    $ano_nascimento = date('Y', $data_nascimento);

    $encontrado = false;

    foreach ($xml->signo as $signo) {
        $data_inicio_str = str_replace('/', '-', (string) $signo->data_inicio . '/' . $ano_nascimento);
        $data_fim_str = str_replace('/', '-', (string) $signo->data_fim . '/' . $ano_nascimento);
        $data_inicio_ts = strtotime($data_inicio_str);
        $data_fim_ts = strtotime($data_fim_str);

        if ($data_fim_ts < $data_inicio_ts) {
            if ($data_nascimento >= $data_inicio_ts || $data_nascimento <= $data_fim_ts) {
                $encontrado = true;
            }
        } else {
            if ($data_nascimento >= $data_inicio_ts && $data_nascimento <= $data_fim_ts) {
                $encontrado = true;
            }
        }

        if ($encontrado) {
            $zodiacSign = (string) $signo->signoNome;
            $description = (string) $signo->descricao;
            $signoID = (string) $signo->signoID;
            $iconFile = $baseAssetPath . "signo_" . $signoID . ".png";
            
            break;
        }
    }
}
// --- FIM DA LÓGICA PHP ---
?>

<?php include 'header.php'; ?>

<body style="background: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);" class="py-5">
    
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-4 p-md-5">

                        <?php 
                        if (!empty($iconFile)): 
                        ?>
                            
                            <!-- BLOCO DE SUCESSO -->

                            <div class="text-center mb-4">
                                <img src="<?php echo htmlspecialchars($iconFile); ?>" 
                                     alt="Ícone do signo <?php echo htmlspecialchars($zodiacSign); ?>"
                                     class="mb-3"
                                     style="width: 180px; height: 180px; object-fit: contain;">
   
                                <h1 class="h3 mt-2 mb-1 fw-light">O seu Resultado</h1>
                            </div>

                            <p class="lead text-center">
                                Olá, <strong class="text-primary"><?php echo htmlspecialchars($nome); ?></strong>!
                            </p>

                            <h2 class="h4 text-center fw-normal text-muted mb-3">O seu signo é...</h2>

                            <h1 class="display-6 text-center text-primary fw-bold mb-4">
                                <?php echo htmlspecialchars($zodiacSign); ?>
                            </h1>

                            <p class="text-secondary text-center">
                                <?php echo htmlspecialchars($description); ?>
                            </p>

                        <?php else: ?>

                            <!-- BLOCO DE ERRO -->
                            <div class="text-center">
                                <i class="bi bi-exclamation-triangle-fill text-danger" style="font-size: 3rem;"></i>
                                <h2 class="h4 fw-light mt-3">Ups! Algo correu mal.</h2>
                                <p class="text-secondary">
                                    Não foi possível encontrar um signo para a data fornecida
                                    <?php if(empty($nome)) echo " ou o nome não foi preenchido"; ?>.
                                </p>
                            </div>

                        <?php endif; ?>

                        <!-- Botão "Voltar" -->
                        <div class="d-grid col-8 mx-auto mt-5">
                            <a href="index.php" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-left me-2"></i>Voltar
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include 'footer.php'; ?>

