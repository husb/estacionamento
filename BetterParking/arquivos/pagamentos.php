<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/pagamentos.css">
		<title>Better Parking</title>
	</head>
	<body>
		<div class="texto-centro" style="margin: 30px;"><span style="color: black; margin: 10px; font-weight: bold; font-size: 20px;">Better Parking</span></div>
		<div style="width: 750px; margin: auto; padding: 15px 0; background-color: yellow;">
			<div>
				<div class="texto-centro"><span style="background-color: blue; color: white; padding: 10px 15px;">Pagamentos</span></div>
				<div class="painel colunas">
					<div class="esq">
						<div class="controles">
							<label>Ticket</label>
							<input type="text" />
						</div>
						
						<div class="controles">
							<label>Hora Entrada</label>
							<input type="text" />
						</div>
						
						<div class="controles">
							<label>Valor / Hora</label>
							<input type="text" />
						</div>
					</div>
					<div class="dir">
						<div class="controles">
							<label>Data</label>
							<input type="text" />
						</div>
						
						<div class="controles">
							<label>Hora Saída</label>
							<input type="text" />
						</div>
						
						<div class="controles">
							<label>Permanencia</label>
							<input type="text" />
						</div>
					</div>
				</div>
				
				<div style="clear: both;"></div>
				
				<div class="painel">
					<div class="controles texto-centro">
						<label style="color: green;">Valor Total</label>
						<input type="text" />
					</div>
				</div>
				
				<div style="clear: both;"></div>
				
				<div class="painel colunas">
					<div class="esq">
						<div class="controles">
							<label>Valor Recebido</label>
							<input type="text" />
						</div>
					</div>
					<div class="dir">
						<div class="controles">
							<label>Troco</label>
							<input type="text" />
						</div>
					</div>
				</div>
				
				<div style="clear: both;"></div>
				
				<div class="painel colunas">
					<div class="esq">
						<div class="controles texto-centro">
							<input type="button" value="Pagamento" />
						</div>
					</div>
					<div class="dir">
						<div class="controles texto-centro">
							<label>Status: </label>
							<span style="color: red;">Pendente</span>
						</div>
					</div>
				</div>
				
				<div style="clear: both;"></div>
			</div>
		</div>
	</body>
</html>