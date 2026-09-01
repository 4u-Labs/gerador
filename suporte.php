<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
$assetVersion = time();
$msgSent = false;
$msgError = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $assunto = trim($_POST['assunto'] ?? 'Contato - DataGen BR');
    $mensagem = trim($_POST['mensagem'] ?? '');

    if (!empty($nome) && !empty($email) && !empty($mensagem)) {
        $logDir = __DIR__ . '/uploads';
        if (!is_dir($logDir)) {
            @mkdir($logDir, 0755, true);
        }
        $logFile = $logDir . '/messages_log.json';
        $logs = [];
        if (file_exists($logFile)) {
            $logs = json_decode(file_get_contents($logFile), true) ?: [];
        }
        $logs[] = [
            'timestamp' => date('Y-m-d H:i:s'),
            'nome' => $nome,
            'email' => $email,
            'assunto' => $assunto,
            'mensagem' => $mensagem,
            'ip' => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1'
        ];
        file_put_contents($logFile, json_encode($logs, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        // Envio de E-mail oficial
        $to = 'contato@4u.ia.br';
        $subject = 'Suporte DataGen BR: ' . $assunto;
        $body = "Nome: $nome\nE-mail: $email\nData: " . date('d/m/Y H:i:s') . "\nAssunto: $assunto\n\nMensagem:\n$mensagem";
        $headers = "From: contato@4u.ia.br\r\nReply-To: $email\r\nX-Mailer: PHP/" . phpversion();

        @mail($to, $subject, $body, $headers);
        $msgSent = true;
    } else {
        $msgError = true;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  <title>Central de Suporte & FAQ — DataGen BR</title>
  <meta name="description" content="Central de Ajuda, Suporte e Perguntas Frequentes do DataGen BR. Tire suas dúvidas ou envie uma mensagem.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <style>
    * { box-sizing: border-box !important; margin: 0; padding: 0; font-family: 'Plus Jakarta Sans', 'Inter', system-ui, sans-serif; }
    body { background: #090d16; color: #f8fafc; min-height: 100vh; display: flex; flex-direction: column; line-height: 1.7; }
    
    .navbar {
      height: 64px;
      border-bottom: 1px solid rgba(255,255,255,0.08);
      background: rgba(15, 23, 42, 0.85);
      backdrop-filter: blur(12px);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 24px;
    }
    .back-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 13px;
      font-weight: 600;
      color: #94a3b8;
      text-decoration: none;
      padding: 6px 14px;
      border-radius: 8px;
      background: #131d31;
      border: 1px solid rgba(255,255,255,0.1);
      transition: all 0.2s ease;
    }
    .back-btn:hover { color: #fff; border-color: #6366f1; transform: translateX(-2px); }
    
    .brand-logo {
      display: flex;
      align-items: center;
      gap: 10px;
      text-decoration: none;
      color: #fff;
      font-weight: 800;
      font-size: 17px;
    }
    .brand-icon {
      width: 34px;
      height: 34px;
      border-radius: 10px;
      background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #d946ef 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 16px;
    }
    
    .container-support {
      max-width: 1000px;
      margin: 32px auto;
      padding: 0 20px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 28px;
    }
    @media (max-width: 820px) {
      .container-support { grid-template-columns: 1fr; }
    }
    
    .support-card {
      background: rgba(19, 29, 49, 0.75);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 10px 40px rgba(0,0,0,0.5);
    }
    
    .card-title {
      font-size: 1.5rem;
      font-weight: 800;
      background: linear-gradient(135deg, #6366f1, #818cf8, #d946ef);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    
    /* FAQ ACCORDION */
    .faq-item {
      border: 1px solid rgba(255, 255, 255, 0.08);
      border-radius: 12px;
      margin-bottom: 12px;
      background: rgba(15, 23, 42, 0.6);
      overflow: hidden;
    }
    .faq-question {
      padding: 14px 18px;
      font-size: 13.5px;
      font-weight: 700;
      color: #e2e8f0;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: space-between;
      user-select: none;
      transition: all 0.2s;
    }
    .faq-question:hover { color: #818cf8; background: rgba(99, 102, 241, 0.08); }
    .faq-answer {
      padding: 0 18px 14px;
      font-size: 13px;
      color: #94a3b8;
      display: none;
      border-top: 1px solid rgba(255, 255, 255, 0.05);
      padding-top: 10px;
    }
    .faq-item.active .faq-answer { display: block; }
    .faq-item.active .faq-question i { transform: rotate(180deg); color: #818cf8; }
    
    /* CONTACT FORM */
    .form-group {
      margin-bottom: 16px;
    }
    .form-label {
      display: block;
      font-size: 12px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.04em;
      color: #94a3b8;
      margin-bottom: 6px;
    }
    .form-input, .form-textarea {
      width: 100%;
      background: #0f172a;
      border: 1px solid rgba(255, 255, 255, 0.12);
      border-radius: 10px;
      padding: 10px 14px;
      color: #fff;
      font-size: 13.5px;
      outline: none;
      transition: all 0.2s;
    }
    .form-input:focus, .form-textarea:focus {
      border-color: #6366f1;
      box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
    }
    .form-textarea { min-height: 110px; resize: vertical; }
    
    .btn-submit {
      width: 100%;
      height: 44px;
      background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #d946ef 100%);
      border: none;
      border-radius: 10px;
      color: #fff;
      font-weight: 700;
      font-size: 14px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      box-shadow: 0 4px 16px rgba(99, 102, 241, 0.35);
      transition: all 0.2s;
    }
    .btn-submit:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(99, 102, 241, 0.45); }
    
    .alert-success {
      background: rgba(16, 185, 129, 0.15);
      border: 1px solid rgba(16, 185, 129, 0.3);
      color: #34d399;
      padding: 12px 16px;
      border-radius: 10px;
      font-size: 13px;
      font-weight: 600;
      margin-bottom: 18px;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    
    footer {
      text-align: center;
      padding: 24px;
      font-size: 0.8rem;
      color: #64748b;
      border-top: 1px solid rgba(255,255,255,0.06);
      margin-top: auto;
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <a href="index.html" class="back-btn">
      <i class="fas fa-arrow-left"></i> Voltar ao Gerador
    </a>
    <a href="index.html" class="brand-logo">
      <div class="brand-icon"><i class="fas fa-fingerprint"></i></div>
      <span>DataGen <span style="color:#818cf8;">BR</span></span>
    </a>
  </nav>

  <main class="container-support">
    <!-- FAQ COLUMN -->
    <div class="support-card">
      <h2 class="card-title"><i class="fas fa-circle-question"></i> Perguntas Frequentes (FAQ)</h2>

      <div class="faq-item active">
        <div class="faq-question" onclick="this.parentElement.classList.toggle('active')">
          <span>Os CPFs e CNPJs gerados são válidos?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          Sim! Todos os números possuem dígitos verificadores matematicamente válidos calculados pelo algoritmo oficial (Módulo 11), passando em qualquer máscara de validação de formulários. Porém, são números estritamente fictícios para testes.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="this.parentElement.classList.toggle('active')">
          <span>Os cartões de crédito possuem limite ou saldo?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          Não. Os cartões de crédito são gerados com o algoritmo de Luhn (Mod 10) e servem unicamente para validação de front-end ou homologação em gateways (como Stripe, Mercado Pago ou PagSeguro em modo Sandbox/Teste).
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="this.parentElement.classList.toggle('active')">
          <span>Os meus dados ficam salvos em algum servidor?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          Não! O DataGen BR roda 100% no seu navegador com retenção zero. Nenhuma informação é transmitida ou gravada na internet.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question" onclick="this.parentElement.classList.toggle('active')">
          <span>Como exportar os dados para testes em massa?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          Basta clicar nos botões <strong>JSON</strong> ou <strong>CSV</strong> no topo do aplicativo para baixar o arquivo completo com todos os campos cadastrais.
        </div>
      </div>
    </div>

    <!-- CONTACT FORM COLUMN -->
    <div class="support-card">
      <h2 class="card-title"><i class="fas fa-headset"></i> Fale Conosco</h2>

      <?php if ($msgSent): ?>
        <div class="alert-success">
          <i class="fas fa-circle-check"></i> Mensagem enviada com sucesso! Responderemos em breve.
        </div>
      <?php endif; ?>

      <form method="POST" action="suporte.php">
        <div class="form-group">
          <label class="form-label">Seu Nome</label>
          <input type="text" name="nome" class="form-input" placeholder="Ex: Carlos Silva" required>
        </div>

        <div class="form-group">
          <label class="form-label">Seu E-mail</label>
          <input type="email" name="email" class="form-input" placeholder="carlos@exemplo.com" required>
        </div>

        <div class="form-group">
          <label class="form-label">Assunto</label>
          <input type="text" name="assunto" class="form-input" placeholder="Ex: Sugestão de novo campo de teste" required>
        </div>

        <div class="form-group">
          <label class="form-label">Mensagem / Dúvida</label>
          <textarea name="mensagem" class="form-textarea" placeholder="Digite sua mensagem detalhada..." required></textarea>
        </div>

        <button type="submit" class="btn-submit">
          <i class="fas fa-paper-plane"></i> Enviar Mensagem
        </button>
      </form>
    </div>
  </main>

  <footer>
    &copy; <?php echo date('Y'); ?> 4U.IA.BR &bull; DataGen BR &bull; Central de Atendimento ao Desenvolvedor.
  </footer>

</body>
</html>
