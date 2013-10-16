=== Easy Page Flip ===

Contributors: chrdesigner
Donate link: 
Tags: pageflip, easy, list pageflip, show pageflip

Requires at least: 3.0

Tested up to: 3.6.1

Stable tag: 1.0.1
License: GPLv2 or later

License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Localizations ==

Portugu&ecirc;s

== Description ==

Easy Page Flip &eacute; um plugin que voc&ecirc; pode fazer uma Revista Virtual em poucos cliques.

== Installation ==

= Instala&ccedil;&atilde;o do plugin: =

* Envie os arquivos do plugin para a pasta wp-content/plugins, ou instale usando o instalador de plugins do WordPress;
* Ative o plugin;

= Como usar: =

* Depois de ativo ir&aacute; aparecer uma aba chamada "Revistas", clique em "Adicionar Nova Revista" e adicione o t&iacute;tulo desejado;

* Para adicionar a Galeria clique em "Adicionar M&iacute;dia -> Criar Galeria";

* Selecione as imagens desejadas e clique em "Criar um nova galeria";

* Configure se voc&ecirc; desejar que abra a imagem ou n&atilde;o;
* Se voc&ecirc;s optarem para que abra a imagem, ent&atilde;o voc&ecirc;s teram que ter um plugin instalado de LightBox para que a exibi&ccedil;&atilde;o funcione corretamente.

* Para adicionar a listagem das registas ter&aacute; que adicionar o seguinte c&oacute;digo: 
* &lt;?php if (function_exists("chr_pageflip_list")) { chr_pageflip_list(); }&gt;

* De padr&atilde;o ele vem com a listagem de 10 posts e na ordem DESC e a imagem com o tamanho padr&atilde;o thumbnail, mas para alteram esses padrões &eacute; preciso adicionar da seguinte maneira:
* &lt;?php if (function_exists("chr_pageflip_list")) { chr_pageflip_list(5, 'ASC', 'custom-image-size'); }?&gt;
* Se o plugin "WP-PageNavi" estiver ativo ele usar&aacute; o mesmo para o sistema de pagina&ccedil;&atilde;o se o mesmo n&atilde;o estiver instalado, automaticamente criar&aacute; uma pagina&ccedil;&atilde;o personalizada.

* Para a p&aacute;gina de visualiza&ccedil;&atilde;o da revista ter&aacute; que adiconar o seguite c&oacute;digo: 
* &lt;?php if (function_exists("chr_pageflip_single")) { chr_pageflip_single(); }?&gt;

* Para criar uma single personalizada crie um arquivo chamdado: single-pageflip.php e depois v&aacute; at&eacute; "Configura&ccedil;ões -> Links Permanentes" e atualize o seu .htaccess.

== Frequently Asked Questions ==

= 
Qual &eacute; a licen&ccedil;a do plugin? 
=

Este plugin esta licenciado como GPL.


= O que eu preciso para utilizar este plugin? =

* Possuir instalada qualquer vers&atilde;o do WordPress.

== Screenshots ==

1. Aba Revistas
2. P&aacute;gina de cadastro do PageFlip
3. C&oacute;digo de listagem das Revistas
4. C&oacute;digo de gera&ccedil;&atilde;o da Revista na Single

== Changelog ==

= 1.0.0 =

* Vers&atilde;o incial do plugin.

== Upgrade Notice ==

= 1.0.0 =

* Enjoy it.

== License ==

Easy Page Flip is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

Easy Page Flip is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with CodexFree. If not, see <http://www.gnu.org/licenses/>.