<div class="paginacards">
    <div class="container" style="background-color: white">

        <?php
        $resultado = empty($dados);
        
        if (!$resultado) {
            foreach ($dados as $dado) {
                ?>
                <h1 class="text-center mt-5 mb-3 text-bold">ARTIGOS DOS NOSSOS COLABORADORES</h1> 
                <hr class="text-bold"/>

                <div class="container">
                    <div class="row">
                        <div class="col px-4">
                            <div class="list-group-item mt-1">
                                <div class="row m-3">
                                    <div class="col-auto">
                                        <img class="img-fluid" src="../../painel/dist/img/download.jpeg" alt="Photo">
                                    </div>
                                    <div class="col px-4">


                                        <h3><?php echo $dado['titulo']; ?></h3>
                                        <p class="mb-0 text-justify"><?php echo $dado['mensagem']; ?></p>

                                        <div class="text-right">
                                            <a href="https://apexensino.com.br/programacao-para-iniciantes/" class="btn btn-outline-success">Leia mais</a>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            ?>
            <div class="alert alert-warning text-center">
                <h6>Não foram encontrados resultados para pesquisa:</h6> <h4><strong class="badge badge-btn badge-info"><?php echo $consulta; ?></strong></h4>
                <h6><strong>Verifique o texto digitado e tente novamente!</strong></h6>
            </div>
        <?php } ?>                            


    </div>
</div>
<hr />