
const listItemTemplate = templater(o=>`
<div class="col-xs-12 col-md-4">
		<a href="product_item.php?id=${o.id}">
			<figure class="figure product">
				<img src = "${o.thumbnail}" />
				<figcaption>
					<div class="caption-body">
						<div>${o.price}</div>
						<div>${o.name}</div>
					</div>
				</figcaption>
			</figure>
		</a>
	</div>
`);