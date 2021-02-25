

<body>
    <div class="container mt-5">
        <h1 class="text-center pb-2"><b>FaÃ§a vocÃª mesmo</b></h1>
        <div class="form w-75 h-50 mx-auto ">
            <div class="row justify-content-center">
                <div class="col-6">

                    <div class="form-group">
                        <span class="reg-user"></span>  
                        <label for="exampleFormControlInput1"><b>Nome e Sobrenome: </b></label>
                        <br />
                        <?php
                        foreach ($dados as $dado) {
                            echo $dado['nome'] . '<br>';
                        }
                        ?>

                    </div>
                    <div class="-group">
                        <span class="reg-location1"></span>  
                        <label for="exampleFormControlInput1"><b>Localidade:</b></label>
                        <br />
                        <?php
                        foreach ($dados as $dado) {
                            echo $dado['localidade'] . '<br>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-6">

                    <div class="form-group">
                        <span class="reg-user-group"></span>
                        <label for="exampleFormControlSelect1"><b>UsuÃ¡rio:</b></label>
                        <br />
                        <?php
                        foreach ($dados as $dado) {
                            echo $dado['usuario'] . '<br>';
                        }
                        ?>

                    </div>
                    <div class="form-group ">
                        <span class="reg-office"></span>
                        <label for="exampleFormControlInput1"><b>Curso/instituiÃ§Ã£o:</b></label>
                        <span class="manu-document"></span>
                        <br />
                        <?php
                        foreach ($dados as $dado) {
                            echo $dado['curso'] . '<br>';
                        }
                        ?>
                    </div> 


                </div>

            </div>



            <div class="card ess mt-4">

                <div class="card-body">
                    <h5 class="card-title">Adicione um vÃ­deo</h5>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Link do vÃ­deo:</label>
                        <br /> 
                        <?php
                        foreach ($dados as $dado) {
                            echo $dado['linkVideo'] . '<br>';
                        }
                        ?>
                    </div>

                </div>
            </div>
            <div class="row mt-4">
                <div class="col ">
                    <div class="form-group text">
                        <span class="reg-book-reference"></span>
                        <label for="exampleFormControlTextarea1"><b>Exemplo de textarea:</b></label>
                        <br />
                        <?php
                        foreach ($dados as $dado) {
                            echo $dado['artigo'] . '<br>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col mt-4">
                    <img class="img-fluid"src="https://placehold.it/400x500" alt=""/>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <a href="" class="btn btn-dark btn-block mt-3">Enviar</a>
                </div>
            </div>
        </div>

    </div>

</body>
</html>