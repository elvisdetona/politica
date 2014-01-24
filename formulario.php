		<section class="contactform">
			<h2 class="titcontact">Contato</h2>
			<p>Entre em contato para agendar uma visita<br />
				ou obter mais informações.</p>
			<div class="two columns">
				<form action="sendmail.php" method="post">
					<ul>
						<li>
							<label for="nome">Nome:</label>
							<input type="text" name="nome" id="nome" />
							<input type="hidden" name="section" id="section" value="contato" />

						</li>
						<li>
							<label for="email">E-mail:</label>
							<input type="email" name="email" id="email" />
						</li>
						<li>
							<label for="mensagem">Mensagem:</label>
							<textarea name="mensagem" id="mensagem"></textarea>
						</li>
						<li>
							<input type="submit" name="enviar" value="enviar" class="ir" />
						</li>
					</ul>
				</form>
				
			</div>
			<div class="two columns">
				<p class="bgbox">Rua Barata Ribeiro, 260 1º andar<br />
				São Paulo/SP<br />
				11 95771-9881<br />
				<a href="mailto:atendimento@eleicoesdigitais.com.br" aria-label="Envie um e-mail para atendimento@eleicoesdigitais.com.br">atendimento@eleicoesdigitais.com.br</a> <br />
				<a href="http://twitter.com/eleicoesdigt" aria-label="Acessar o twitter @eleicoesdigt" target="_blank" class="twt">
				@eleicoesdigt
				</a>
				</p>
			</div>
		</section>
