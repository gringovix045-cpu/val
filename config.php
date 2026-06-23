<?php
// ═══════════════════════════════════════════════════
//  CONFIGURAÇÃO CENTRAL – Central de Atendimento
//  Altere apenas este arquivo para atualizar o
//  número do WhatsApp em TODO o site automaticamente.
// ═══════════════════════════════════════════════════

// Número do WhatsApp (somente dígitos, com código do país + DDD)
// Exemplo: Brasil (55) + DDD (11) + número (999999999) = 5511999999999
define('WA_NUMBER', '5500000000000');

// URL base do WhatsApp (não alterar)
define('WA_LINK', 'https://wa.me/' . WA_NUMBER);

// Mensagens pré-definidas por serviço (opcional customizar)
define('WA_ATIVAR_TAG',    WA_LINK . '?text=Quero%20ativar%20minha%20tag');
define('WA_PAGAMENTO',     WA_LINK . '?text=Problemas%20de%20pagamento');
define('WA_SEGUNDA_VIA',   WA_LINK . '?text=Segunda%20via%20de%20contas');
define('WA_COBRANCA',      WA_LINK . '?text=Cobran%C3%A7a%20indevida');
define('WA_OUTROS',        WA_LINK . '?text=Outros%20servi%C3%A7os');

// Footer – texto de copyright (ano é gerado dinamicamente via PHP)
define('SITE_NOME', 'Central de Atendimento Humano');
?>
