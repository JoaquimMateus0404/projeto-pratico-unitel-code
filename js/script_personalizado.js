
/*
function pegardados(){

	fetch("https://newsapi.org/v2/everything?domains=wsj.com&apiKey=9874c05977a54de68170b833478c1394" ,
		{
			method: 'get' 
	})
	.then(response => response.json())
	.then(function(corpo){ return corpo } )
	.catch(err => console.error(err));
}

function main(){



	var posts =	pegardados();

	console.log(posts.articles)
}

main()

var qtd = document.getElementsByClassName('qty');
document.getElementById('minus').addEventListener('click', function(){

	
	console.log('Clicou aqui!');
});

document.getElementById('plus').addEventListener('click', function(){

	console.log('Clicou aqui!');
});






*/
const artigos_posts = document.querySelector('.posts_blog');
function retrieve (e){
	const apiKey = "9874c05977a54de68170b833478c1394";

	let topic = "covid 19";

	let url = `https://newsapi.org/v2/everything?q=${topic}&apiKey=${apiKey}`;
	var postagem;
	fetch(url).then((response) => {

		return response.json();
	}).then((posts) => {

		posts.articles.forEach(artigos => {
			let li = document.createElement('li')
			let a = document.createElement('article')
			 postagem = `

			<article class="blog-post mb-3 bg-light">
				<h2 class="blog-post-title">${artigos.title}</h2>
				<p class="blog-post-meta">${artigos.publishedAt} by <a href="#">${artigos.author}</a></p>
		
				<p class="ellipsis">${artigos.description}</p>
				<a href="./blog_info.php">
					<strong class="text-primary">Continue lendo</strong>
				</a>
			</article>
			
			`;
			a.innerHTML = postagem;
			li.appendChild(a);

			artigos_posts.appendChild(li);
		});
		
	})
	 
	

}

retrieve()