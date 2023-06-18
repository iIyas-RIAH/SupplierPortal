<!DOCTYPE html>
<html>

<head>
	<title>ONHYM Supplier Portal | Créer votre compte</title>
	<link rel="shortcut icon" href="../../assets/icons/favicon.ico" type="image/svg+xml">
	<link rel="stylesheet" type="text/css" href="../../assets/css/style2.css">
</head>

<body>
	<h1>Création d'un nouveau compte</h1>
	<div class="container" id="container">
		<form id="form" method="POST" action="../../Service/SigninService.php">
			<div id="form1">
				<h3>Références Entreprise</h3>
				<table>
					<tr>
						<td>
							<label for="Type">Type: *</label><br><br>
							<select name="Type" id="Type" required>
								<option value="0">-------</option>
								<option value="EN">Entreprise Nationale</option>
								<option value="EP">Etablissement public</option>
								<option value="EE">Entrepise Etrangère</option>
								<option value="SEGMA">SEGMA</option>
								<option value="AE">Auto-Entrepreneur/Coopérative/Fondation</option>
							</select><br><br>
						</td>
						<td>
							<input type="checkbox" id="PME" name="PME">
							<label for="PME">PME</label>

						</td>
					</tr>
					<tr>
						<td colspan="3">
							<label for="name">Nom de l'entreprise: *</label>
							<input type="text" id="name" name="Name" required><br><br>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<label for="Forme_Juridique">Forme Juridique: *</label><br><br>
							<select name="Forme_Juridique" id="Forme_Juridique" required>
								<option value="0">-------</option>
								<option value="SA">SOCIETE ANONYME</option>
								<option value="SARL">SOCIETE A RESPONSABILITE LIMITEE (SARL)</option>
								<option value="SNC">SOCIETE EN NOM COLLECTIF</option>
								<option value="EI">ENTREPRISE INDIVIDUELLE</option>
								<option value="SEC">SOCIETE EN COMMANDITE</option>
								<option value="SEP">SOCIETE EN PARTICIPATION</option>
								<option value="GIE">GROUPEMENT D'INTERET ECONOMIQUE</option>
								<option value="SUCCURSALE">SUCCURSALE</option>
							</select><br><br>
						</td>
						<td>
							<label for="Registre_Commercial">Registre Commercial: *</label>
							<input type="text" id="Registre_Commercial" name="Registre_Commercial" required><br><br>
						</td>
					</tr>
					<tr>
						<td>
							<label for="Pays">Pays: *</label>
							<input type="text" id="Pays" name="Pays" required><br><br>
						</td>
						<td>
							<label for="Ville">Ville: *</label><br>
							<input type="text" id="Ville" name="Ville" required><br><br>
						</td>
						<td>
							<label for="Code_Postal">Code Postal: *</label>
							<input type="text" id="Code_Postal" name="Code_Postal" required><br><br>
						</td>
					</tr>
					<tr>
						<td>
							<label for="ICE">ICE: *</label><br>
							<input type="text" id="ICE" name="ICE" required><br><br>
						</td>
						<td>
							<label for="Identifiant_Fiscal">Identifiant Fiscal: *</label>
							<input type="text" id="Identifiant_Fiscal" name="Identifiant_Fiscal" required><br><br>
						</td>
						<td>
							<label for="Taxe_Professionnelle">Taxe Professionnelle: *</label>
							<input type="text" id="Taxe_Professionnelle" name="Taxe_Professionnelle" required><br><br>
						</td>
					</tr>
					<tr>
						<td>
							<label for="CNSS">CNSS: *</label>
							<input type="text" id="CNSS" name="CNSS" required><br><br>
						</td>
						<td>
							<label for="Téléphone">Téléphone: *</label>
							<input type="text" id="Téléphone" name="Téléphone" required><br><br>
						</td>
						<td>
							<label for="Faxe">Fax: *</label><br>
							<input type="text" id="Faxe" name="Faxe" required><br><br>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<label for="Adresse">Adresse: *</label>
							<input type="text" id="Adresse" name="Adresse" required><br><br>
						</td>
					</tr>
				</table>


				<div class="btn-box">
					<a href="#" id="next">Suivant</a>
				</div>
			</div>




			<div id="form2">
				<h3>Références représentant légal ou personne habilitée</h3>
				<table>
					<tr>
						<td>
							<label for="Nom">Nom: *</label>
							<input type="text" id="Nom" name="Nom" required><br><br>
						</td>
						<td>
							<label for="Prenom">Prénom: *</label><br>
							<input type="text" id="Prenom" name="Prenom" required><br><br>
						</td>
						<td>
							<ul>
								<li>
									<input type="radio" id="legal" name="TypePersonne" value="Représentant legal" checked> Représentant légal
								</li>
								<li>
									<input type="radio" id="habilite" name="TypePersonne" value="Habilité"> Habilité
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td>
							<label for="CIN">CIN: *</label><br>
							<input type="text" id="CIN" name="CIN" required><br><br>
						</td>
						<td>
							<label for="phone">Téléphone: *</label>
							<input type="text" id="phone" name="phone" required><br><br>
						</td>
						<td>
							<label for="Fax">Fax: *</label><br>
							<input type="text" id="Fax" name="Fax" required><br><br>
						</td>
					</tr>
					<tr>
						<td>
							<label for="Mail">Adresse mail: *</label>
							<input type="text" id="Mail" name="Mail" required><br><br>
						</td>
						<td colspan="2">
							<p>Cette adresse Email sera l'identifiant d'accès légal ou de la personne mandatée par ce dernier.</p>
						</td>
					</tr>
					<tr>
						<td>
							<label for="password">Mot de passe: *</label><br>
							<input type="password" id="password" name="password" required><br><br>
						</td>
						<td>
							<label for="password2">Confirmation du mot de passe: *</label>
							<input type="password" id="password2" name="password2" required><br><br>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<input type="radio" id="conditions" name="conditions" required> J'accepte les conditions générales d'utilisation de la platforme ONHYM-Supplier Portal.
						</td>
					</tr>
				</table>


				<div class="btn-box">
					<a href="#" id="back" style="margin-right: 22px">Reculer</a>
					<a href="#" id="save" onclick="submitForms()">Enregistrer</a>
				</div>
			</div>

		</form>
		<div class="step-row">
			<div id="progress"></div>
			<div class="step-col" style="color: #FFFFFF">Etape 1</div>
			<div id="step2" class="step-col" style="color: #000000; transition: 0.6s">Etape 2</div>
		</div>


	</div>


	<script type="text/javascript">
		var Form1 = document.getElementById("form1");
		var Form2 = document.getElementById("form2");

		var Container = document.getElementById("container");

		var Next = document.getElementById("next");
		var Back = document.getElementById("back");

		var Save = document.getElementById("save");

		var Progress = document.getElementById("progress");

		var Step2 = document.getElementById("step2");

		Next.onclick = function() {
			if (Form1.style.display === "none") {
				Form1.style.display = "block";
				Form2.style.display = "none";
			} else {
				Form1.style.display = "none";
				Form2.style.display = "block";
			}
			Form2.style.top = "60px";
			Container.style.height = "578px";
			Progress.style.width = "100%";
			Step2.style.color = "white";
		}

		Back.onclick = function() {
			Form1.style.left = "60px";
			if (Form2.style.display === "none") {
				Form1.style.display = "none";
				Form2.style.display = "block";
			} else {
				Form2.style.display = "none";
				Form1.style.display = "block";
			}			
			Container.style.height = "780px";
			Progress.style.width = "50%";
			Step2.style.color = "black";
		}

		Save.onclick = function() {
			document.getElementById("form").submit();
		}
	</script>

</body>

</html>