<?php
/* ***** BEGIN LICENSE BLOCK *****
 * Version: MPL 1.1
 *
 * The contents of this file are subject to the Mozilla Public License Version
 * 1.1 (the "License"); you may not use this file except in compliance with
 * the License. You may obtain a copy of the License at
 * http://www.mozilla.org/MPL/
 *
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
 * for the specific language governing rights and limitations under the
 * License.
 *
 * The Original Code is http://code.mattzuba.com code.
 *
 * The Initial Developer of the Original Code is
 * Matt Zuba.
 * Portions created by the Initial Developer are Copyright (C) 2010-2011
 * the Initial Developer. All Rights Reserved.
 *
 * Contributor(s):
 *
 * ***** END LICENSE BLOCK ***** */

 $txt['simplesef'] = 'BasitSEF';
$txt['simplesef_desc'] = 'Bu bölüm BasitSEF için seçeneklerini düzenleme olanaðý saðlar.<br /><br />
<strong>Not: Eðer aktive ettikten sonra 404 hatalarý alýyorsanýz, bunun sebebi .htaccess veya web.config yaratýlmamýþtýr, ya da hostinginiz mod_rewrite veya Microsoft Url Rewrite modülü yüklü deðildir ki bu yüzden eklentiyi kullanamazsýnýz.</strong> [<a href="#" onclick="showSimpleSEFHelp(); return false;">Yardým</a>]
<span style="display:block;" id="simplesef_help">Eðer Apache webserverýnýz varsa, veya .htaccess ile mod_rewrite fonksiyonunu kullanan bir baþka þey, SMF dizininde .htaccess dosyasý olucaktýr:
<span style="display:block;" class="codeheader">Kod:</span>
<code>RewriteEngine On<br />RewriteCond %{REQUEST_FILENAME} !-f<br />RewriteCond %{REQUEST_FILENAME} !-d<br />RewriteRule (.*) index.php</code>
<br />
Eðer IIS7 webserver varsa, SMF dizininde yer alan web.config dosyasýna ihtiyacýnýz olucaktýr:
<span style="display:block;" class="codeheader">Kod:</span>
<code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;<br />&lt;configuration&gt;<br />    &lt;system.webServer&gt;<br />        &lt;rewrite&gt;<br />            &lt;rules&gt;<br />                &lt;rule name=&quot;SimpleSEF&quot;&gt;<br />                    &lt;match url=&quot;(.*)&quot; ignoreCase=&quot;false&quot; /&gt;<br />                    &lt;conditions logicalGrouping=&quot;MatchAll&quot;&gt;<br />                        &lt;add input=&quot;{REQUEST_FILENAME}&quot; matchType=&quot;IsFile&quot; negate=&quot;true&quot; pattern=&quot;&quot; ignoreCase=&quot;false&quot; /&gt;<br />                        &lt;add input=&quot;{REQUEST_FILENAME}&quot; matchType=&quot;IsDirectory&quot; negate=&quot;true&quot; pattern=&quot;&quot; ignoreCase=&quot;false&quot; /&gt;<br />                    &lt;/conditions&gt;<br />                    &lt;action type=&quot;Rewrite&quot; url=&quot;index.php&quot; /&gt;<br />                &lt;/rule&gt;<br />            &lt;/rules&gt;<br />        &lt;/rewrite&gt;<br />    &lt;/system.webServer&gt;<br />&lt;/configuration&gt;</code>
<br />
Eðer Lighttpd v1.4.23 veya önceki sürümü varsa, Lighttpd ayar dosyasýna ihtiyacýnýz olucaktýr, normalde bölümü /etc/lighttpd/lighttpd.conf (<a href="http://www.simplemachines.org/community/index.php?action=profile;u=9547">Daniel15</a> teþekkürler).
<code>$HTTP[&quot;host&quot;] =~ &quot;(www.)?example.com&quot; {<br />   url.rewrite-once += (<br />      # Allow all normal files<br />      &quot;^/forum/.*\.(js|ico|gif|jpg|png|swf|css|htm|php)(\?.*)?$&quot; =&gt; &quot;$0&quot;,<br />      # Rewrite everything else<br />      &quot;^/forum/.*$&quot; =&gt; &quot;/smf_2-0-rc2_sqlite/index.php&quot;<br />   )<br />}</code>
</span>
<script type="text/javascript"><!-- // --><!' . '[CDATA[
document.getElementById("simplesef_help").style.display = "none";
function showSimpleSEFHelp()
{
   document.getElementById("simplesef_help").style.display = "block";
}
// ]]' . '></script>';
$txt['simplesef_enable'] = 'BasitSEF\'i Etkinleþtir';
$txt['simplesef_enable_desc'] = 'mod_rewrite desteði veya Url Rewrite/web.config (IIS7) desteði gerektirir.';
$txt['simplesef_simple'] = 'Basit Linkler Oluþtur';
$txt['simplesef_simple_desc'] = 'Linklerde içerik yerine /forum/board-1/ veya /forum/topic-3.html gibi görünür.';
$txt['simplesef_space'] = 'Boþluk';
$txt['simplesef_space_desc'] = 'Linklerde boþluk yerine karakter. Genellikle _ veya -.';
$txt['simplesef_suffix'] = 'Konu Uzantýsý';
$txt['simplesef_suffix_desc'] = 'Konularda Link uzantýsý kullan (yani: html, php).';
$txt['simplesef_suffix_required'] = 'Bir uzantý gereklidir';
$txt['simplesef_strip_words'] = 'Kelimeleri çýkar';
$txt['simplesef_strip_words_desc'] = 'Bu kelimeler urllerin dýþýnda tutulacaktýr.  Böylece kýsa ama anlaþýlýr urller oluþturulacaktýr.  Sözcükleri virgülle ayýrarak yazýn. (Boþluksuz).';
$txt['simplesef_strip_chars'] = 'Karakterleri çýkar';
$txt['simplesef_strip_chars_desc'] = 'Bu karakterler urllerin dýþýnda tutulacaktýr.  Böylece kýsa ve kullanýþlý urller oluþturulacaktýr.  Karakterleri virgülle ayýrarar yazýn(Boþluksuz).';
$txt['simplesef_lowercase'] = 'Küçük harfli Linkler';
$txt['simplesef_lowercase_desc'] = 'Bu seçeneði tüm linkleri küçük harfli linklere dönüþtürmek için kullanýn.';
$txt['simplesef_action_title'] = 'Eylemler, AltEylemler ve Alanlar';
$txt['simplesef_action_desc'] = 'Bunlar tüm eylemler(?action=blabla) alt  eylemler (;blablabla) ve yönetim paneli içindir. Normalde bu listeyi düzenlemeniz gerekmez. Eðer bu listeyi düzenlerseniz, bu bazý fonksiyonlarýn geçici olarak çalýþmamasýna neden olur. Bunlar sadece biþeyler yanlýþ giderse düzenlenmelidir. <a href="#" onclick="return editAreas();">Düzenle</a>]';
$txt['simplesef_actions'] = 'Eylemler';
$txt['simplesef_subactions'] = 'AltEylemler';
$txt['simplesef_areas'] = 'Alanlar';
$txt['simplesef_adds'] = '<a href="http://www.mattzuba.com">BasitSEF</a>'; 
$txt['simplesef_useractions'] = 'Kullanýcý Ýþlemleri';
$txt['simplesef_404'] = 'Ýstediðiniz sayfa bulunamadý. Eðer bu sayfada bir hata oluþtuðunu düþünüyorsanýz site yöneticisine baþvurun.';
$txt['simplesef_advanced'] = 'Geliþmiþ Seçenekler';


$txt['simplesef_advanced_desc'] = 'Enable action aliasing, action ignoring and other advanced options.';
$txt['simplesef_alias'] = 'Action Aliasing';
$txt['simplesef_alias_desc'] = 'Action Aliasing your actions allows you to change the name of an action without adversly affecting your board.  For example, a Spanish language community may have a portal installed and will want to change the \'forum\' action to \'foro\'.  This section makes it possible.  Each action can only have <strong>one</strong> alias and if you create an alias that is already an action, the action will take precedence, not the alias.';
$txt['simplesef_alias_clickadd'] = 'Add another alias';
$txt['simplesef_alias_detail'] = 'Enter the original action on the left, and what to change it to on the right';
$txt['simplesef_ignore'] = 'Ignore Actions';
$txt['simplesef_ignore_desc'] = 'Move actions you want to ignore to the box on the right';
$txt['simplesef_debug'] = 'Hata ayýklama modunu etkinleþtirin';
$txt['simplesef_debug_desc'] = 'This option will enable debugging on your board.  This does not output any specific information to the screen, but will rapidly fill up your error log with debugging statements from SimpleSEF.  This should really only be used if the author requests it when seeking support';