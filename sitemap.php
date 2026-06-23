<?php require_once 'inc/header.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Mapa do Site – Central de Atendimento</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
    :root{--navy:#0d1b5e;--teal:#00b4cc;--green:#25D366;--greend:#1da851;--text:#0d1b5e;--body:#4a5568;--muted:#718096;--bg:#f5f8ff;--white:#fff;--border:#e2e8f4;}
    html{scroll-behavior:smooth}
    body{font-family:'Inter',sans-serif;background:var(--bg);color:var(--body);font-size:15px;line-height:1.5;-webkit-font-smoothing:antialiased}
    .w{width:100%;max-width:1100px;margin:0 auto;padding:0 16px}
    header{background:var(--white);border-bottom:1px solid var(--border);position:sticky;top:0;z-index:100;box-shadow:0 1px 6px rgba(13,27,94,.07)}
    .hdr{display:flex;align-items:center;justify-content:space-between;height:58px}
    .logo{display:flex;align-items:center;gap:9px;text-decoration:none}
    .logo-box{width:38px;height:38px;border-radius:9px;flex-shrink:0;background:linear-gradient(135deg,#0d1b5e,#1a3a9c);display:flex;align-items:center;justify-content:center}
    .logo-name{display:block;font-size:13px;font-weight:800;color:var(--navy);line-height:1.2}
    .logo-sub{display:block;font-size:9px;font-weight:700;color:var(--teal);letter-spacing:.07em;text-transform:uppercase}
    .desk-nav{display:none;align-items:center;gap:24px}
    .desk-nav a{font-size:13px;font-weight:600;color:var(--navy);text-decoration:none;transition:color .15s}
    .desk-nav a:hover{color:var(--teal)}
    .desk-nav .btn-cta{display:inline-flex;align-items:center;gap:7px;background:var(--green);color:#fff;padding:9px 18px;border-radius:50px;font-size:12.5px;font-weight:700;text-decoration:none;transition:background .2s}
    .desk-nav .btn-cta:hover{background:var(--greend)}
    .ham{width:36px;height:36px;border:none;background:none;cursor:pointer;display:flex;flex-direction:column;justify-content:center;gap:5px;padding:4px}
    .ham span{display:block;width:22px;height:2px;background:var(--navy);border-radius:2px}
    .page-hero{background:linear-gradient(135deg,#0d1b5e 0%,#1a3a9c 100%);padding:40px 0 36px}
    .page-hero-in{display:flex;flex-direction:column;gap:6px}
    .breadcrumb{display:flex;align-items:center;gap:6px;font-size:12px;color:rgba(255,255,255,.5);margin-bottom:10px}
    .breadcrumb a{color:rgba(255,255,255,.55);text-decoration:none;transition:color .15s}
    .breadcrumb a:hover{color:rgba(255,255,255,.9)}
    .breadcrumb span{color:rgba(255,255,255,.3)}
    .page-hero h1{font-size:26px;font-weight:800;color:#fff;line-height:1.2}
    .page-hero p{font-size:13.5px;color:rgba(255,255,255,.65);margin-top:6px}
    .sitemap-sec{padding:36px 0 48px}
    .sm-grid{display:grid;grid-template-columns:1fr;gap:16px;}
    .sm-group{background:var(--white);border:1px solid var(--border);border-radius:16px;overflow:hidden;}
    .sm-group-head{display:flex;align-items:center;gap:12px;padding:16px 18px;border-bottom:1px solid var(--border);background:var(--bg);}
    .sm-group-icon{width:40px;height:40px;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;}
    .ic-navy{background:linear-gradient(135deg,#0d1b5e,#1a3a9c)}
    .ic-teal{background:linear-gradient(135deg,#00b4cc,#00d4ef)}
    .ic-green{background:linear-gradient(135deg,#1da851,#25D366)}
    .ic-purple{background:linear-gradient(135deg,#5b21b6,#7c3aed)}
    .sm-group-title{font-size:15px;font-weight:700;color:var(--navy);}
    .sm-group-sub{font-size:11.5px;color:var(--muted);margin-top:1px;}
    .sm-links{list-style:none;padding:8px 0;}
    .sm-links li a{display:flex;align-items:center;justify-content:space-between;gap:10px;padding:11px 18px;font-size:13.5px;color:var(--navy);text-decoration:none;font-weight:500;transition:background .15s,color .15s;border-left:3px solid transparent;}
    .sm-links li a:hover{background:var(--bg);color:var(--teal);border-left-color:var(--teal);}
    .sm-links li a .lbl{display:flex;align-items:center;gap:9px;}
    .sm-links li a .lbl svg{flex-shrink:0;color:var(--muted);}
    .sm-links li a:hover .lbl svg{color:var(--teal)}
    .sm-links li a .arrow{flex-shrink:0;color:var(--border);}
    .sm-links li a:hover .arrow{color:var(--teal)}
    .sm-links li+li{border-top:1px solid var(--border)}
    .cta-strip{background:linear-gradient(135deg,#0d1b5e 0%,#1a3a9c 100%);border-radius:16px;padding:24px 20px;display:flex;align-items:center;justify-content:space-between;gap:16px;flex-wrap:wrap;margin-top:28px;}
    .cta-strip-left h3{font-size:17px;font-weight:700;color:#fff}
    .cta-strip-left p{font-size:12.5px;color:rgba(255,255,255,.65);margin-top:3px}
    .btn-wa{display:inline-flex;align-items:center;gap:8px;background:var(--green);color:#fff;font-size:13px;font-weight:700;padding:12px 20px;border-radius:50px;text-decoration:none;transition:background .2s;white-space:nowrap}
    .btn-wa:hover{background:var(--greend)}
    footer{background:var(--navy);color:rgba(255,255,255,.65);padding:30px 0 18px}
    .ft-grid{display:grid;grid-template-columns:1fr 1fr;gap:22px 16px;margin-bottom:24px}
    .ft-brand p{font-size:11.5px;color:rgba(255,255,255,.5);line-height:1.6;margin-top:12px}
    .ft-col h4{font-size:10.5px;font-weight:700;color:rgba(255,255,255,.35);letter-spacing:.07em;text-transform:uppercase;margin-bottom:11px}
    .ft-col a{display:block;font-size:12.5px;color:rgba(255,255,255,.6);text-decoration:none;margin-bottom:8px;transition:color .15s}
    .ft-col a:hover{color:#00d4ef}
    .ft-wa-btn{display:inline-flex;align-items:center;gap:7px;background:var(--green);color:#fff !important;padding:10px 16px;border-radius:50px;font-size:12.5px;font-weight:700;margin-bottom:8px;transition:background .2s}
    .ft-wa-btn:hover{background:var(--greend) !important}
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
    .ml a{display:flex;align-items:center;gap:9px;padding:12px 0;border-bottom:1px solid var(--border);font-size:13.5px;font-weight:600;color:var(--navy);text-decoration:none}
    .ml a:hover{color:var(--teal)}
    .mob-wa-btn{margin-top:18px;background:var(--green);color:#fff !important;padding:12px 18px !important;border-radius:50px;justify-content:center;border-bottom:none !important}
    @media(min-width:768px){
      .ham{display:none}.desk-nav{display:flex}
      .sm-grid{grid-template-columns:1fr 1fr}
      .page-hero h1{font-size:34px}
      .ft-grid{grid-template-columns:2fr 1fr 1fr;gap:32px}
    }
    @media(min-width:1024px){.sm-grid{grid-template-columns:repeat(3,1fr)}}
  </style>
</head>
<body>
<div class="ov" id="ov" onclick="closeMob()"></div>
<div class="mob" id="mob">
  <button class="mc" onclick="closeMob()">✕</button>
  <nav class="ml">
    <a href="index.php" onclick="closeMob()">Início</a>
    <a href="index.php#servicos" onclick="closeMob()">Serviços</a>
    <a href="index.php#faq" onclick="closeMob()">Dúvidas Frequentes</a>
    <a href="https://wa.me/5500000000000" class="mob-wa-btn">Falar no WhatsApp</a>
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
        <a href="index.php#como-funciona">Como Funciona</a>
        <a href="index.php#faq">Dúvidas</a>
        <a href="https://wa.me/5500000000000" class="btn-cta">Falar no WhatsApp</a>
      </nav>
      <button class="ham" onclick="openMob()" aria-label="Menu"><span></span><span></span><span></span></button>
    </div>
  </div>
</header>

<div class="page-hero">
  <div class="w">
    <div class="page-hero-in">
      <div class="breadcrumb"><a href="index.php">Início</a><span>›</span><span style="color:rgba(255,255,255,.8)">Mapa do Site</span></div>
      <h1>Mapa do Site</h1>
      <p>Encontre rapidamente qualquer seção ou serviço disponível.</p>
    </div>
  </div>
</div>

<section class="sitemap-sec">
  <div class="w">
    <div class="sm-grid">
      <div class="sm-group">
        <div class="sm-group-head">
          <div class="sm-group-icon ic-navy"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
          <div><div class="sm-group-title">Páginas Principais</div><div class="sm-group-sub">Seções do site</div></div>
        </div>
        <ul class="sm-links">
          <li><a href="index.php"><span class="lbl"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>Página Inicial</span><svg class="arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg></a></li>
          <li><a href="index.php#servicos"><span class="lbl"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>Serviços</span><svg class="arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg></a></li>
          <li><a href="index.php#como-funciona"><span class="lbl"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Como Funciona</span><svg class="arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg></a></li>
          <li><a href="index.php#faq"><span class="lbl"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>Perguntas Frequentes</span><svg class="arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg></a></li>
          <li><a href="sitemap.php"><span class="lbl"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>Mapa do Site</span><svg class="arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg></a></li>
        </ul>
      </div>
      <div class="sm-group">
        <div class="sm-group-head">
          <div class="sm-group-icon ic-teal"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3"/><rect x="9" y="11" width="14" height="10" rx="2"/></svg></div>
          <div><div class="sm-group-title">Serviços</div><div class="sm-group-sub">Atendimentos disponíveis</div></div>
        </div>
        <ul class="sm-links">
          <li><a href="https://wa.me/5500000000000?text=Ativar%20tag"><span class="lbl"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3"/><rect x="9" y="11" width="14" height="10" rx="2"/></svg>Ativar Tag</span><svg class="arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg></a></li>
          <li><a href="https://wa.me/5500000000000?text=Problemas%20de%20pagamento"><span class="lbl"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>Problemas de Pagamento</span><svg class="arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg></a></li>
          <li><a href="https://wa.me/5500000000000?text=Segunda%20via"><span class="lbl"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>2ª Via de Contas</span><svg class="arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg></a></li>
          <li><a href="https://wa.me/5500000000000?text=Cobrança%20indevida"><span class="lbl"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>Cobrança Indevida</span><svg class="arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg></a></li>
          <li><a href="https://wa.me/5500000000000?text=Outros%20serviços"><span class="lbl"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>Outros Serviços</span><svg class="arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg></a></li>
        </ul>
      </div>
      <div class="sm-group">
        <div class="sm-group-head">
          <div class="sm-group-icon ic-green"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.44 2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.96a16 16 0 0 0 6 6l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 16.92z"/></svg></div>
          <div><div class="sm-group-title">Suporte & Contato</div><div class="sm-group-sub">Fale com nossa equipe</div></div>
        </div>
        <ul class="sm-links">
          <li><a href="https://wa.me/5500000000000"><span class="lbl"><svg width="15" height="15" viewBox="0 0 24 24" fill="#25D366"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>Falar no WhatsApp</span><svg class="arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg></a></li>
          <li><a href="index.php#faq"><span class="lbl"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>Perguntas Frequentes</span><svg class="arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg></a></li>
        </ul>
      </div>
      <div class="sm-group">
        <div class="sm-group-head">
          <div class="sm-group-icon ic-purple"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <div><div class="sm-group-title">Legal & Privacidade</div><div class="sm-group-sub">Documentos e políticas</div></div>
        </div>
        <ul class="sm-links">
          <li><a href="politica-privacidade.php"><span class="lbl"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>Política de Privacidade</span><svg class="arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg></a></li>
          <li><a href="termos-uso.php"><span class="lbl"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>Termos de Uso</span><svg class="arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg></a></li>
          <li><a href="sitemap.xml"><span class="lbl"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>LGPD – Conformidade</span><svg class="arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg></a></li>
        </ul>
      </div>
    </div>
    <div class="cta-strip">
      <div class="cta-strip-left">
        <h3>Pronto para resolver seu problema?</h3>
        <p>Nossa equipe está online e pronta para te atender agora.</p>
      </div>
      <a href="https://wa.me/5500000000000" class="btn-wa">
        <svg width="17" height="17" viewBox="0 0 24 24" fill="#fff"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>
        Falar com um especialista
      </a>
    </div>
  </div>
</section>

<footer>
  <div class="w">
    <div class="ft-grid">
      <div class="ft-brand">
        <div class="logo" style="margin-bottom:12px">
          <div class="logo-box"><svg width="21" height="21" viewBox="0 0 24 24" fill="none"><path d="M12 1C6.477 1 2 5.477 2 11c0 1.821.487 3.53 1.338 5L2 22l6.187-1.33A9.953 9.953 0 0012 21c5.523 0 10-4.477 10-10S17.523 1 12 1z" fill="rgba(255,255,255,.12)"/><path d="M17 14.5c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.16-.17.2-.35.22-.64.07-.3-.15-1.26-.46-2.4-1.48-.88-.79-1.48-1.76-1.65-2.06-.17-.3-.02-.46.13-.6.13-.13.3-.35.44-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.08-.15-.67-1.61-.92-2.21-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.48s1.06 2.88 1.21 3.07c.15.2 2.1 3.2 5.08 4.49.71.3 1.26.49 1.69.62.71.23 1.36.2 1.87.12.57-.09 1.76-.72 2.01-1.41.25-.7.25-1.29.17-1.41-.07-.12-.27-.2-.57-.35z" fill="white"/></svg></div>
          <div><span class="logo-name" style="color:#fff">Central de Atendimento</span><span class="logo-sub" style="color:#00d4ef">Atendimento Humano</span></div>
        </div>
        <p>Atendimento especializado para resolver seus problemas com agilidade e segurança.</p>
      </div>
      <div class="ft-col">
        <h4>Navegação</h4>
        <a href="index.php">Início</a>
        <a href="index.php#servicos">Serviços</a>
        <a href="index.php#como-funciona">Como Funciona</a>
        <a href="index.php#faq">Perguntas Frequentes</a>
        <a href="sitemap.php">Mapa do Site</a>
      </div>
      <div class="ft-col">
        <h4>Contato</h4>
        <a href="https://wa.me/5500000000000" class="ft-wa-btn"><svg width="13" height="13" viewBox="0 0 24 24" fill="#fff"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>WhatsApp</a>
        <a href="politica-privacidade.php">Política de Privacidade</a>
        <a href="termos-uso.php">Termos de Uso</a>
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
