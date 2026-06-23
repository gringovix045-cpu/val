<?php require_once 'inc/header.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="Termos de Uso – Central de Atendimento. Condições para utilização dos nossos serviços."/>
  <title>Termos de Uso – Central de Atendimento</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
    :root{--navy:#0d1b5e;--teal:#00b4cc;--teal2:#00d4ef;--green:#25D366;--greend:#1da851;--body:#4a5568;--muted:#718096;--bg:#f5f8ff;--white:#fff;--bdr:#e2e8f4}
    html{scroll-behavior:smooth}
    body{font-family:'Inter',sans-serif;background:var(--bg);color:var(--body);font-size:15px;line-height:1.6;-webkit-font-smoothing:antialiased}
    .w{width:100%;max-width:1100px;margin:0 auto;padding:0 16px}
    header{background:var(--white);border-bottom:1px solid var(--bdr);position:sticky;top:0;z-index:100;box-shadow:0 1px 6px rgba(13,27,94,.07)}
    .hdr{display:flex;align-items:center;justify-content:space-between;height:58px}
    .logo{display:flex;align-items:center;gap:9px;text-decoration:none}
    .logo-box{width:38px;height:38px;border-radius:9px;flex-shrink:0;background:linear-gradient(135deg,#0d1b5e,#1a3a9c);display:flex;align-items:center;justify-content:center}
    .logo-name{display:block;font-size:13px;font-weight:800;color:var(--navy);line-height:1.2}
    .logo-sub{display:block;font-size:9px;font-weight:700;color:var(--teal);letter-spacing:.07em;text-transform:uppercase}
    .ham{width:36px;height:36px;border:none;background:none;cursor:pointer;display:flex;flex-direction:column;justify-content:center;gap:5px;padding:4px}
    .ham span{display:block;width:22px;height:2px;background:var(--navy);border-radius:2px}
    .desk-nav{display:none;align-items:center;gap:26px}
    .desk-nav a{font-size:13px;font-weight:600;color:var(--navy);text-decoration:none;transition:color .15s}
    .desk-nav a:hover{color:var(--teal)}
    .desk-nav .nav-cta{display:inline-flex;align-items:center;gap:7px;background:var(--green);color:#fff;padding:9px 18px;border-radius:50px;font-size:12.5px;font-weight:700;transition:background .2s}
    .desk-nav .nav-cta:hover{background:var(--greend);color:#fff}
    .page-hero{background:linear-gradient(135deg,#0d1b5e 0%,#1a3a9c 100%);padding:36px 0 32px}
    .breadcrumb{display:flex;align-items:center;gap:6px;font-size:12px;color:rgba(255,255,255,.5);margin-bottom:10px}
    .breadcrumb a{color:rgba(255,255,255,.55);text-decoration:none}
    .breadcrumb a:hover{color:#fff}
    .breadcrumb span{color:rgba(255,255,255,.3)}
    .page-hero h1{font-size:24px;font-weight:800;color:#fff;line-height:1.2}
    .page-hero .sub{font-size:13px;color:rgba(255,255,255,.6);margin-top:6px}
    .content-wrap{max-width:780px;margin:0 auto;padding:36px 16px 52px}
    .last-updated{display:inline-flex;align-items:center;gap:6px;background:var(--white);border:1px solid var(--bdr);border-radius:50px;padding:6px 14px;font-size:12px;font-weight:600;color:var(--muted);margin-bottom:28px}
    .doc-section{margin-bottom:32px}
    .doc-section h2{font-size:17px;font-weight:700;color:var(--navy);margin-bottom:10px;padding-bottom:8px;border-bottom:2px solid var(--teal);display:inline-block}
    .doc-section p{font-size:13.5px;color:var(--body);line-height:1.7;margin-bottom:10px}
    .doc-section ul{margin-left:18px;margin-top:6px;margin-bottom:10px}
    .doc-section ul li{font-size:13.5px;color:var(--body);line-height:1.7;margin-bottom:5px}
    .doc-section strong{color:var(--navy)}
    .highlight-box{background:var(--white);border:1px solid var(--bdr);border-left:4px solid var(--teal);border-radius:0 10px 10px 0;padding:14px 16px;margin:16px 0}
    .highlight-box p{font-size:13px;margin:0}
    footer{background:var(--navy);color:rgba(255,255,255,.65);padding:30px 0 18px}
    .ft-top{display:grid;grid-template-columns:1fr 1fr;gap:22px 16px;margin-bottom:22px}
    .ft-col h4{font-size:10.5px;font-weight:700;color:rgba(255,255,255,.35);letter-spacing:.07em;text-transform:uppercase;margin-bottom:11px}
    .ft-col a{display:block;font-size:12.5px;color:rgba(255,255,255,.6);text-decoration:none;margin-bottom:8px;transition:color .15s}
    .ft-col a:hover{color:var(--teal2)}
    .ft-wa-link{display:inline-flex;align-items:center;gap:7px;background:var(--green);color:#fff !important;padding:10px 16px;border-radius:50px;font-size:12.5px;font-weight:700;margin-bottom:10px;transition:background .2s;width:fit-content}
    .ft-wa-link:hover{background:var(--greend) !important}
    .ft-div{border:none;border-top:1px solid rgba(255,255,255,.1);margin-bottom:14px}
    .ft-bot{display:flex;align-items:center;justify-content:space-between;gap:10px;flex-wrap:wrap}
    .ft-bot p{font-size:11px;color:rgba(255,255,255,.3)}
    .ft-badges{display:flex;gap:8px}
    .badge{display:flex;align-items:center;gap:4px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.1);border-radius:20px;padding:4px 9px;font-size:10px;font-weight:600;color:rgba(255,255,255,.45)}
    .fwa{position:fixed;bottom:20px;right:20px;width:54px;height:54px;background:var(--green);border-radius:50%;display:flex;align-items:center;justify-content:center;text-decoration:none;box-shadow:0 4px 18px rgba(37,211,102,.45);z-index:200;transition:transform .2s}
    .fwa:hover{transform:scale(1.08)}
    .fwab{position:absolute;top:0;right:0;width:15px;height:15px;background:#ef4444;border-radius:50%;border:2px solid #fff}
    .ov{position:fixed;inset:0;background:rgba(0,0,0,.4);z-index:299;display:none}
    .ov.on{display:block}
    .mob{position:fixed;top:0;right:-100%;width:265px;height:100vh;background:var(--white);z-index:300;box-shadow:-4px 0 24px rgba(13,27,94,.15);transition:right .3s ease;padding:18px;overflow-y:auto}
    .mob.on{right:0}
    .mc{background:none;border:none;font-size:21px;color:var(--navy);cursor:pointer;float:right;margin-bottom:18px}
    .ml{clear:both}
    .ml a{display:flex;align-items:center;gap:9px;padding:12px 0;border-bottom:1px solid var(--bdr);font-size:13.5px;font-weight:600;color:var(--navy);text-decoration:none}
    .ml a:hover{color:var(--teal)}
    .mob-wa{margin-top:18px;background:var(--green);color:#fff !important;padding:12px 18px !important;border-radius:50px;justify-content:center;border-bottom:none !important}
    @media(min-width:768px){
      .ham{display:none}.desk-nav{display:flex}
      .page-hero h1{font-size:32px}
      .ft-top{grid-template-columns:2fr 1fr 1fr;gap:32px}
    }
  </style>
</head>
<body>
<div class="ov" id="ov" onclick="closeMob()"></div>
<div class="mob" id="mob">
  <button class="mc" onclick="closeMob()">✕</button>
  <nav class="ml">
    <a href="index.php" onclick="closeMob()">Início</a>
    <a href="index.php#servicos" onclick="closeMob()">Serviços</a>
    <a href="index.php#faq" onclick="closeMob()">Dúvidas</a>
    <a href="https://wa.me/5500000000000" class="mob-wa">Falar no WhatsApp</a>
  </nav>
</div>
<header>
  <div class="w">
    <div class="hdr">
      <a class="logo" href="index.php">
        <div class="logo-box"><svg width="21" height="21" viewBox="0 0 24 24" fill="none"><path d="M12 1C6.477 1 2 5.477 2 11c0 1.821.487 3.53 1.338 5L2 22l6.187-1.33A9.953 9.953 0 0012 21c5.523 0 10-4.477 10-10S17.523 1 12 1z" fill="rgba(255,255,255,.15)"/><path d="M17 14.5c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.16-.17.2-.35.22-.64.07-.3-.15-1.26-.46-2.4-1.48-.88-.79-1.48-1.76-1.65-2.06-.17-.3-.02-.46.13-.6.13-.13.3-.35.44-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.08-.15-.67-1.61-.92-2.21-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.48s1.06 2.88 1.21 3.07c.15.2 2.1 3.2 5.08 4.49.71.3 1.26.49 1.69.62.71.23 1.36.2 1.87.12.57-.09 1.76-.72 2.01-1.41.25-.7.25-1.29.17-1.41-.07-.12-.27-.2-.57-.35z" fill="white"/></svg></div>
        <div><span class="logo-name">Central de Atendimento</span><span class="logo-sub">Atendimento Humano</span></div>
      </a>
      <nav class="desk-nav">
        <a href="index.php">Início</a>
        <a href="index.php#servicos">Serviços</a>
        <a href="index.php#faq">Dúvidas</a>
        <a href="sitemap.php">Mapa do Site</a>
        <a href="https://wa.me/5500000000000" class="nav-cta">Falar no WhatsApp</a>
      </nav>
      <button class="ham" onclick="openMob()" aria-label="Menu"><span></span><span></span><span></span></button>
    </div>
  </div>
</header>

<div class="page-hero">
  <div class="w">
    <div class="breadcrumb"><a href="index.php">Início</a><span>›</span><span style="color:rgba(255,255,255,.8)">Termos de Uso</span></div>
    <h1>Termos de Uso</h1>
    <p class="sub">Condições gerais para utilização dos nossos serviços de atendimento.</p>
  </div>
</div>

<div class="content-wrap">
  <div class="last-updated"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Última atualização: Janeiro de 2025</div>
  <div class="doc-section">
    <h2>1. Aceitação dos Termos</h2>
    <p>Ao acessar e utilizar os serviços da <strong>Central de Atendimento</strong>, você concorda com os presentes Termos de Uso. Se você não concordar com qualquer parte destes termos, solicitamos que não utilize nossos serviços.</p>
    <div class="highlight-box"><p>Estes termos constituem um acordo legal entre você e a Central de Atendimento. Leia-os com atenção antes de utilizar nossos serviços.</p></div>
  </div>
  <div class="doc-section">
    <h2>2. Descrição dos Serviços</h2>
    <p>A Central de Atendimento oferece serviços de intermediação e suporte ao cliente para questões relacionadas a:</p>
    <ul>
      <li>Ativação e configuração de tags de pedágio</li>
      <li>Resolução de problemas de pagamento</li>
      <li>Solicitação de segunda via de contas e faturas</li>
      <li>Contestação de cobranças indevidas</li>
      <li>Orientações gerais sobre serviços de mobilidade</li>
    </ul>
    <p>Nosso atendimento é realizado exclusivamente via <strong>WhatsApp</strong>, por uma equipe de especialistas treinados.</p>
  </div>
  <div class="doc-section">
    <h2>3. Uso Adequado dos Serviços</h2>
    <p>Ao utilizar nossos serviços, você se compromete a:</p>
    <ul>
      <li>Fornecer informações verdadeiras, precisas e atualizadas</li>
      <li>Utilizar os serviços apenas para fins legítimos e pessoais</li>
      <li>Não tentar obter informações ou serviços de forma fraudulenta</li>
      <li>Tratar a equipe de atendimento com respeito e educação</li>
      <li>Não compartilhar suas credenciais de acesso com terceiros</li>
    </ul>
    <p>Reservamos o direito de recusar atendimento em casos de uso inadequado ou abusivo.</p>
  </div>
  <div class="doc-section">
    <h2>4. Limitação de Responsabilidade</h2>
    <p>A Central de Atendimento atua como prestadora de serviço de suporte e intermediação. Portanto:</p>
    <ul>
      <li>Não somos responsáveis por decisões finais tomadas pela empresa prestadora do serviço</li>
      <li>Não garantimos prazos específicos de resolução por parte de terceiros</li>
      <li>Não respondemos por falhas de sistema ou indisponibilidade de serviços externos</li>
      <li>Nossa responsabilidade limita-se à prestação do serviço de atendimento e orientação</li>
    </ul>
    <div class="highlight-box"><p>Fazemos o nosso melhor para resolver sua situação, mas o resultado final pode depender de terceiros fora do nosso controle.</p></div>
  </div>
  <div class="doc-section">
    <h2>5. Disponibilidade do Serviço</h2>
    <p>Nos esforçamos para manter o serviço disponível continuamente, porém:</p>
    <ul>
      <li>O atendimento humano está sujeito a horários de funcionamento</li>
      <li>Podemos realizar manutenções que temporariamente afetam a disponibilidade</li>
      <li>Situações de força maior podem impactar a prestação dos serviços</li>
    </ul>
    <p>Eventos fora de nosso controle não geram direito a indenização.</p>
  </div>
  <div class="doc-section">
    <h2>6. Propriedade Intelectual</h2>
    <p>Todo o conteúdo disponível neste site — incluindo textos, imagens, logotipos, ícones e layout — é propriedade da Central de Atendimento e está protegido por leis de propriedade intelectual.</p>
    <p>É proibida a reprodução, distribuição ou uso comercial de qualquer conteúdo sem autorização prévia e expressa.</p>
  </div>
  <div class="doc-section">
    <h2>7. Privacidade</h2>
    <p>O tratamento dos seus dados pessoais é regido pela nossa <a href="politica-privacidade.php" style="color:var(--teal);font-weight:600">Política de Privacidade</a>, que é parte integrante destes Termos de Uso.</p>
  </div>
  <div class="doc-section">
    <h2>8. Alterações nos Termos</h2>
    <p>Podemos modificar estes Termos de Uso a qualquer momento. As alterações entram em vigor imediatamente após a publicação no site. O uso continuado dos serviços após a publicação das alterações constitui aceitação dos novos termos.</p>
    <p>Recomendamos que você revise periodicamente estes termos.</p>
  </div>
  <div class="doc-section">
    <h2>9. Lei Aplicável e Foro</h2>
    <p>Estes Termos de Uso são regidos pelas leis da República Federativa do Brasil. Fica eleito o foro da comarca de São Paulo/SP para dirimir quaisquer controvérsias decorrentes da interpretação ou execução destes termos, com renúncia expressa a qualquer outro, por mais privilegiado que seja.</p>
  </div>
  <div class="doc-section">
    <h2>10. Contato</h2>
    <p>Em caso de dúvidas sobre estes Termos de Uso, entre em contato conosco:</p>
    <ul>
      <li><strong>WhatsApp:</strong> <a href="https://wa.me/5500000000000" style="color:var(--teal);font-weight:600">Clique aqui para falar conosco</a></li>
    </ul>
  </div>
</div>

<footer>
  <div class="w">
    <div class="ft-top">
      <div>
        <div class="logo" style="margin-bottom:12px">
          <div class="logo-box"><svg width="21" height="21" viewBox="0 0 24 24" fill="none"><path d="M12 1C6.477 1 2 5.477 2 11c0 1.821.487 3.53 1.338 5L2 22l6.187-1.33A9.953 9.953 0 0012 21c5.523 0 10-4.477 10-10S17.523 1 12 1z" fill="rgba(255,255,255,.12)"/><path d="M17 14.5c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.16-.17.2-.35.22-.64.07-.3-.15-1.26-.46-2.4-1.48-.88-.79-1.48-1.76-1.65-2.06-.17-.3-.02-.46.13-.6.13-.13.3-.35.44-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.08-.15-.67-1.61-.92-2.21-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.48s1.06 2.88 1.21 3.07c.15.2 2.1 3.2 5.08 4.49.71.3 1.26.49 1.69.62.71.23 1.36.2 1.87.12.57-.09 1.76-.72 2.01-1.41.25-.7.25-1.29.17-1.41-.07-.12-.27-.2-.57-.35z" fill="white"/></svg></div>
          <div><span class="logo-name" style="color:#fff;font-size:13px">Central de Atendimento</span><span class="logo-sub" style="color:#00d4ef">Atendimento Humano</span></div>
        </div>
        <p style="font-size:11.5px;color:rgba(255,255,255,.5);line-height:1.6">Atendimento especializado via WhatsApp com segurança e agilidade.</p>
      </div>
      <div class="ft-col">
        <h4>Navegação</h4>
        <a href="index.php">Início</a>
        <a href="index.php#servicos">Serviços</a>
        <a href="index.php#faq">Perguntas Frequentes</a>
        <a href="sitemap.php">Mapa do Site</a>
      </div>
      <div class="ft-col">
        <h4>Legal</h4>
        <a href="politica-privacidade.php">Política de Privacidade</a>
        <a href="termos-uso.php">Termos de Uso</a>
        <a href="https://wa.me/5500000000000" class="ft-wa-link">WhatsApp</a>
      </div>
    </div>
    <hr class="ft-div"/>
    <div class="ft-bot">
      <p>© <?php echo date('Y'); ?> Central de Atendimento. Todos os direitos reservados.</p>
      <div class="ft-badges">
        <div class="badge"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>SSL</div>
        <div class="badge"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>LGPD</div>
      </div>
    </div>
  </div>
</footer>
<a href="https://wa.me/5500000000000" class="fwa" aria-label="WhatsApp"><svg width="27" height="27" viewBox="0 0 24 24" fill="#fff"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg><div class="fwab"></div></a>
<script>
function openMob(){document.getElementById('mob').classList.add('on');document.getElementById('ov').classList.add('on');document.body.style.overflow='hidden'}
function closeMob(){document.getElementById('mob').classList.remove('on');document.getElementById('ov').classList.remove('on');document.body.style.overflow=''}
document.addEventListener('contextmenu',function(e){e.preventDefault();return false;});
document.addEventListener('keydown',function(e){if(e.ctrlKey&&(e.key==='s'||e.key==='S'||e.key==='u'||e.key==='U')){e.preventDefault();}if(e.key==='F12'){e.preventDefault();}});
document.addEventListener('selectstart',function(e){e.preventDefault();return false;});
</script>
</body>
</html>
