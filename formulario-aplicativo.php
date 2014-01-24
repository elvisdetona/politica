		<section class="contactform">
			
			<div class="two columns">
			<p>Preencha os campos abaixo e envie para nós:</p>
				<form action="sendmail.php" method="post">
					<ul>
						<li>
							<label for="nome">Nome:</label>
							<input type="text" name="nome" id="nome" />
							<input type="hidden" name="section" id="section" value="aplicativo" />

						</li>
						<li>
							<label for="area">Área de atuação:</label>
							<input type="text" name="area" id="area" />
						</li>
						<li>
							<label for="cargo">Cargo:</label>
							<input type="text" name="cargo" id="cargo" />
						</li>
						<li>
							<label for="telefone">Telefone:</label>
							<input type="tel" name="telefone" id="telefone" />
						</li>

						<li>
							<label for="email">E-mail:</label>
							<input type="email" name="email" id="email" />
						</li>
						<li>
							<input type="submit" name="enviar" value="enviar" class="ir" />
						</li>
					</ul>
				</form>
				
			</div>
			<div class="two columns">
				
				<img src="img/logo-mobint.png" alt="Mobint">
			</div>
		</section>
