<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Pepper · Mario AV · marioconf.ddns.et</title>
<style>
  :root{
    --midnight:#0b2540;        /* midnight blue */
    --accent:#2b6fb3;
    --accent-2:#1e4f7a;
    --offwhite:#f6f5f3;        /* blanco roto */
    --muted:#7f8fa0;
    --card:#ffffff;
    --radius:12px;
    --gap:18px;
    font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
  }
  *{box-sizing:border-box}
  html,body{height:100%}
  body{
    margin:0;
    background: linear-gradient(180deg,var(--offwhite),#fff);
    color:var(--midnight);
    -webkit-font-smoothing:antialiased;
    font-size:14px;
  }

  /* Layout */
  .site-wrap{display:flex;min-height:100vh}
  nav.site-nav{
    width:300px;background:linear-gradient(180deg,var(--midnight),var(--accent-2));
    color:var(--offwhite);padding:26px;display:flex;flex-direction:column;gap:18px;
  }
  .brand{display:flex;align-items:center;gap:12px}
  .avatar{
    width:44px;height:44px;border-radius:10px;
    background:linear-gradient(135deg,var(--accent),var(--accent-2));display:flex;
    align-items:center;justify-content:center;font-weight:700;color:white;font-size:16px;
    box-shadow: 0 6px 18px rgba(11,37,64,0.18);
  }
  .brand .meta{line-height:1}
  .brand .meta div:first-child{font-weight:700}
  nav ul{list-style:none;padding:0;margin:8px 0 0 0}
  nav li{margin-bottom:6px}
  nav a{color:var(--offwhite);text-decoration:none;display:flex;align-items:center;gap:8px;padding:10px;border-radius:8px}
  nav a:hover, nav .active > a{background: rgba(255,255,255,0.06)}
  .note{margin-top:auto;background:rgba(255,255,255,0.04);padding:12px;border-radius:10px;font-size:13px}
  .note b{color:#fff}

  main{flex:1;padding:26px;overflow:auto}
  header{display:flex;align-items:flex-start;gap:18px;flex-wrap:wrap}
  .breadcrumbs a{color:var(--muted);text-decoration:none;font-size:13px}
  .title{font-size:22px;margin:0;color:var(--midnight);font-weight:700}

  .nav-tabs{display:flex;gap:8px;margin-left:auto}
  .nav-tabs a{padding:8px 12px;border-radius:8px;background:transparent;color:var(--midnight);text-decoration:none;border:1px solid transparent}
  .nav-tabs a.active{background:var(--card);box-shadow:0 6px 18px rgba(11,37,64,0.06)}

  /* Controls */
  .controls{display:flex;gap:10px;align-items:center;margin:18px 0 12px;flex-wrap:wrap}
  .search{display:flex;align-items:center;gap:8px;background:var(--card);padding:8px 12px;border-radius:999px;box-shadow:0 4px 10px rgba(11,37,64,0.04);min-width:260px}
  .search input{border:0;outline:0;background:transparent;width:260px}
  .select, .btn{padding:8px 12px;border-radius:8px;border:1px solid #e9eef6;background:var(--card);cursor:pointer}
  .btn.primary{background:var(--accent);color:white;border:0;box-shadow:0 8px 20px rgba(43,111,179,0.18);font-weight:700}
  .checkbox{display:flex;gap:8px;align-items:center}

  /* Pipeline */
  .content-columns{display:grid;grid-template-columns:repeat(4,1fr);gap:var(--gap)}
  .col{background:var(--card);padding:12px;border-radius:var(--radius);box-shadow:0 8px 24px rgba(11,37,64,0.06);border:1px solid rgba(11,37,64,0.03);min-height:260px}
  .col h4{display:flex;justify-content:space-between;align-items:center;margin:0 0 8px 0}
  .items{display:flex;flex-direction:column;gap:12px;min-height:120px}
  .item{background:linear-gradient(180deg, #fff, #fbfcfd);padding:12px;border-radius:10px;border-left:4px solid transparent;box-shadow:0 6px 16px rgba(11,37,64,0.04);cursor:grab}
  .item.mine{border-left-color:var(--accent)}
  .item h5{margin:0;font-size:15px}
  .meta{display:flex;gap:8px;align-items:center;margin-top:8px;font-size:13px;color:var(--muted)}
  .tag{padding:4px 8px;border-radius:999px;background:#f1f6fb;font-weight:600;color:var(--accent);font-size:12px}

  /* Right panels */
  .right-panels{display:flex;gap:var(--gap);margin-top:18px;flex-wrap:wrap}
  .panel{background:var(--card);padding:14px;border-radius:12px;box-shadow:0 8px 24px rgba(11,37,64,0.06);border:1px solid rgba(11,37,64,0.03);flex:1;min-width:280px}
  .panel canvas{width:100%;height:220px;display:block}

  .progress-wrap{background:#eef6fb;border-radius:8px;padding:8px;margin-top:8px}
  .progress-bar{height:12px;background:linear-gradient(90deg,var(--accent),var(--accent-2));border-radius:8px;width:0%;transition:width .6s}

  footer{margin-top:20px;color:var(--muted);font-size:13px}

  /* Responsive */
  @media (max-width:1000px){.content-columns{grid-template-columns:repeat(2,1fr)}nav.site-nav{display:none}}
  @media (max-width:640px){.content-columns{grid-template-columns:1fr}}
</style>
</head>
<body>
<div class="site-wrap">

  <nav class="site-nav" aria-label="Navegación principal">
    <div class="brand">
      <div class="avatar" aria-hidden="true">MA</div>
      <div class="meta">
        <div>Pepper</div>
        <div style="font-size:12px;opacity:.9">Mario AV · marioconf.ddns.et</div>
      </div>
    </div>

    <ul>
      <li class="active"><a href="#"><strong>Deals</strong></a>
        <ul>
          <li><a href="#">Crear nuevo deal</a></li>
          <li><a href="#">Mis plantillas</a></li>
        </ul>
      </li>
      <li><a href="#">Mis fondos</a></li>
      <li><a href="#">Inversores</a></li>
      <li><a href="#">Reportes</a></li>
      <li><a href="#">Tareas</a></li>
      <li><a href="#">Ajustes</a></li>
    </ul>

    <div class="note" aria-live="polite">
      <div style="font-weight:700;margin-bottom:6px">Objetivo mensual</div>
      <div style="font-size:20px;font-weight:800">€200.000</div>
      <div class="tiny" style="margin-top:8px">Progreso: <span id="goalPercent">0%</span></div>
      <div class="progress-wrap" aria-hidden="true"><div id="goalBar" class="progress-bar" style="width:0%"></div></div>
      <p class="tiny" style="margin-top:8px">Dominio: <b>marioconf.ddns.et</b><br>Usuario: <b>Mario AV</b></p>
    </div>
  </nav>

  <main>
    <header>
      <div>
        <div class="breadcrumbs"><a href="#">Home</a> · <span style="color:var(--muted)">Pipeline</span></div>
        <h1 class="title">Hola, Mario AV — Pipeline</h1>
        <div style="font-size:13px;color:var(--muted);margin-top:6px">Vista personalizada para <strong>marioconf.ddns.et</strong></div>
      </div>

      <nav class="nav-tabs" aria-label="Pestañas principales">
        <a href="#" class="active">Deals <span style="margin-left:8px;color:var(--muted)">·</span></a>
        <a href="#">Library</a>
        <a href="#">Search</a>
      </nav>
    </header>

    <!-- Controles personalizados -->
    <div class="controls" role="region" aria-label="Controles principales">
      <div class="search" role="search" aria-label="Buscar deals">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M21 21l-4.35-4.35" stroke="#9aa8bb" stroke-width="1.5" stroke-linecap="round"/><circle cx="11" cy="11" r="6" stroke="#9aa8bb" stroke-width="1.5"/></svg>
        <input id="globalSearch" placeholder="Buscar deals, responsable, compañía..." />
      </div>

      <select id="filterColumn" class="select" title="Filtrar por columna">
        <option value="all">Todas</option>
        <option value="prospect">Prospección</option>
        <option value="negotiation">En negociación</option>
        <option value="review">En revisión</option>
        <option value="closed">Cerrado</option>
      </select>

      <select id="filterOwner" class="select" title="Filtrar por responsable">
        <option value="all">Todos los responsables</option>
      </select>

      <select id="filterType" class="select" title="Filtrar por tipo">
        <option value="all">Tipo: Todos</option>
        <option value="equity">Equity</option>
        <option value="debt">Debt</option>
        <option value="other">Otro</option>
      </select>

      <select id="sortBy" class="select" title="Ordenar">
        <option value="none">Orden — Ninguno</option>
        <option value="amount.desc">Monto (mayor→menor)</option>
        <option value="amount.asc">Monto (menor→mayor)</option>
        <option value="date.desc">Fecha (reciente)</option>
        <option value="date.asc">Fecha (antigua)</option>
      </select>

      <label class="checkbox"><input type="checkbox" id="onlyMine" /> Mostrar solo mis deals</label>

      <button id="loadDemo" class="btn primary">Cargar demo (gráfica)</button>
      <button id="exportCsv" class="btn">Exportar CSV</button>
      <button id="printView" class="btn">Imprimir</button>
    </div>

    <!-- Pipeline -->
    <div class="content-columns" id="pipeline">
      <div class="col" data-col="prospect" aria-label="Prospección">
        <h4>Prospección <span id="count-prospect" class="small">0</span></h4>
        <div class="items" id="col-prospect"></div>
      </div>

      <div class="col" data-col="negotiation" aria-label="En negociación">
        <h4>En negociación <span id="count-negotiation" class="small">0</span></h4>
        <div class="items" id="col-negotiation"></div>
      </div>

      <div class="col" data-col="review" aria-label="En revisión">
        <h4>En revisión <span id="count-review" class="small">0</span></h4>
        <div class="items" id="col-review"></div>
      </div>

      <div class="col" data-col="closed" aria-label="Cerrado">
        <h4>Cerrado <span id="count-closed" class="small">0</span></h4>
        <div class="items" id="col-closed"></div>
      </div>
    </div>

    <!-- Paneles derechos -->
    <div class="right-panels">
      <div class="panel" style="max-width:640px;">
        <div style="display:flex;justify-content:space-between;align-items:center">
          <h4 style="margin:0">Gráfica de cierres (mensual)</h4>
          <div class="tiny" style="color:var(--muted)">Estado: <strong id="chartState">Sin datos</strong></div>
        </div>
        <canvas id="mainChart" width="800" height="300" aria-label="Gráfica de cierres"></canvas>
        <p class="tiny" id="chartNote">La gráfica está vacía hasta que cargues datos demo.</p>
      </div>

      <div class="panel">
        <h4 style="margin-top:0">Resumen rápido · Mario AV</h4>
        <div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:8px">
          <div style="flex:1;min-width:150px">
            <div class="small muted">Deals visibles</div>
            <div style="font-size:20px;font-weight:800" id="totalDeals">0</div>
          </div>
          <div style="flex:1;min-width:150px">
            <div class="small muted">Valor total (EUR)</div>
            <div style="font-size:20px;font-weight:800" id="totalValue">€0</div>
          </div>
        </div>

        <hr style="margin:14px 0;border:none;border-top:1px solid #eef2f6">

        <div style="display:flex;gap:8px;flex-direction:column">
          <button id="resetBtn" class="btn">Restablecer vista</button>
          <button id="highlightMine" class="btn">Resaltar mis deals</button>
        </div>
      </div>
    </div>

    <footer>Plantilla estática — Dominio: <strong>marioconf.ddns.et</strong> — Usuario: <strong>Mario AV</strong></footer>
  </main>
</div>

<script>
/* ===== Datos (personalizados para Mario AV) ===== */
const monthlyGoal = 200000; // objetivo mensual (personal)
const sampleDeals = [
  {id:'m1', title:'Alpha Health (Seed)', amount:120000, owner:'Mario AV', date:'2025-09-01', col:'prospect', type:'equity', notes:'Contacto inicial con CEO — alto interés'},
  {id:'m2', title:'GreenLogistics', amount:60000, owner:'Laura R.', date:'2025-08-20', col:'negotiation', type:'debt', notes:'Oferta de deuda subordinada discutida'},
  {id:'m3', title:'Infra Delta', amount:300000, owner:'Mario AV', date:'2025-07-12', col:'review', type:'equity', notes:'Due diligence en curso'},
  {id:'m4', title:'SaaS Gamma', amount:90000, owner:'Ana S.', date:'2025-10-01', col:'prospect', type:'equity', notes:'Demo programada para 15/10'},
  {id:'m5', title:'Health Epsilon', amount:150000, owner:'Pedro L.', date:'2025-06-11', col:'closed', type:'equity', notes:'Cerrado — contrato firmado'},
  {id:'m6', title:'Fintech Omega', amount:210000, owner:'Mario AV', date:'2025-05-30', col:'closed', type:'equity', notes:'Cerrado — payout completado'},
  {id:'m7', title:'Retail Beta', amount:45000, owner:'Carlos M.', date:'2025-09-05', col:'negotiation', type:'other', notes:'Términos por definir'},
  {id:'m8', title:'Marketplace Zeta', amount:60000, owner:'Sofia Q.', date:'2025-09-12', col:'negotiation', type:'equity', notes:'Term sheet recibido'},
  {id:'m9', title:'Logistics Xi', amount:40000, owner:'Mario AV', date:'2025-08-30', col:'review', type:'debt', notes:'Pendiente documentación fiscal'},
];

let deals = sampleDeals.map(d => ({...d})); // pre-cargados para ver UI, personalización visible
const cols = ['prospect','negotiation','review','closed'];

/* ===== Helpers ===== */
function formatCurrency(n){ return new Intl.NumberFormat('es-ES',{style:'currency',currency:'EUR',maximumFractionDigits:0}).format(n); }
function escapeHtml(s){ if (!s) return ''; return String(s).replaceAll('&','&amp;').replaceAll('<','&lt;').replaceAll('>','&gt;').replaceAll('"','&quot;').replaceAll("'",'&#039;'); }
function cLabel(c){ if (c==='prospect') return 'Prospección'; if (c==='negotiation') return 'Negociación'; if (c==='review') return 'Revisión'; if (c==='closed') return 'Cerrado'; return c; }

/* ===== Render tarjetas ===== */
function createCard(deal){
  const item = document.createElement('div');
  item.className = 'item' + (deal.owner === 'Mario AV' ? ' mine' : '');
  item.draggable = true;
  item.dataset.id = deal.id;
  item.innerHTML = `
    <div style="display:flex;justify-content:space-between;align-items:center">
      <h5>${escapeHtml(deal.title)}</h5>
      <div class="tag">${escapeHtml(deal.type || '—')}</div>
    </div>
    <div class="meta">
      <div class="small">${formatCurrency(deal.amount)}</div>
      <div class="small">• ${escapeHtml(deal.owner)}</div>
      <div class="small">• ${escapeHtml(deal.date)}</div>
    </div>
    <div class="small" style="margin-top:8px;color:var(--muted)">${escapeHtml(deal.notes)}</div>
  `;
  addDragHandlers(item);
  return item;
}

function renderPipeline(filteredFn = null){
  cols.forEach(c => { document.getElementById('col-' + c).innerHTML = ''; });
  let visible = deals.slice();

  // filters: apply search/owner/type/onlyMine
  if (typeof filteredFn === 'function') visible = visible.filter(filteredFn);

  // sorting
  const sort = document.getElementById('sortBy').value;
  if (sort && sort !== 'none'){
    const [prop,dir] = sort.split('.');
    visible.sort((a,b)=>{
      if (prop === 'amount') return (a.amount - b.amount) * (dir==='asc'?1:-1);
      if (prop === 'date') return (new Date(a.date) - new Date(b.date)) * (dir==='asc'?1:-1);
      return 0;
    });
  }

  visible.forEach(d => {
    const cont = document.getElementById('col-' + d.col);
    if (cont) cont.appendChild(createCard(d));
  });

  // update counts and totals
  cols.forEach(c => {
    const count = deals.filter(d => d.col === c).length;
    document.getElementById('count-' + c).textContent = count;
  });
  document.getElementById('totalDeals').textContent = deals.length;
  const totalVal = deals.reduce((s,d)=>s + (d.amount||0),0);
  document.getElementById('totalValue').textContent = formatCurrency(totalVal);

  // progress toward monthlyGoal: sum of 'closed' deals
  const closedSum = deals.filter(d=>d.col==='closed').reduce((s,d)=>s + (d.amount||0),0);
  const pct = Math.round(Math.min(100, (closedSum / monthlyGoal) * 100));
  document.getElementById('goalPercent').textContent = pct + '%';
  document.getElementById('goalBar').style.width = pct + '%';
}

/* ===== Drag & Drop ===== */
let dragEl = null;
function addDragHandlers(el){
  el.addEventListener('dragstart', e=>{
    dragEl = el; el.classList.add('dragging');
    e.dataTransfer.effectAllowed = 'move';
    e.dataTransfer.setData('text/plain', el.dataset.id);
  });
  el.addEventListener('dragend', ()=>{ if (dragEl) dragEl.classList.remove('dragging'); dragEl = null; });
}
document.querySelectorAll('.col').forEach(colEl => {
  colEl.addEventListener('dragover', e=>{ e.preventDefault(); colEl.style.outline = '2px dashed rgba(11,37,64,0.08)'; });
  colEl.addEventListener('dragleave', ()=>{ colEl.style.outline = 'none'; });
  colEl.addEventListener('drop', e=>{
    e.preventDefault(); colEl.style.outline = 'none';
    const id = e.dataTransfer.getData('text/plain') || (dragEl && dragEl.dataset.id);
    if (!id) return;
    const deal = deals.find(d=>d.id===id);
    if (deal){
      deal.col = colEl.dataset.col;
      renderPipeline(applyFilters());
      if (chartData) updateChartFromDeals();
    }
  });
});

/* ===== Filtros y búsqueda ===== */
const searchInput = document.getElementById('globalSearch');
searchInput.addEventListener('input', ()=> renderPipeline(applyFilters()));
document.getElementById('filterColumn').addEventListener('change', ()=> renderPipeline(applyFilters()));
document.getElementById('filterOwner').addEventListener('change', ()=> renderPipeline(applyFilters()));
document.getElementById('filterType').addEventListener('change', ()=> renderPipeline(applyFilters()));
document.getElementById('sortBy').addEventListener('change', ()=> renderPipeline(applyFilters()));
document.getElementById('onlyMine').addEventListener('change', ()=> renderPipeline(applyFilters()));

function applyFilters(){
  const q = searchInput.value.trim().toLowerCase();
  const filterCol = document.getElementById('filterColumn').value;
  const owner = document.getElementById('filterOwner').value;
  const type = document.getElementById('filterType').value;
  const onlyMine = document.getElementById('onlyMine').checked;
  return function(deal){
    if (filterCol !== 'all' && deal.col !== filterCol) return false;
    if (owner !== 'all' && deal.owner !== owner) return false;
    if (type !== 'all' && (deal.type||'other') !== type) return false;
    if (onlyMine && deal.owner !== 'Mario AV') return false;
    if (!q) return true;
    const hay = `${deal.title} ${deal.owner} ${deal.notes} ${deal.date} ${deal.amount}`.toLowerCase();
    return hay.includes(q);
  };
}

/* ===== Gráfica (canvas) - inicialmente vacía ===== */
const canvas = document.getElementById('mainChart');
const ctx = canvas.getContext('2d');
let chartData = null;

function resizeCanvas(){
  const ratio = window.devicePixelRatio || 1;
  const w = canvas.clientWidth;
  const h = canvas.clientHeight;
  canvas.width = Math.round(w * ratio);
  canvas.height = Math.round(h * ratio);
  ctx.setTransform(ratio,0,0,ratio,0,0);
  if (chartData) drawBarChart(chartData); else drawEmptyChart();
}

function drawEmptyChart(){
  ctx.clearRect(0,0,canvas.width,canvas.height);
  const w = canvas.width / (window.devicePixelRatio || 1);
  const h = canvas.height / (window.devicePixelRatio || 1);
  ctx.save();
  ctx.fillStyle = '#f4f6f8';
  roundRect(ctx, 18, 18, w-36, h-36, 10);
  ctx.fill();
  ctx.fillStyle = '#94a6b7';
  ctx.font = '600 14px Inter, Arial';
  ctx.textAlign = 'center';
  ctx.fillText('Sin datos disponibles', w/2, h/2 - 6);
  ctx.font = '12px Inter, Arial';
  ctx.fillText('Pulsa "Cargar demo (gráfica)" para ver una demo basada en tus deals', w/2, h/2 + 16);
  ctx.restore();
  document.getElementById('chartState').textContent = 'Sin datos';
}

function drawBarChart(data){
  chartData = data;
  ctx.clearRect(0,0,canvas.width,canvas.height);
  const w = canvas.width / (window.devicePixelRatio || 1);
  const h = canvas.height / (window.devicePixelRatio || 1);
  const padding = {l:44,r:20,t:28,b:48};
  const innerW = w - padding.l - padding.r;
  const innerH = h - padding.t - padding.b;
  const max = Math.max(1, ...data.values);
  const barW = Math.min(60, innerW / data.values.length * 0.64);
  const gap = (innerW - barW * data.values.length) / (Math.max(1, data.values.length - 1));

  ctx.save();
  ctx.translate(padding.l, padding.t);

  // grid + y labels
  ctx.strokeStyle = '#e6eef6';
  ctx.lineWidth = 1;
  const gridCount = 4;
  ctx.font = '12px Inter, Arial';
  ctx.fillStyle = '#94a6b7';
  ctx.textAlign = 'right';
  for(let i=0;i<=gridCount;i++){
    const y = innerH * (i / gridCount);
    ctx.beginPath(); ctx.moveTo(0,y); ctx.lineTo(innerW, y); ctx.stroke();
    const label = Math.round(max * (1 - i / gridCount));
    ctx.fillText(formatShort(label), -8, y + 4);
  }

  // bars + labels
  for(let i=0;i<data.values.length;i++){
    const val = data.values[i];
    const x = i * (barW + gap);
    const barH = (val / max) * (innerH - 10);
    roundRect(ctx, x, innerH - barH, barW, barH, 6);
    ctx.fillStyle = 'rgba(43,111,179,0.95)';
    ctx.fill();
    // label
    ctx.fillStyle = '#253746';
    ctx.font = '12px Inter, Arial';
    ctx.textAlign = 'center';
    ctx.fillText(data.labels[i], x + barW/2, innerH + 20);
  }

  ctx.restore();
  document.getElementById('chartState').textContent = 'Datos cargados';
}

function formatShort(n){ if (n >= 1000) return (n/1000).toFixed(1)+'k'; return n.toString(); }
function roundRect(ctx, x, y, w, h, r){ if (w < 2*r) r = w/2; if (h < 2*r) r = h/2; ctx.beginPath(); ctx.moveTo(x+r,y); ctx.arcTo(x+w,y,x+w,y+h,r); ctx.arcTo(x+w,y+h,x,y+h,r); ctx.arcTo(x,y+h,x,y,r); ctx.arcTo(x,y,x+w,y,r); ctx.closePath(); }

/* Build chart from deals aggregated by month (May..Oct demo) */
function buildChartFromDeals(){
  const labels = ['May','Jun','Jul','Aug','Sep','Oct'];
  const values = [0,0,0,0,0,0];
  deals.forEach(d=>{
    const m = new Date(d.date).getMonth() + 1;
    if (m >=5 && m <= 10) values[m-5] += d.amount || 0;
  });
  return {labels, values};
}
function updateChartFromDeals(){
  const data = {
    labels: cols.map(c=>cLabel(c)),
    values: cols.map(c=>deals.filter(d=>d.col===c).reduce((s,x)=>s+(x.amount||0),0))
  };
  drawBarChart(data);
}

/* ===== CSV export (cliente) ===== */
function exportCSV(){
  const header = ['id','title','amount','owner','date','col','type','notes'];
  const rows = [header.join(',')];
  deals.forEach(d=>{
    const row = [d.id, `"${d.title.replaceAll('"','""')}"`, d.amount, `"${d.owner}"`, d.date, d.col, d.type || '', `"${(d.notes||'').replaceAll('"','""')}"`];
    rows.push(row.join(','));
  });
  const csv = rows.join('\n');
  const blob = new Blob([csv], {type:'text/csv;charset=utf-8;'});
  const url = URL.createObjectURL(blob);
  const a = document.createElement('a'); a.href = url; a.download = 'marioconf_deals.csv'; document.body.appendChild(a); a.click(); a.remove();
  URL.revokeObjectURL(url);
}

/* ===== Populate owner filter dynamically ===== */
function populateOwnerFilter(){
  const sel = document.getElementById('filterOwner');
  const owners = Array.from(new Set(deals.map(d=>d.owner))).sort();
  sel.innerHTML = '<option value="all">Todos los responsables</option>';
  owners.forEach(o=>{
    const opt = document.createElement('option'); opt.value = o; opt.textContent = o; sel.appendChild(opt);
  });
  // preselect Mario AV if present
  if (owners.includes('Mario AV')) sel.value = 'all';
}

/* ===== Buttons y eventos ===== */
document.getElementById('loadDemo').addEventListener('click', ()=>{
  const data = buildChartFromDeals();
  drawBarChart(data);
  // actualizar porcentaje de objetivo con closed + negotiation as posible (para la demo)
  const possible = deals.filter(d=>d.col==='closed' || d.col==='negotiation').reduce((s,x)=>s+(x.amount||0),0);
  const pct = Math.round(Math.min(100, (possible / monthlyGoal) * 100));
  document.getElementById('goalPercent').textContent = pct + '%';
  document.getElementById('goalBar').style.width = pct + '%';
});

document.getElementById('exportCsv').addEventListener('click', exportCSV);
document.getElementById('printView').addEventListener('click', ()=> window.print());
document.getElementById('resetBtn').addEventListener('click', ()=>{
  deals = sampleDeals.map(d => ({...d})); chartData = null; drawEmptyChart(); populateOwnerFilter(); renderPipeline();
});
document.getElementById('highlightMine').addEventListener('click', ()=>{
  // briefly highlight Mario's cards
  document.querySelectorAll('.item.mine').forEach(el=>{
    el.style.boxShadow = '0 10px 30px rgba(43,111,179,0.14)';
    setTimeout(()=> el.style.boxShadow = '0 6px 16px rgba(11,37,64,0.04)', 1600);
  });
});

/* ===== Init ===== */
(function init(){
  // render pipeline with preloaded deals (personalized)
  populateOwnerFilter();
  renderPipeline();
  resizeCanvas();
  // handle window resize (DPR-aware)
  window.addEventListener('resize', ()=> resizeCanvas());

  // accessibility helpers
  document.getElementById('globalSearch').addEventListener('keydown', (e)=>{ if (e.key === 'Escape') { e.target.value = ''; renderPipeline(applyFilters()); }});
})();
</script>
</body>
</html>

