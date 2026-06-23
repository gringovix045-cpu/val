<?php require_once 'inc/header.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="robots" content="noindex, nofollow"/>
  <title>JavaScript Necessário – Central de Atendimento</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    *{box-sizing:border-box;margin:0;padding:0}
    body{font-family:'Inter',sans-serif;background:#f5f8ff;color:#4a5568;min-height:100vh;display:flex;align-items:center;justify-content:center;padding:24px}
    .card{background:#fff;border:1px solid #e2e8f4;border-radius:18px;padding:40px 32px;max-width:420px;width:100%;text-align:center;box-shadow:0 4px 24px rgba(13,27,94,.08)}
    .ic{width:64px;height:64px;border-radius:50%;background:linear-gradient(135deg,#0d1b5e,#1a3a9c);display:flex;align-items:center;justify-content:center;margin:0 auto 20px}
    h1{font-size:20px;font-weight:800;color:#0d1b5e;margin-bottom:10px}
    p{font-size:13px;color:#718096;line-height:1.65;margin-bottom:24px}
    .btn{display:inline-flex;align-items:center;gap:8px;background:#25D366;color:#fff;font-size:13.5px;font-weight:700;padding:12px 24px;border-radius:50px;text-decoration:none}
    .note{font-size:11px;color:#a0aec0;margin-top:14px}
  </style>
</head>
<body>
<div class="card">
  <div class="ic">
    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
      <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
    </svg>
  </div>
  <h1>JavaScript necessário</h1>
  <p>Este site requer JavaScript habilitado para funcionar corretamente. Ative o JavaScript no seu navegador e recarregue a página.</p>
  <a href="<?= WA_LINK ?>" class="btn">
    <svg width="16" height="16" viewBox="0 0 24 24" fill="#fff"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>
    Falar no WhatsApp
  </a>
  <p class="note">Ou habilite o JavaScript e atualize a página.</p>
</div>
</body>
</html>
