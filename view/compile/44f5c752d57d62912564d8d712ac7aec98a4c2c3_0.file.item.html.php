<?php
/* Smarty version 4.2.1, created on 2022-10-06 07:06:32
  from 'C:\xampp\htdocs\driveway\view\item.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633e6258d6d680_64529128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44f5c752d57d62912564d8d712ac7aec98a4c2c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\driveway\\view\\item.html',
      1 => 1665032765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633e6258d6d680_64529128 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <?php echo '<script'; ?>
 src='./js/jquery-1.8.3.min.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src='./js/jquery.elevateZoom-2.2.3.min.js'><?php echo '</script'; ?>
>
        
        <title></title>
    </head>
    <body>
        
        <div id="container">
            <div class="header">
                <div class="topo_header">
                    <a href="#"><img class="logo" src="./media/imagens/logo v2 v2.png"> </a>
                    <a href="#"><img class="icon" src="./media/imagens/user-profile-icon.svg"> </a>
                </div>
                
                <div class="menucategorias">
                    <div class="menu_headerItem">
                        <table>
                            <tr>
                                <td> Tênis</td>
                                <td class="linha_vertical">	</td>
                                <td> Roupas</td>
                                <td class="linha_vertical">	</td>
                                <td> Acessórios</td>
                            </tr>	
                        </table>
                    </div>
                </div>
    
            <div class="caixaItem">
                    
                <div class="imagensTenis">
                    <img class="imagemPrincipal" src="./media/imagens/tenis1.webp">
                        <div class="outrasImagens">
                            <img id="imagemOutra1" class="imagemSelecionada" src="./media/imagens/tenis1.webp">
                            <img id="imagemOutra2" src="./media/imagens/tenis2.webp">
                            <img id="imagemOutra3" src="./media/imagens/tenis3.webp">
                        </div>
                </div>

                <?php echo '<script'; ?>
>
                    
                    document.querySelector('.outrasImagens').addEventListener('click', function(a){
                        
                        if(document.getElementsByClassName('imagemSelecionada').length > 0){
                            for(var z = 0; z = document.getElementsByClassName('imagemSelecionada').length; z++){
                                document.querySelector('.imagemSelecionada').classList.remove('imagemSelecionada');
                            }                           
                        }

                        document.getElementById(a.target.id).classList.add('imagemSelecionada');
                        document.querySelector('.imagemPrincipal').src = document.getElementById(a.target.id).src;
                    })
                <?php echo '</script'; ?>
>

                <div class="infoItem">
                    <span class="tituloTenisItem">Tenis Beje</span>

                         <div class="tamanhos">
                            <button id="32" class="botaoTamanho" type="button"> 32</button> 
                            <button id="37" class="botaoTamanho" type="button"> 37</button> 
                            <button id="38" class="botaoTamanho" type="button"> 38</button>
                         </div>

                         <?php echo '<script'; ?>
 type="text/javascript">
                            document.querySelector(".tamanhos").addEventListener('click',function(e){

                                   if(document.getElementsByClassName('tamanhoSelecionado').length > 0){

                                        for(var i = 0; i = document.getElementsByClassName('tamanhoSelecionado').length; i++ ){
                                        document.querySelector(".tamanhoSelecionado").classList.remove("tamanhoSelecionado");  
                                    }

                                   }
                                    document.getElementById(e.target.id).classList.add("tamanhoSelecionado");
                        
                                
                                                        })
                        
                    <?php echo '</script'; ?>
>

                    <p class="valorItem">R$ 130,00</p>
                    <p class="parcelaItem">Ou em 10x de R$ 13,00</p>  

                    <div class="d-flex justify-content-center col-12 mt-4">
                    <button class="comprar"> comprar </button>
                    </div>
                </div> 
            </div>




        </div>

        <?php echo '<script'; ?>
>
            function zoom(element, type, custors) {
            element.elevateZoom({
                zoomType: type,
                cursor: custors
            });
        }
        zoom($('.imagemPrincipal'), "inner", "cursor");
    <?php echo '</script'; ?>
>

    </body>
    </html><?php }
}
