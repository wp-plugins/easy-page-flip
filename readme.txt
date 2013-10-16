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

Portugu�s

== Description ==

Easy Page Flip &eacute; um plugin que voc� pode fazer uma Revista Virtual em poucos cliques.

== Installation ==

= Instala��o do plugin: =

* Envie os arquivos do plugin para a pasta wp-content/plugins, ou instale usando o instalador de plugins do WordPress;
* Ative o plugin;

= Como usar: =

* Depois de ativo ir� aparecer uma aba chamada "Revistas", clique em "Adicionar Nova Revista" e adicione o t�tulo desejado;

* Para adicionar a Galeria clique em "Adicionar M�dia -> Criar Galeria";

* Selecione as imagens desejadas e clique em "Criar um nova galeria";

* Configure se voc� desejar que abra a imagem ou n�o;
* Se voc�s optarem para que abra a imagem, ent�o voc�s teram que ter um plugin instalado de LightBox para que a exibi��o funcione corretamente.

* Para adicionar a listagem das registas ter� que adicionar o seguinte c�digo: 
* &lt;?php if (function_exists("chr_pageflip_list")) { chr_pageflip_list(); }&gt;

* De padr�o ele vem com a listagem de 10 posts e na ordem DESC e a imagem com o tamanho padr�o thumbnail, mas para alteram esses padr�es � preciso adicionar da seguinte maneira:
* &lt;?php if (function_exists("chr_pageflip_list")) { chr_pageflip_list(5, 'ASC', 'custom-image-size'); }?&gt;
* Se o plugin "WP-PageNavi" estiver ativo ele usar� o mesmo para o sistema de pagina��o se o mesmo n�o estiver instalado, automaticamente criar� uma pagina��o personalizada.

* Para a p�gina de visualiza��o da revista ter� que adiconar o seguite c�digo: 
* &lt;?php if (function_exists("chr_pageflip_single")) { chr_pageflip_single(); }?&gt;

* Para criar uma single personalizada crie um arquivo chamdado: single-pageflip.php e depois v� at� "Configura��es -> Links Permanentes" e atualize o seu .htaccess.

== Frequently Asked Questions ==

= 
Qual � a licen�a do plugin? 
=

Este plugin esta licenciado como GPL.


= O que eu preciso para utilizar este plugin? =

* Possuir instalada qualquer vers�o do WordPress.

== Screenshots ==

1. Aba Revistas
2. P�gina de cadastro do PageFlip
3. C�digo de listagem das Revistas
4. C�digo de gera��o da Revista na Single

== Changelog ==

= 1.0.0 =

* Vers�o incial do plugin.

== Upgrade Notice ==

= 1.0.0 =

* Enjoy it.

== License ==

Easy Page Flip is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

Easy Page Flip is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with CodexFree. If not, see <http://www.gnu.org/licenses/>.