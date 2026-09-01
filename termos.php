<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
$assetVersion = time();
?>
<!DOCTYPE html>
<html lang="pt-BR" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
  <title>Termos de Uso — DataGen BR</title>
  <meta name="description" content="Termos de Uso do DataGen BR. Condições de uso, responsabilidade e regras para geração de dados fictícios de testes.">
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
      background: linear-gradient(135deg, #6366f1, #818cf8, #d946ef);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 8px;
    }
    .legal-header p { font-size: 0.9rem; color: #94a3b8; }
    
    h2 { font-size: 1.25rem; font-weight: 700; color: #e2e8f0; margin: 24px 0 10px; display: flex; align-items: center; gap: 8px; }
    h2 i { color: #818cf8; font-size: 1rem; }
    p, ul { font-size: 0.925rem; color: #94a3b8; margin-bottom: 16px; }
    ul { padding-left: 20px; }
    li { margin-bottom: 8px; }
    strong { color: #f1f5f9; }
    
    .callout-box {
      background: rgba(245, 158, 11, 0.1);
      border: 1px solid rgba(245, 158, 11, 0.3);
      border-radius: 12px;
      padding: 16px 20px;
      margin: 20px 0;
      font-size: 0.9rem;
      color: #fbbf24;
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

  <main style="flex:1; padding: 0 20px;">
    <div class="legal-container">
      <div class="legal-header">
        <h1>Termos de Uso</h1>
        <p>Última atualização: <?php echo date('d/m/Y'); ?> &bull; Ecossistema 4U.IA.BR</p>
      </div>

      <div class="callout-box">
        <i class="fas fa-triangle-exclamation"></i> <strong>Aviso Importante:</strong> O <strong>DataGen BR</strong> é uma ferramenta destinada <strong>exclusivamente para testes de software, homologação de sistemas e simulações acadêmicas</strong>. Nenhum dado gerado representa pessoas reais.
      </div>

      <h2><i class="fas fa-check-circle"></i> 1. Finalidade do Aplicativo</h2>
      <p>O <strong>DataGen BR</strong> foi projetado para auxiliar desenvolvedores, testadores (QA), analistas de sistemas e estudantes a gerar cadastros e massas de dados sintéticos válidos para preenchimento e validação de formulários, sistemas ERP, CRMs e bancos de dados em ambientes de desenvolvimento.</p>

      <h2><i class="fas fa-shield-halved"></i> 2. Natureza dos Dados Fictícios</h2>
      <p>Todos os números de documentos (CPF, CNPJ, CNH, PIS, Título de Eleitor, Cartão SUS, Renavam e Cartão de Crédito) são gerados através de <strong>algoritmos matemáticos de dígitos verificadores</strong> oficiais do Brasil (Módulo 11 e algoritmo de Luhn), sendo <strong>estritamente fictícios</strong>.</p>
      <ul>
        <li>Não correspondem a cadastros reais na Receita Federal ou em órgãos públicos.</li>
        <li>Os nomes, endereços e telefones são gerados por combinações randômicas de vocábulos brasileiros.</li>
        <li>Os cartões de crédito possuem números válidos para validação de layout em gateways em modo <em>Sandbox / Teste</em>, sem saldo ou instituição real vinculada.</li>
      </ul>

      <h2><i class="fas fa-ban"></i> 3. Proibição de Uso Ilícito</h2>
      <p>É expressamente proibida a utilização dos dados gerados nesta plataforma para:</p>
      <ul>
        <li>Abertura de contas reais, compras em e-commerces em ambiente de produção ou tentativas de fraude.</li>
        <li>Falsidade ideológica ou qualquer ato que infrinja o Código Penal Brasileiro e a Lei Geral de Proteção de Dados (Lei nº 13.709/2018 - LGPD).</li>
        <li>Tentativas de personificação de indivíduos reais ou burlas a sistemas de autenticação em produção.</li>
      </ul>

      <h2><i class="fas fa-laptop-code"></i> 4. Retenção Zero & Execução Client-Side</h2>
      <p>O aplicativo opera de forma <strong>100% autônoma e local no seu navegador</strong>. Nenhuma informação gerada é coletada, gravada em banco de dados centralizado ou transmitida para terceiros. O histórico local é armazenado exclusivamente no <code>localStorage</code> do dispositivo do próprio usuário.</p>

      <h2><i class="fas fa-scale-balanced"></i> 5. Isenção de Responsabilidade</h2>
      <p>A plataforma <strong>4U.IA.BR</strong> e seus desenvolvedores não se responsabilizam pelo mau uso, aplicação indevida ou ações de terceiros realizadas com as informações fictícias geradas nesta ferramenta.</p>
    </div>
  </main>

  <footer>
    &copy; <?php echo date('Y'); ?> 4U.IA.BR &bull; DataGen BR &bull; Todos os direitos reservados.
  </footer>

</body>
</html>
