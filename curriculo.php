
    	<html>
			<head>
				<meta charset="utf-8">
				<link rel="stylesheet" href="style.css">
			</head>
			<body>
				<main>
					
					<div class="container">
						<div class="foto"></div>
						<h1><?= $_POST['nome']; ?></h1>
						<p id="rg">RG: <?= $_POST['rg']; ?></p>
						<p id="nasc">Data nasc: <?= $_POST['nasc']; ?></p>
						<p id="cpf">CPF: <?= $_POST['cpf']; ?></p>
						<p id="cnh">CNH: <?= $_POST['cnh']; ?></p>
						<p id="categoria">Categoria: <?= $_POST['categoria']; ?></p>
						<p id="telefone">Telefone: <?= $_POST['telefone']; ?></p>
						<p id="endereco">Endereço: <?= $_POST['endereco']; ?></p>
						<p id="cep">Cep: <?= $_POST['cep']; ?></p>
						<p id="cidade">Cidade: <?= $_POST['cidade']; ?></p>
						<p id="pais">Pais: <?= $_POST['pais']; ?></p>
						<p class="txt-exp">Experiência Profissional</p>
						<p class="empresa em">Empresa: <?= $_POST['empresaA']; ?></p>
						<p class="cargo car">Cargo: <?= $_POST['cargoA']; ?></p>
						<p class="tempo tem">Experiência: <?= $_POST['experienciaA']; ?></p>
						<p class="empresa em">Empresa: <?= $_POST['empresaB']; ?></p>
						<p class="cargo car">Cargo: <?= $_POST['cargoB']; ?></p>
						<p class="tempo tem">Experiência: <?= $_POST['experienciaB']; ?></p>
						<p class="empresa em">Empresa: <?= $_POST['empresaC']; ?></p>
						<p class="cargo car">Cargo: <?= $_POST['cargoC']; ?></p>
						<p class="tempo tem">Experiência: <?= $_POST['experienciaC']; ?></p>
						<p class="txt-exp">Formação Escolar</p>
						<p class="escolaridade"><?= $_POST['escolaridade']; ?></p><br>
						<p class="txt-exp">Ensino Superior</p>
						<p class="formacao-sup"><?= $_POST['faculdade']; ?></p>
						<p class="sobre"><?= $_POST['sobre']; ?></p>
						<p class="assinatura ass">Ass:</p>
					</div>
				    
				</main>
				<script src="html2canvas.js"></script>
				<script>
 var container = document.body; // full page 
 html2canvas(container).then(function(canvas) {
                var link = document.createElement("a");
                document.body.appendChild(link);
                link.download = "html_image.png";
                link.href = canvas.toDataURL("image/png");
                link.target = '_blank';
                link.click();
            });
 
				</script>
			</html>
