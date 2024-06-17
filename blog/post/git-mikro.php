<?php
$title = "Git mikro";
$author = 'android';
$content = '<p class="lead">Više puta sam dobio pitanje <em>„Kako početi sa Git-om?“</em>, pa zato pišem ovaj tutorijal. Potreban vam je <strong>GitHub nalog</strong>. povezan sa nalogom. <a href="https://help.github.com">help.github.com</a> može pomoći u većini slučajeva, ako imate problem.</p>
<p>Ime i e-mail treba da se podudaraju sa podacima na GitHub-u.</p>
<pre>
$ git config --global user.name "Ime"
$ git config --global user.email "adresa@mail.server"
</pre>
<p>Autentifikacija je HTTPS i koristi vašu GitHub lozinku. Ona će nam poslužiti za kloniranje repozitorijuma.</p>
<pre>$ git clone https://github.com/&lt;korisnik&gt;/&lt;repozitorijum&gt;.git</pre>
<p>Sada sve zavisi od toga da li ste klonirali prazan ili „popunjen“ repozitorijum. Ukoliko repozitorijum već ima sadržaj, zaobiđite ovaj paragraf <strong>:)</strong>. Ukoliko je prazan, izvršite sledeće komande:
<pre>
$ git init
$ git remote add origin https://github.com/&lt;korisnik&gt;/&lt;repozitorijum&gt;.git
</pre>
<p>Sada ste slobodni da (pre)uredite sadržaj. Nakon toga pokrenite <code>git add -A</code> kako biste dodali sve izmene u naredni komit (engl. commit). Možete i dodati datoteke/direktorijume ručno.</p>
<div class="alert alert-info">Git zahteva kosu crtu (<strong><code>/</code></strong>) iza naziva direktorijuma. Dakle, nije <code>test</code> nego <code>test/</code>.</div>
<p>Nakon toga jednostavno komitujte i objavite kod. <code>&lt;branch&gt;</code> je ugl. <code>master</code> (izvorni kod) ili <code>gh-pages</code> (web stranica).</p>
<pre>
$ git commit -m "Šta je promenjeno"
$ git push origin &lt;branch&gt;
</pre>';
include_once "../post.php";
?>
