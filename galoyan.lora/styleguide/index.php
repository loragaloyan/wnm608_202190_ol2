<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CSS Styleguide</title>

	<link rel="stylesheet" href="https://use.typekit.net/guv2awx.css">
	<link rel="stylesheet" href="https://use.typekit.net/guv2awx.css">

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="../lib/css/styleguide.css">

	<?php include "parts/meta.php"; ?>
	<?php include "parts/navbar.php"; ?>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


	<script>
		function makeTable(elementId, classes='') {
			const head = ['Creature', 'Theme', 'Type'];
			const body = [
				['Dragon', 'Dark','Clay'],
				['Faerie', 'Light','Porcelain'],
				['Gollum', 'Medium','Porcelain'],
			];
			let html = `<table class=${classes}>`;
			html += `<thead><tr>`;
			for (let ii = 0; ii < head.length; ii++) {
				html += `<th>${head[ii]}</th>`;
			}
			html += `</tr></thead>`;
			html += `<tbody>`;
			for (let row = 0; row < body.length; row++) {
				html += `<tr>`;
				for (let column = 0; column < body[row].length; column++) {
					html += `<td>${body[row][column]}</td>`;
				}
				html += `</tr>`;
				console.log('row', row);
			}
			/*
			row = 0
			tr
				col = 0
				td
				col = 1
				td
				col = 2
				td
				col = 3
			/tr
			row = 1
			tr
			...


			*/
			html += `<tr>`;
			html += `<td></td>`;
			html += `</tr>`;
			html += `</tbody>`;
			html += `</table>`;

			// let html = 'yes';
			document.getElementById(elementId).innerHTML = html;

			// document.getElementById(elementId).innerHTML = `
			// <table class="${classes}">
			// 	<thead><tr>${head.reduce((r,o)=r+`<th>${o}</th>`,'')}</tr></thead>
			// 	<tbody>${body.reduce((r,o,i)=>r+
			// 		`<tr>${
			// 			[i+1,...o].reduce((r,o)=>r+`<td>${o}</td>`,'')
			// 		}</tr>`,'')
			// 	}</tbody>
			// </table>
			// `;
		}
	</script>
</head>
<body>

	<header class="navbar">

		<div class="container display-flex">
			<div class="flex-none">
				<h1>Styleguide</h1>
			</div>
			<div class="flex-stretch"></div>
			<!-- <nav class="flex-none nav">
				<ul class="container display-flex">
					<li><a href="#tableofcontents">Table of Contents</a></li>
					
					
				</ul>
			</nav> -->
		</div>
	</header>
	

	<div class="container" id="tableofcontents">
		<h2>TABLE OF CONTENTS</h2>
		<div class="card">
			<nav class="nav">
				<ul>
					<li><a href="#typography">Typography</a></li>
					<ul>
						<li><a href="#headings">Headings</a></li>
						<li><a href="#paragraphs">Paragraphs</a></li>
					</ul>
					<li><a href="#cards">Cards</a></li>
					<li><a href="#viewwindow">ViewWindow</a></li>
					<li><a href="#navigations">Navigations</a></li>
					<li><a href="#gridsystem">Grid System</a></li>
					<li><a href="#flexsystem">Flex System</a></li>
					<li><a href="#tables">Tables</a></li>
					<li><a href="#forms">Forms</a></li>
					<ul>
						<li><a href="#inputs">Inputs</a></li>
						<li><a href="#labels">Labels</a></li>
						<li><a href="#controls">Controls</a></li>
						<li><a href="#buttons">Buttons</a></li>
					</ul>

				</ul>
			</nav>
		</div>
	</div>

	<div class="container" id="typography">
		<h2>TYPOGRAPHY</h2>
		
		<div class="card soft" id="headings">
			<h3>Headings</h3>	
			<h1>Heading 1</h1>
			<h2>HEADING 2</h2>
			<h3>Heading 3</h3>
			<h4>Heading 4</h4>
			<h5>Heading 5</h5>
			<h6>Heading 6</h6>
		</div>
		
		<div class="card soft" id="paragraphs">
			<h3>PARAGRAPHS</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eum sint porro ipsum mollitia doloremque quod rem, asperiores numquam delectus laborum quisquam totam sed fugit quaerat nostrum dignissimos atque reprehenderit?</p>
			<p>Earum ab in a minus accusamus exercitationem aut quam ex facere cupiditate non aperiam nemo culpa ducimus, reiciendis quisquam quaerat sapiente? Cupiditate quidem ex fugiat culpa, consequuntur fugit dolorum laboriosam.</p>
			<p>Temporibus alias impedit accusamus minus exercitationem quaerat consequatur dolore corrupti laborum nobis optio explicabo ullam quas delectus id, distinctio ipsa. Itaque est magni ad esse delectus cupiditate autem fugiat sequi.</p>
		</div>
	</div>



	<div class="container">
		<h2>CARDS</h2>

		<div class="grid gap">
			<div class="col-ex-12 col-md-4">
				<div class="card">Card</div>
			</div>
			<div class="col-ex-12 col-md-4">
				<div class="card soft">Card Soft</div>
			</div>
			<div class="col-ex-12 col-md-4">
				<div class="card hard">Card Hard</div>
			</div>
			<div class="col-ex-12 col-md-4">
				<div class="card flat">Card Flat</div>
			</div>
			<div class="col-ex-12 col-md-4">
				<div class="card dark">Card Dark</div>
			</div>
			<div class="col-ex-12 col-md-4">
				<div class="card medium">Card Medium</div>
			</div>
		</div>
	</div>



	<div class="container">
		<h2>VIEW WINDOW</h2>
	</div>




	<div class="container" id="navigations">
		<h2>NAVIGATIONS</h2>


		<script>
		const makeNav = (classes='') => {
			const links = ['Home','Artist','Shop','Custom Orders','FAQ'];
			let ran = Math.floor(Math.random()*links.length);
			document.write(`
			<div>
				<nav class="${classes}">
				<ul>
				${links.reduce((r,o,i)=>{
					return r+`<li class="${ran==i?'active':''}"><a href="#">${o}</a></li>`;
				},'')}
				</ul>
			</nav>
			</div>
			`);
		}
		</script>


		<div class="card soft">
			<h3>BASIC NAV</h3>
			<script>makeNav('nav')</script>
		</div>

		<div class="card soft">
			<h3>FLEX NAV</h3>
			<script>makeNav('nav nav-flex')</script>
		</div>

		<div class="card soft">
			<h3>STRETCH NAV</h3>
			<script>makeNav('nav nav-stretch')</script>
		</div>


		<div class="card soft">
			<h3>PILLS NAV</h3>
			<script>makeNav('nav nav-pills')</script>
		</div>


		<div class="card soft">
			<h3>CRUMBS NAV</h3>
			<script>makeNav('nav nav-crumbs')</script>
		</div>


		<div class="card soft">
			<h3>MATERIAL NAV</h3>
			<script>makeNav('nav nav-material')</script>
		</div>


		<script>
			$("#navigations a").on("click",function(e){
				e.preventDefault();
				$(this).closest("li").addClass("active")
					.siblings().removeClass("active")
			})
		</script>

	</div>




	<div class="container">
		<h2>GRID SYSTEM</h2>
	</div>




	<div class="container">
		<h2>FLEX SYSTEM</h2>
	</div>





