// selectionne les div avec ces ids

var map =document.querySelector('#map')



var paths = map.querySelectorAll('.map__image a ')

var links = map.querySelectorAll('.map__list a ')

//Polyfall du foreach

// pour que le survol marche sur tout les navigateur

if(NodeList.prototype.forEach === undefined){
	
	NodeList.prototype.forEach = function (callback){
		
		[].forEach.call(this,callback)
	}
}

// function donne la classe is-acitive au survol d'un des id d'une region

var activeArea = function (id) {
	
	map.querySelectorAll('.is-active').forEach(function(item){
		item.classList.remove('is-active')
	})
	
	if (id !== undefined){
		
		document.querySelector('#list-' + id).classList.add('is-active')
		
		document.querySelector('#france-' + id).classList.add('is-active')
		
	}
		
}

//Détection passage de la souris sur les id de la maps

paths.forEach(function(path){
	
	path.addEventListener('mouseenter',function(){
		
		var id = this.id.replace('france-','')
		
		activeArea(id)
		
		
		})
})

//Détection passage de la souris sur les id de la liste

links.forEach(function(link){
		link.addEventListener('mouseenter', function(){
			
			var id =this.id.replace('list-', '')
			
			activeArea(id)
		})
})


map.addEventListener('mouseover', function(){
		
	activeArea()
	
})


