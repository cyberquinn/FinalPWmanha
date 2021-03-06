<?php
foreach ($dados as $dado) {
    
}
?>
<h1 class="text-center mt-4">Validação Artigo</h1>
<form action="?pg=validar-artigo" method="POST">
    <div class="form w-75 h-50 mx-auto ">

        <div id="cor-de-input-preto">

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="cat">Categorias:</label>
                        <input type="text" name="categoria" class="form-control w-50"  id="cat" value="<?php echo $dado['categoria']; ?>" disabled="" placeholder="<?php echo $dado['categoria']; ?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="titulo">Título:</label>
                        <input type="text" name="titulo" class="form-control"  id="titulo" value="<?php echo $dado['titulo']; ?>" disabled="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="titulo">Sobrenome:</label>
                        <span class="reg-user"></span>  
                        <input type="text" name="sobrenome" class="form-control" id="exampleFormControlInput1" value="<?php echo $dado['sobrenome']; ?>" disabled="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="titulo">Nome:</label>
                        <span class="reg-user"></span>  
                        <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" value="<?php echo $dado['nome']; ?>" disabled="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="titulo">Email:</label>
                        <span class="reg-user"></span>  
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $dado['email']; ?>" disabled="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="titulo">Curso:</label>
                        <span class="reg-user"></span>  
                        <input type="text" name="curso" class="form-control" id="exampleFormControlInput1" value="<?php echo $dado['curso']; ?>" disabled="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="titulo">Instituicao:</label>
                        <span class="reg-user"></span>  
                        <input type="text" name="instituicao" class="form-control" autofocus="" id="exampleFormControlInput1" value="<?php echo $dado['instituicao']; ?>" disabled="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="titulo">Usuario:</label>
                        <span class="reg-user"></span>  
                        <input type="text" name="usuario" class="form-control " autofocus="" id="exampleFormControlInput1" value="<?php echo $dado['usuario']; ?>" disabled="">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="titulo">Video:</label>
                <span class="reg-user"></span>                                        
                <input type="text" name="linkVideo" class="form-control" id="exampleFormControlInput1" value="<?php echo $dado['linkVideo']; ?>" disabled="">
            </div>
            <div class="form-group">
                <label for="titulo">Imagem:</label>
                <span class="reg-user"></span>                                        
                <input type="text" name="linkImagem" class="form-control" id="exampleFormControlInput1" value="<?php echo $dado['linkImagem']; ?>" disabled="">
            </div>

            <div class="form-group">
                <label for="msg">Mensagem:</label>
                <span class="reg-user"></span>                                          
                <textarea class="form-control" name="artigo" id="msg" rows="10" value="<?php echo $dado['artigo']; ?>" disabled=""><?php echo $dado['artigo']; ?></textarea>
            </div>

            <a href="?pg=tabela-artigos-validados"><button type="submit" class="btn btn-primary btn-block"><i class="fas fa-plus" ></i> Validar Artigo </button></a>

        </div>

    </div>
</form>
<br />




