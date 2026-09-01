<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
$assetVersion = time();
?>
<!DOCTYPE html>
<html lang="pt-BR" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  <title>Política de Privacidade & LGPD — DataGen BR</title>
  <meta name="description" content="Política de Privacidade e conformidade LGPD do DataGen BR. Processamento 100% local, retenção zero e segurança total.">
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
    
    .legal-container {
      max-width: 860px;
      margin: 32px auto;
      padding: 36px 40px;
      background: rgba(19, 29, 49, 0.75);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      box-shadow: 0 10px 40px rgba(0,0,0,0.5);
    }
    
    .legal-header {
      margin-bottom: 28px;
      padding-bottom: 20px;
      border-bottom: 1px solid rgba(255,255,255,0.08);
    }
    .legal-header h1 {
      font-size: 2rem;
      font-weight: 800;
      letter-spacing: -0.02em;
      background: linear-gradient(135deg, #10b981, #38bdf8, #6366f1);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 8px;
    }
    .legal-header p { font-size: 0.9rem; color: #94a3b8; }
    
    h2 { font-size: 1.25rem; font-weight: 700; color: #e2e8f0; margin: 24px 0 10px; display: flex; align-items: center; gap: 8px; }
    h2 i { color: #34d399; font-size: 1rem; }
    p, ul { font-size: 0.925rem; color: #94a3b8; margin-bottom: 16px; }
    ul { padding-left: 20px; }
    li { margin-bottom: 8px; }
    strong { color: #f1f5f9; }
    
    .badge-card {
      background: rgba(16, 185, 129, 0.1);
      border: 1px solid rgba(16, 185, 129, 0.3);
      border-radius: 12px;
      padding: 16px 20px;
      margin: 20px 0;
      display: flex;
      align-items: center;
      gap: 14px;
    }
    .badge-card i { font-size: 28px; color: #10b981; }
    .badge-card-text { font-size: 0.9rem; color: #a7f3d0; }
    .badge-card-text strong { color: #ffffff; }

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

  <main style="flex:1; padding: 0 20px;">
    <div class="legal-container">
      <div class="legal-header">
        <h1>Política de Privacidade & LGPD</h1>
        <p>Última atualização: <?php echo date('d/m/Y'); ?> &bull; Ecossistema 4U.IA.BR</p>
      </div>

      <div class="badge-card">
        <i class="fas fa-shield-check"></i>
        <div class="badge-card-text">
          <strong>Privacidade por Design (Privacy by Design):</strong> O DataGen BR executa 100% no seu navegador com arquitetura de retenção zero.
        </div>
      </div>

      <h2><i class="fas fa-lock"></i> 1. Compromisso com a Privacidade</h2>
      <p>A privacidade e a proteção de dados são pilares fundamentais da plataforma <strong>4U.IA.BR</strong>. Desenvolvemos o <strong>DataGen BR</strong> sob rigorosos critérios de segurança e total conformidade com a Lei Geral de Proteção de Dados (Lei nº 13.709/2018 - LGPD).</p>

      <h2><i class="fas fa-microchip"></i> 2. Processamento Local (Retenção Zero)</h2>
      <p>Toda e qualquer geração de dados cadastrais (nomes, CPFs, e-mails, endereços, cartões de crédito e dados bancários) é calculada <strong>exclusivamente dentro da memória do navegador do próprio usuário</strong> via scripts em JavaScript:</p>
      <ul>
        <li><strong>Nenhum dado é enviado para servidores externos.</strong></li>
        <li><strong>Nenhum registro gerado fica salvo em bancos de dados remotos.</strong></li>
        <li>Ao fechar ou atualizar a aba, os dados em memória são instantaneamente descartados, a menos que você os tenha copiado ou exportado manualmente.</li>
      </ul>

      <h2><i class="fas fa-database"></i> 3. Armazenamento Local (localStorage)</h2>
      <p>Para sua comodidade, o aplicativo oferece a funcionalidade opcional de <strong>Histórico de Gerações Recentes</strong> e a preferência de <strong>Tema (Dark/Light Mode)</strong>. Esses dados são gravados exclusivamente no <code>localStorage</code> do seu navegador e podem ser limpos a qualquer momento com um único clique no botão <em>"Limpar Histórico"</em>.</p>

      <h2><i class="fas fa-cookie-bite"></i> 4. Cookies e Rastreamento</h2>
      <p>O <strong>DataGen BR</strong> não utiliza cookies de rastreamento de terceiros, não exibe anúncios invasivos e não monitora sua atividade na internet.</p>

      <h2><i class="fas fa-envelope"></i> 5. Contato e Encarregado de Dados (DPO)</h2>
      <p>Para dúvidas, sugestões ou solicitações relativas à privacidade e segurança, entre em contato com nossa equipe através da <a href="suporte.php" style="color: #38bdf8; font-weight: 600; text-decoration: underline;">Central de Suporte</a> ou pelo e-mail <strong>contato@4u.ia.br</strong>.</p>
    </div>
  </main>

  <footer>
    &copy; <?php echo date('Y'); ?> 4U.IA.BR &bull; DataGen BR &bull; Todos os direitos reservados.
  </footer>

</body>
</html>
