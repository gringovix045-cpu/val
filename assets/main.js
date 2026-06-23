
  /* ── FUNÇÕES DO SITE ── */
  function openMob(){document.getElementById('mob').classList.add('on');document.getElementById('ov').classList.add('on');document.body.style.overflow='hidden'}
  function closeMob(){document.getElementById('mob').classList.remove('on');document.getElementById('ov').classList.remove('on');document.body.style.overflow=''}
  function toggleFaq(btn){
    var item=btn.closest('.fi'),ans=item.querySelector('.fa'),open=item.classList.contains('open');
    document.querySelectorAll('.fi.open').forEach(function(i){i.classList.remove('open');i.querySelector('.fa').style.maxHeight=null});
    if(!open){item.classList.add('open');ans.style.maxHeight=ans.scrollHeight+'px'}
  }

  /* ── ANTI-COPY / ANTI-INSPECT ── */
  document.addEventListener('contextmenu',function(e){e.preventDefault();return false;});
  document.addEventListener('selectstart',function(e){e.preventDefault();return false;});
  document.addEventListener('dragstart',function(e){e.preventDefault();return false;});
  document.addEventListener('copy',function(e){e.preventDefault();return false;});
  document.addEventListener('cut',function(e){e.preventDefault();return false;});
  document.addEventListener('keydown',function(e){
    if(e.ctrlKey&&['s','S','u','U','p','P','a','A','c','C'].indexOf(e.key)>-1){e.preventDefault();return false;}
    if(e.key==='F12'){e.preventDefault();return false;}
    if(e.ctrlKey&&e.shiftKey&&['I','i','J','j','C','c','K','k'].indexOf(e.key)>-1){e.preventDefault();return false;}
    if(e.metaKey&&e.altKey&&['I','i','J','j','C','c'].indexOf(e.key)>-1){e.preventDefault();return false;}
  });

  /* ── DETECÇÃO DE DEVTOOLS ── */
  (function(){
    /* Cria overlay que cobre todo o site quando DevTools for aberto */
    var ov=document.createElement('div');
    ov.id='_dtov';
    ov.style.cssText='display:none;position:fixed;inset:0;z-index:99999;background:#0d1b5e;color:#fff;flex-direction:column;align-items:center;justify-content:center;text-align:center;font-family:Inter,sans-serif;';
    ov.innerHTML='<div style="max-width:320px;padding:32px"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#00d4ef" stroke-width="1.8" style="margin-bottom:16px"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg><h2 style="font-size:20px;font-weight:800;margin-bottom:10px">Conteúdo Protegido</h2><p style="font-size:13px;color:rgba(255,255,255,.7);line-height:1.6">Este site possui proteção de conteúdo ativa.<br>Feche as ferramentas do desenvolvedor para continuar.</p></div>';
    document.body.appendChild(ov);

    var _open=false;
    function showOv(v){
      if(v===_open)return;
      _open=v;
      ov.style.display=v?'flex':'none';
      document.body.style.overflow=v?'hidden':'';
    }

    /* Método 1 – diferença de tamanho de janela (painel lateral ou inferior) */
    var _threshold=160;
    function checkSize(){
      var wDiff=window.outerWidth-window.innerWidth;
      var hDiff=window.outerHeight-window.innerHeight;
      showOv(wDiff>_threshold||hDiff>_threshold);
    }

    /* Método 2 – console.log com getter (detecta quando DevTools formata o objeto) */
    var _devObj=new Image();
    var _dtOpen=false;
    Object.defineProperty(_devObj,'id',{get:function(){_dtOpen=true;}});
    setInterval(function(){
      _dtOpen=false;
      console.log('%c',_devObj);
      if(_dtOpen)showOv(true);
      else checkSize();
    },800);

    /* Método 3 – debugger contínuo dificulta inspeção manual */
    setInterval(function(){(function(){}).constructor('debugger')();},100);

    window.addEventListener('resize',checkSize);
    checkSize();
  })();
