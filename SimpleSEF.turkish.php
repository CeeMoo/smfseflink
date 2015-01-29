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
$txt['simplesef_desc'] = 'Bu b�l�m BasitSEF i�in se�eneklerini d�zenleme olana�� sa�lar.<br /><br />
<strong>Not: E�er aktive ettikten sonra 404 hatalar� al�yorsan�z, bunun sebebi .htaccess veya web.config yarat�lmam��t�r, ya da hostinginiz mod_rewrite veya Microsoft Url Rewrite mod�l� y�kl� de�ildir ki bu y�zden eklentiyi kullanamazs�n�z.</strong> [<a href="#" onclick="showSimpleSEFHelp(); return false;">Yard�m</a>]
<span style="display:block;" id="simplesef_help">E�er Apache webserver�n�z varsa, veya .htaccess ile mod_rewrite fonksiyonunu kullanan bir ba�ka �ey, SMF dizininde .htaccess dosyas� olucakt�r:
<span style="display:block;" class="codeheader">Kod:</span>
<code>RewriteEngine On<br />RewriteCond %{REQUEST_FILENAME} !-f<br />RewriteCond %{REQUEST_FILENAME} !-d<br />RewriteRule (.*) index.php</code>
<br />
E�er IIS7 webserver varsa, SMF dizininde yer alan web.config dosyas�na ihtiyac�n�z olucakt�r:
<span style="display:block;" class="codeheader">Kod:</span>
<code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;<br />&lt;configuration&gt;<br />    &lt;system.webServer&gt;<br />        &lt;rewrite&gt;<br />            &lt;rules&gt;<br />                &lt;rule name=&quot;SimpleSEF&quot;&gt;<br />                    &lt;match url=&quot;(.*)&quot; ignoreCase=&quot;false&quot; /&gt;<br />                    &lt;conditions logicalGrouping=&quot;MatchAll&quot;&gt;<br />                        &lt;add input=&quot;{REQUEST_FILENAME}&quot; matchType=&quot;IsFile&quot; negate=&quot;true&quot; pattern=&quot;&quot; ignoreCase=&quot;false&quot; /&gt;<br />                        &lt;add input=&quot;{REQUEST_FILENAME}&quot; matchType=&quot;IsDirectory&quot; negate=&quot;true&quot; pattern=&quot;&quot; ignoreCase=&quot;false&quot; /&gt;<br />                    &lt;/conditions&gt;<br />                    &lt;action type=&quot;Rewrite&quot; url=&quot;index.php&quot; /&gt;<br />                &lt;/rule&gt;<br />            &lt;/rules&gt;<br />        &lt;/rewrite&gt;<br />    &lt;/system.webServer&gt;<br />&lt;/configuration&gt;</code>
<br />
E�er Lighttpd v1.4.23 veya �nceki s�r�m� varsa, Lighttpd ayar dosyas�na ihtiyac�n�z olucakt�r, normalde b�l�m� /etc/lighttpd/lighttpd.conf (<a href="http://www.simplemachines.org/community/index.php?action=profile;u=9547">Daniel15</a> te�ekk�rler).
<code>$HTTP[&quot;host&quot;] =~ &quot;(www.)?example.com&quot; {<br />   url.rewrite-once += (<br />      # Allow all normal files<br />      &quot;^/forum/.*\.(js|ico|gif|jpg|png|swf|css|htm|php)(\?.*)?$&quot; =&gt; &quot;$0&quot;,<br />      # Rewrite everything else<br />      &quot;^/forum/.*$&quot; =&gt; &quot;/smf_2-0-rc2_sqlite/index.php&quot;<br />   )<br />}</code>
</span>
<script type="text/javascript"><!-- // --><!' . '[CDATA[
document.getElementById("simplesef_help").style.display = "none";
function showSimpleSEFHelp()
{
   document.getElementById("simplesef_help").style.display = "block";
}
// ]]' . '></script>';
$txt['simplesef_enable'] = 'BasitSEF\'i Etkinle�tir';
$txt['simplesef_enable_desc'] = 'mod_rewrite deste�i veya Url Rewrite/web.config (IIS7) deste�i gerektirir.';
$txt['simplesef_simple'] = 'Basit Linkler Olu�tur';
$txt['simplesef_simple_desc'] = 'Linklerde i�erik yerine /forum/board-1/ veya /forum/topic-3.html gibi g�r�n�r.';
$txt['simplesef_space'] = 'Bo�luk';
$txt['simplesef_space_desc'] = 'Linklerde bo�luk yerine karakter. Genellikle _ veya -.';
$txt['simplesef_suffix'] = 'Konu Uzant�s�';
$txt['simplesef_suffix_desc'] = 'Konularda Link uzant�s� kullan (yani: html, php).';
$txt['simplesef_suffix_required'] = 'Bir uzant� gereklidir';
$txt['simplesef_strip_words'] = 'Kelimeleri ��kar';
$txt['simplesef_strip_words_desc'] = 'Bu kelimeler urllerin d���nda tutulacakt�r.  B�ylece k�sa ama anla��l�r urller olu�turulacakt�r.  S�zc�kleri virg�lle ay�rarak yaz�n. (Bo�luksuz).';
$txt['simplesef_strip_chars'] = 'Karakterleri ��kar';
$txt['simplesef_strip_chars_desc'] = 'Bu karakterler urllerin d���nda tutulacakt�r.  B�ylece k�sa ve kullan��l� urller olu�turulacakt�r.  Karakterleri virg�lle ay�rarar yaz�n(Bo�luksuz).';
$txt['simplesef_lowercase'] = 'K���k harfli Linkler';
$txt['simplesef_lowercase_desc'] = 'Bu se�ene�i t�m linkleri k���k harfli linklere d�n��t�rmek i�in kullan�n.';
$txt['simplesef_action_title'] = 'Eylemler, AltEylemler ve Alanlar';
$txt['simplesef_action_desc'] = 'Bunlar t�m eylemler(?action=blabla) alt  eylemler (;blablabla) ve y�netim paneli i�indir. Normalde bu listeyi d�zenlemeniz gerekmez. E�er bu listeyi d�zenlerseniz, bu baz� fonksiyonlar�n ge�ici olarak �al��mamas�na neden olur. Bunlar sadece bi�eyler yanl�� giderse d�zenlenmelidir. <a href="#" onclick="return editAreas();">D�zenle</a>]';
$txt['simplesef_actions'] = 'Eylemler';
$txt['simplesef_subactions'] = 'AltEylemler';
$txt['simplesef_areas'] = 'Alanlar';
$txt['simplesef_adds'] = '<a href="http://www.mattzuba.com">BasitSEF</a>'; 
$txt['simplesef_useractions'] = 'Kullan�c� ��lemleri';
$txt['simplesef_404'] = '�stedi�iniz sayfa bulunamad�. E�er bu sayfada bir hata olu�tu�unu d���n�yorsan�z site y�neticisine ba�vurun.';
$txt['simplesef_advanced'] = 'Geli�mi� Se�enekler';


$txt['simplesef_advanced_desc'] = 'Enable action aliasing, action ignoring and other advanced options.';
$txt['simplesef_alias'] = 'Action Aliasing';
$txt['simplesef_alias_desc'] = 'Action Aliasing your actions allows you to change the name of an action without adversly affecting your board.  For example, a Spanish language community may have a portal installed and will want to change the \'forum\' action to \'foro\'.  This section makes it possible.  Each action can only have <strong>one</strong> alias and if you create an alias that is already an action, the action will take precedence, not the alias.';
$txt['simplesef_alias_clickadd'] = 'Add another alias';
$txt['simplesef_alias_detail'] = 'Enter the original action on the left, and what to change it to on the right';
$txt['simplesef_ignore'] = 'Ignore Actions';
$txt['simplesef_ignore_desc'] = 'Move actions you want to ignore to the box on the right';
$txt['simplesef_debug'] = 'Hata ay�klama modunu etkinle�tirin';
$txt['simplesef_debug_desc'] = 'This option will enable debugging on your board.  This does not output any specific information to the screen, but will rapidly fill up your error log with debugging statements from SimpleSEF.  This should really only be used if the author requests it when seeking support';