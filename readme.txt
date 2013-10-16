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

Português

== Description ==

Easy Page Flip &eacute; um plugin que você pode fazer uma Revista Virtual em poucos cliques.

== Installation ==

= Instalação do plugin: =

* Envie os arquivos do plugin para a pasta wp-content/plugins, ou instale usando o instalador de plugins do WordPress;
* Ative o plugin;

= Como usar: =

* Depois de ativo irá aparecer uma aba chamada "Revistas", clique em "Adicionar Nova Revista" e adicione o título desejado;

* Para adicionar a Galeria clique em "Adicionar Mídia -> Criar Galeria";

* Selecione as imagens desejadas e clique em "Criar um nova galeria";

* Configure se você desejar que abra a imagem ou não;
* Se vocês optarem para que abra a imagem, então vocês teram que ter um plugin instalado de LightBox para que a exibição funcione corretamente.

* Para adicionar a listagem das registas terá que adicionar o seguinte código: 
* &lt;?php if (function_exists("chr_pageflip_list")) { chr_pageflip_list(); }&gt;

* De padrão ele vem com a listagem de 10 posts e na ordem DESC e a imagem com o tamanho padrão thumbnail, mas para alteram esses padrões é preciso adicionar da seguinte maneira:
* &lt;?php if (function_exists("chr_pageflip_list")) { chr_pageflip_list(5, 'ASC', 'custom-image-size'); }?&gt;
* Se o plugin "WP-PageNavi" estiver ativo ele usará o mesmo para o sistema de paginação se o mesmo não estiver instalado, automaticamente criará uma paginação personalizada.

* Para a página de visualização da revista terá que adiconar o seguite código: 
* &lt;?php if (function_exists("chr_pageflip_single")) { chr_pageflip_single(); }?&gt;

* Para criar uma single personalizada crie um arquivo chamdado: single-pageflip.php e depois vá até "Configurações -> Links Permanentes" e atualize o seu .htaccess.

== Frequently Asked Questions ==

= 
Qual é a licença do plugin? 
=

Este plugin esta licenciado como GPL.


= O que eu preciso para utilizar este plugin? =

* Possuir instalada qualquer versão do WordPress.

== Screenshots ==

1. Aba Revistas
2. Página de cadastro do PageFlip
3. Código de listagem das Revistas
4. Código de geração da Revista na Single

== Changelog ==

= 1.0.0 =

* Versão incial do plugin.

== Upgrade Notice ==

= 1.0.0 =

* Enjoy it.

== License ==

Easy Page Flip is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

Easy Page Flip is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with CodexFree. If not, see <http://www.gnu.org/licenses/>.