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
$txt['simplesef_desc'] = 'Bu bölüm BasitSEF için seçeneklerini düzenleme olanağı sağlar.<br /><br />
<strong>Not: Eğer aktive ettikten sonra 404 hataları alıyorsanız, bunun sebebi .htaccess veya web.config yaratılmamıştır, ya da hostinginiz mod_rewrite veya Microsoft Url Rewrite modülü yüklü değildir ki bu yüzden eklentiyi kullanamazsınız.</strong> [<a href="#" onclick="showSimpleSEFHelp(); return false;">Yardım</a>]
<span style="display:block;" id="simplesef_help">Eğer Apache webserverınız varsa, veya .htaccess ile mod_rewrite fonksiyonunu kullanan bir başka şey, SMF dizininde .htaccess dosyası olucaktır:
<span style="display:block;" class="codeheader">Kod:</span>
<code>RewriteEngine On<br />RewriteCond %{REQUEST_FILENAME} !-f<br />RewriteCond %{REQUEST_FILENAME} !-d<br />RewriteRule (.*) index.php</code>
<br />
Eğer IIS7 webserver varsa, SMF dizininde yer alan web.config dosyasına ihtiyacınız olucaktır:
<span style="display:block;" class="codeheader">Kod:</span>
<code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;<br />&lt;configuration&gt;<br />    &lt;system.webServer&gt;<br />        &lt;rewrite&gt;<br />            &lt;rules&gt;<br />                &lt;rule name=&quot;SimpleSEF&quot;&gt;<br />                    &lt;match url=&quot;(.*)&quot; ignoreCase=&quot;false&quot; /&gt;<br />                    &lt;conditions logicalGrouping=&quot;MatchAll&quot;&gt;<br />                        &lt;add input=&quot;{REQUEST_FILENAME}&quot; matchType=&quot;IsFile&quot; negate=&quot;true&quot; pattern=&quot;&quot; ignoreCase=&quot;false&quot; /&gt;<br />                        &lt;add input=&quot;{REQUEST_FILENAME}&quot; matchType=&quot;IsDirectory&quot; negate=&quot;true&quot; pattern=&quot;&quot; ignoreCase=&quot;false&quot; /&gt;<br />                    &lt;/conditions&gt;<br />                    &lt;action type=&quot;Rewrite&quot; url=&quot;index.php&quot; /&gt;<br />                &lt;/rule&gt;<br />            &lt;/rules&gt;<br />        &lt;/rewrite&gt;<br />    &lt;/system.webServer&gt;<br />&lt;/configuration&gt;</code>
<br />
Eğer Lighttpd v1.4.23 veya önceki sürümü varsa, Lighttpd ayar dosyasına ihtiyacınız olucaktır, normalde bölümü /etc/lighttpd/lighttpd.conf (<a href="http://www.simplemachines.org/community/index.php?action=profile;u=9547">Daniel15</a> teşekkürler).
<code>$HTTP[&quot;host&quot;] =~ &quot;(www.)?example.com&quot; {<br />   url.rewrite-once += (<br />      # Allow all normal files<br />      &quot;^/forum/.*\.(js|ico|gif|jpg|png|swf|css|htm|php)(\?.*)?$&quot; =&gt; &quot;$0&quot;,<br />      # Rewrite everything else<br />      &quot;^/forum/.*$&quot; =&gt; &quot;/smf_2-0-rc2_sqlite/index.php&quot;<br />   )<br />}</code>
</span>
<script type="text/javascript"><!-- // --><!' . '[CDATA[
document.getElementById("simplesef_help").style.display = "none";
function showSimpleSEFHelp()
{
   document.getElementById("simplesef_help").style.display = "block";
}
// ]]' . '></script>';
$txt['simplesef_enable'] = 'BasitSEF\'i Etkinleştir';
$txt['simplesef_enable_desc'] = 'mod_rewrite desteği veya Url Rewrite/web.config (IIS7) desteği gerektirir.';
$txt['simplesef_simple'] = 'Basit Linkler Oluştur';
$txt['simplesef_simple_desc'] = 'Linklerde içerik yerine /forum/board-1/ veya /forum/topic-3.html gibi görünür.';
$txt['simplesef_space'] = 'Boşluk';
$txt['simplesef_space_desc'] = 'Linklerde boşluk yerine karakter. Genellikle _ veya -.';
$txt['simplesef_suffix'] = 'Konu Uzantısı';
$txt['simplesef_suffix_desc'] = 'Konularda Link uzantısı kullan (yani: html, php).';
$txt['simplesef_suffix_required'] = 'Bir uzantı gereklidir';
$txt['simplesef_strip_words'] = 'Kelimeleri çıkar';
$txt['simplesef_strip_words_desc'] = 'Bu kelimeler urllerin dışında tutulacaktır.  Böylece kısa ama anlaşılır urller oluşturulacaktır.  Sözcükleri virgülle ayırarak yazın. (Boşluksuz).';
$txt['simplesef_strip_chars'] = 'Karakterleri çıkar';
$txt['simplesef_strip_chars_desc'] = 'Bu karakterler urllerin dışında tutulacaktır.  Böylece kısa ve kullanışlı urller oluşturulacaktır.  Karakterleri virgülle ayırarar yazın(Boşluksuz).';
$txt['simplesef_lowercase'] = 'Küçük harfli Linkler';
$txt['simplesef_lowercase_desc'] = 'Bu seçeneği tüm linkleri küçük harfli linklere dönüştürmek için kullanın.';
$txt['simplesef_action_title'] = 'Eylemler, AltEylemler ve Alanlar';
$txt['simplesef_action_desc'] = 'Bunlar tüm eylemler(?action=blabla) alt  eylemler (;blablabla) ve yönetim paneli içindir. Normalde bu listeyi düzenlemeniz gerekmez. Eğer bu listeyi düzenlerseniz, bu bazı fonksiyonların geçici olarak çalışmamasına neden olur. Bunlar sadece bişeyler yanlış giderse düzenlenmelidir. <a href="#" onclick="return editAreas();">Düzenle</a>]';
$txt['simplesef_actions'] = 'Eylemler';
$txt['simplesef_subactions'] = 'AltEylemler';
$txt['simplesef_areas'] = 'Alanlar';
$txt['simplesef_adds'] = '<a href="http://www.mattzuba.com">BasitSEF</a>'; 
$txt['simplesef_useractions'] = 'Kullanıcı İşlemleri';
$txt['simplesef_404'] = 'İstediğiniz sayfa bulunamadı. Eğer bu sayfada bir hata oluştuğunu düşünüyorsanız site yöneticisine başvurun.';
$txt['simplesef_advanced'] = 'Gelişmiş Seçenekler';


$txt['simplesef_advanced_desc'] = 'Enable action aliasing, action ignoring and other advanced options.';
$txt['simplesef_alias'] = 'Action Aliasing';
$txt['simplesef_alias_desc'] = 'Action Aliasing your actions allows you to change the name of an action without adversly affecting your board.  For example, a Spanish language community may have a portal installed and will want to change the \'forum\' action to \'foro\'.  This section makes it possible.  Each action can only have <strong>one</strong> alias and if you create an alias that is already an action, the action will take precedence, not the alias.';
$txt['simplesef_alias_clickadd'] = 'Add another alias';
$txt['simplesef_alias_detail'] = 'Enter the original action on the left, and what to change it to on the right';
$txt['simplesef_ignore'] = 'Ignore Actions';
$txt['simplesef_ignore_desc'] = 'Move actions you want to ignore to the box on the right';
$txt['simplesef_debug'] = 'Hata ayıklama modunu etkinleştirin';
$txt['simplesef_debug_desc'] = 'This option will enable debugging on your board.  This does not output any specific information to the screen, but will rapidly fill up your error log with debugging statements from SimpleSEF.  This should really only be used if the author requests it when seeking support';