<?php
foreach ($dados as $dado) {
    
}
?>

  <h1 class="text-center">Validação Artigo</h1>
    <form action="?pg=validar-artigo" method="POST">
        <div class="form w-75 h-50 mx-auto ">

            <div class="row">
               <div class="form-group">
                    <span class="reg-user"></span>                                        
                    <input type="text" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="<?php echo $dado['categoria']; ?>" disabled="">
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <span class="reg-user"></span>                                        
                    <input type="text" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="<?php echo $dado['titulo']; ?>" disabled="">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <span class="reg-user"></span>  
                        <input type="text" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="<?php echo $dado['sobrenome']; ?>" disabled="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <span class="reg-user"></span>  
                        <input type="text"class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="<?php echo $dado['nome']; ?>" disabled="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <span class="reg-user"></span>  
                        <input type="email" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="<?php echo $dado['email']; ?>" disabled="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <span class="reg-user"></span>  
                        <input type="text" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="<?php echo $dado['curso']; ?>" disabled="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <span class="reg-user"></span>  
                        <input type="text" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="<?php echo $dado['instituicao']; ?>" disabled="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <span class="reg-user"></span>  
                        <input type="text" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="<?php echo $dado['usuario']; ?>" disabled="">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <span class="reg-user"></span>                                        
                <input type="text" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="<?php echo $dado['linkVideo']; ?>" disabled="">
            </div>

            <div class="form-group  ">
                <span class="reg-user"></span>                                        
                <input type="text" class="form-control" autofocus="" id="exampleFormControlInput1" placeholder="<?php echo $dado['linkVideo']; ?>" disabled="">
            </div>

            <div class="form-group">
                <span class="reg-user"></span>                                          
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="20" placeholder="<?php echo $dado['artigo']; ?>" disabled=""></textarea>
            </div>

            <a href="?pg=inicial"><button type="submit" class="btn btn-primary btn-block"><i class="fas fa-plus" ></i> Validar Artigo </button></a>

        </div>
    </form>
    <br />
</div>




