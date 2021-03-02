<?php
foreach ($dados as $dado) {
    
}
?>

<h1 class="text-center">Contato</h1>

<div class="form w-75 h-50 mx-auto">
    <div id="cor-de-input-preto">

        <div class="form-group">
            <span class="reg-user"></span>                                        
            <input type="text" class="form-control" autofocus="" id="exampleFormControlInput1" value="<?php echo $dado['nomecompleto']; ?>" disabled="">
        </div>

        <div class="form-group  ">
            <span class="reg-user"></span>                                        
            <input type="text" class="form-control" autofocus="" id="exampleFormControlInput1" value="<?php echo $dado['email']; ?>" disabled="">
        </div>

        <div class="form-group">
            <span class="reg-user"></span>                                          
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" disabled=""><?php echo $dado['mensagem']; ?></textarea>
        </div>

        <a href="?pg=painel-contato"><button type="submit" class="btn btn-primary btn-block"></i> Voltar Tabela Contato </button></a>

    </div>  
</div>  

<br />





