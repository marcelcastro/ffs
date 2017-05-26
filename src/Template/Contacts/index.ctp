<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">    		
            <div class="col-sm-12">    			   			
                <h2 class="title text-center">Contato</h2>    			    				    				
            </div>			 		
        </div>    	
        <div class="row">  	
            <div class="col-sm-8">
                <div class="contact-form">
                    <h2 class="title text-center">Entre em contato</h2>
                    <div class="status alert alert-success" style="display: none"></div>
                    <?= $this->Form->create()?>
                    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                        <div class="form-group col-md-6">
                            <div class="form-control">
                        <?= $this->Form->input('nome', ['label' => 'Nome']) ?>
                            </div>    
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-control">
                                <?= $this->Form->input('email', ['label' => 'Email']) ?>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="form-control">
                                <?= $this->Form->input('assunto', ['label' => 'assunto']) ?>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="messagem" id="message" required="required" class="form-control" rows="8" placeholder="Digite sua mensagem aqui"></textarea>
                        </div>                        
                        <div class="form-group col-md-12">
                            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-info">
                    <h2 class="title text-center">Informações de contato</h2>
                    <address>
                        <p>Anuncie e Venda</p>
                        <p> Av. Marechal Floriano Peixoto, 728</p>
                        <p>São Lourenço do Sul, RS</p>
                        <p>Rio Grande do Sul, Brasil</p>
                        <p>Telefone: +55 53 991968584 </p>
                        <p>Email: marcelfontcast@gmail.com</p>
                    </address>
                </div>
            </div>    			
        </div>  
    </div>	
</div><!--/#contact-page-->