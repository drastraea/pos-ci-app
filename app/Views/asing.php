
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login dulu!</title>

<link rel="icon" type="image/x-icon" href="<?= base_url()?>/harmonis.ico">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="<?= base_url('AdminLTE')?>/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="<?= base_url('AdminLTE')?>/dist/css/adminlte.min.css?v=3.2.0">
<script nonce="965447ee-0b11-444a-abef-507768128543">(function(w,d){!function(f,g,h,i){f[h]=f[h]||{};f[h].executed=[];f.zaraz={deferred:[],listeners:[]};f.zaraz.q=[];f.zaraz._f=function(j){return function(){var k=Array.prototype.slice.call(arguments);f.zaraz.q.push({m:j,a:k})}};for(const l of["track","set","debug"])f.zaraz[l]=f.zaraz._f(l);f.zaraz.init=()=>{var m=g.getElementsByTagName(i)[0],n=g.createElement(i),o=g.getElementsByTagName("title")[0];o&&(f[h].t=g.getElementsByTagName("title")[0].text);f[h].x=Math.random();f[h].w=f.screen.width;f[h].h=f.screen.height;f[h].j=f.innerHeight;f[h].e=f.innerWidth;f[h].l=f.location.href;f[h].r=g.referrer;f[h].k=f.screen.colorDepth;f[h].n=g.characterSet;f[h].o=(new Date).getTimezoneOffset();if(f.dataLayer)for(const s of Object.entries(Object.entries(dataLayer).reduce(((t,u)=>({...t[1],...u[1]})))))zaraz.set(s[0],s[1],{scope:"page"});f[h].q=[];for(;f.zaraz.q.length;){const v=f.zaraz.q.shift();f[h].q.push(v)}n.defer=!0;for(const w of[localStorage,sessionStorage])Object.keys(w||{}).filter((y=>y.startsWith("_zaraz_"))).forEach((x=>{try{f[h]["z_"+x.slice(7)]=JSON.parse(w.getItem(x))}catch{f[h]["z_"+x.slice(7)]=w.getItem(x)}}));n.referrerPolicy="origin";n.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(f[h])));m.parentNode.insertBefore(n,m)};["complete","interactive"].includes(g.readyState)?zaraz.init():f.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="hold-transition lockscreen">

<div class="lockscreen-wrapper">
<div class="lockscreen-logo">
Toko Emas <b>Harmonis 1</b>
</div>

<div class="lockscreen-name">Peringatan!</div>

<div class="lockscreen-item">

<!--<div class="lockscreen-image">-->
<!--<img src="</?= base_url('AdminLTE')?>/dist/img/user1-128x128.jpg" alt="User Image">-->
<!--</div>-->

<div class="input-group">
<input class="form-control text-red text-center" placeholder="password" value="Anda belum login" disabled>
<div class="input-group-append">
</div>
</div>

</div>

<div class="help-block text-center">
Data ini hanya bisa diakses oleh admin.<br/>
Silakan <a href="<?= base_url('Home')?>" class="text-green">login</a> untuk mengakses menu admin.
</div>
<div class="text-center">
</div>
<footer class="lockscreen-footer text-center">
    <br/><br/><br/><br/><br/>
    <strong>Dibuat oleh <a href="https://mayicu.id" class="text-green">Mayicu</a>.</strong> All rights reserved.
</footer>
</div>


<script src="<?= base_url('AdminLTE')?>/plugins/jquery/jquery.min.js"></script>

<script src="<?= base_url('AdminLTE')?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