<div class="container">
		<h2>TABLES</h2>

		<div class="card soft">
			<h3>Basic Table</h3>
			<div id='table'></div>
			<script>makeTable("table", "table")</script>
		</div>

		<div class="card soft">
			<h3>Striped Table</h3>
			<div id='table-striped'></div>
			<script>makeTable("table-striped", "table striped")</script>
		</div>

		<div class="card soft">
			<h3>Striped Lined Vertical Table</h3>
			<div id='table-lined-vertical'></div>
			<script>makeTable("table-lined-vertical", "table lined vertical")</script>
		</div>

		<div class="card soft">
			<h3>Striped Lined Horizontal Table</h3>
			<div id='table-lined-horizontal'></div>
			<script>makeTable("table-lined-horizontal", "table lined horizontal")</script>
		</div>

		<div class="card soft">
			<h3>Striped Lined Border</h3>
			<div id='table-lined-border'></div>
			<script>makeTable("table-lined-border","table lined border")</script>
		</div>

		<div class="card soft">
			<h3>Striped Lined all</h3>
			<div id='table-lined-all'></div>
			<script>makeTable("table-lined-all","table lined all")</script>
		</div>

		<div class="card soft">
			<h3>Combinations</h3>
			<div id='combinations'></div>
			<script>makeTable("combinations", "combinations"")</script>
		</div>


		<h2 id="figures">FIGURES</h2>
		<div class="card">
			<h3>Basic Figure</h3>
			<figure class="figure">
				<img src="https://via.placeholder.com/400x400?text=product" alt="">			
				<figcaption>Product</figcaption>
			</figure>

		</div>




			<h3>PRODUCT GRID</h3>

			<div class="grid gap">
				<div class="col-xs-12 col-md-4">
					<figure class="figure product">
						<img src = "https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>
							<div class="caption-body">
								<div>Product name</div>
								<div>$3.99</div>
							</div>
						</figcaption>
					</figure>
				</div>
				<div class="col-xs-12 col-md-4">
					<figure class="figure product">
						<img src = "https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>
							<div class="caption-body">
								<div>Product name</div>
								<div>$3.99</div>
							</div>	
						</figcaption>
					</figure>
				</div>
				<div class="col-xs-12 col-md-4">
					<figure class="figure product">
						<img src = "https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>
							<div class="caption-body">
								<div>Product name</div>
								<div>$3.99</div>
							</div>
						</figcaption>
					</figure>
				</div>			
			</div>


			<h3>PRODUCT OVERLAY</h3>

			<div class="grid gap">
				<div class="col-xs-12 col-md-4">
					<figure class="figure product-overlay">
						<img src = "https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>
							<div>Product name</div>
							<div>$3.99</div>
						</figcaption>
					</figure>
				</div>
				<div class="col-xs-12 col-md-4">
					<figure class="figure product-overlay">
						<img src = "https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>
							<div>Product name</div>
							<div>$3.99</div>
						</figcaption>
					</figure>
				</div>
				<div class="col-xs-12 col-md-4">
					<figure class="figure product-overlay">
						<img src = "https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>
							<div>Product name</div>
							<div>$3.99</div>
						</figcaption>
					</figure>
				</div>			
			</div>











	</div>




	<div class="container" id="forms">
		<h2>FORMS</h2>

	
		<h3>Inputs</h3>
	
		<div class="card soft">
			<h3>Default Inputs</h3>
			<form>
				<input type="text"><br>
				<input type="number"><br>
				<input type="password"><br>
				<input type="URL"><br>
				<input type="email"><br>
				<input type="datetime-local"><br>
				<input type="date"><br>
				<input type="search"><br>
			</form>

			<h3>Form Input</h3>
			<form>
				<input type="text" placeholder ="Text" class="form-input">
				<input type="number" placeholder ="Number" class="form-input"><br>
				<input type="password" placeholder ="Password" class="form-input"><br>
				<input type="search" placeholder ="Search" class="form-input"><br>
			</form>

			<h3>Form Control</h3>
			<form>
				<div class="form-control">
					<label class="form-label">Name</label>
					<input type="text" placeholder ="Text" class="form-input">
				</div>
				<div class="form-control">
					<label class="form-label">Phone Number</label>
					<input type="text" placeholder ="Text" class="form-input">
				</div>
				<div class="form-control">
					<label class="form-label">E-Mail Address</label>
					<input type="text" placeholder ="Text" class="form-input">
				</div>
				

				<div class="form-control display-flex flex-align-center">
					<div class="flex-none">
						<label class="form-label">Name</label>
					</div>
					<div class="flex-stretch">
						<input type="text" placeholder ="Search" class="form-input display-flex">
					</div>
					<div class="flex-none">
						<label class="form-label">E-Mail Address</label>
					</div>
					<div class="flex-stretch">
						<input type="text" placeholder ="Search" class="form-input display-flex">
					</div>
				</div>
			</form>

		</div>




		<h2>BUTTONS</h2>

		<div class="card soft">
			
			<h3>Default Buttons</h3>
			<button>Button</button>

			<h3>Form Buttons</h3>
			<button class="form-button">Button</button>

		</div>


		<h2>HOTDOG</h2>

			<div class="card soft">
				<div class="form-control">
					<form>
						<input type="search" class="hotdog" placeholder="Search">
					</form>
				</div>


				<div class="form-control">	
					<form>
						<input type="search" class="hotdog dark" placeholder="Search">
					</form>
				</div>


				<div class="form-control">
					<form class="card dark">
						<input type="search" class="hotdog light" placeholder="Search">
					</form>
				</div>

				
				<div class="form-control">	
					<form class="hotdog">
						<span>&equiv;</span>
						<input type="search" placeholder="Search">
					</form>
				</div>

				<div class="form-control">	
					<form class="hotdog">
						<input type="search" placeholder="Search">
						<span>&equiv;</span>
					</form>
				</div>

				</div>



				<h2 id="select">SELECT</h2>
			<div class="card soft">
				<div class="form-select">
					<select>
						<option>Dragon</option>
						<option>Faerie</option>
						<option>Gollum</option>
					</select>
				</div>
				<div class="display-flex">
					<div class="flex-stretch"></div>
					<div class="flex-none">
						<div class="form-select">
							<select>
								<option>Dragon</option>
								<option>Faerie</option>
								<option>Gollum</option>
							</select>
				</div></div>
				</div>
			
			</div>


			<h2 id="checkboxes">CHECK BOXES</h2>

			<div class="card soft">

				<h3>Standard Label</h3>
				<label><input type="checkbox" id="input-1"></label>
				<label for="input-1">This is a gift</label>

				<h3>Heart Checkboxes</h3>
					<div class="favorite">
						<input type="checkbox" id="heart-example" class="hidden">
						<label for="heart-example">&hearts;</label>
					</div>


				<h3>Toggle</h3>
				<div class="toggle">
					<input type="checkbox" id="toggle-1" class="hidden">
					<label for="toggle-1"></label>
				</div>
				<div class="display-flex">
					<div class="flex-stretch">
						<label for="toggle-1">Send e-mail for new products?</label>
					</div>

				</div>
			</div>
		</div>



		</div>

	</div>





</body>
</html>









