(function(){
	/* Idntifier la collection de carrousel */
		let typeCours = document.querySelectorAll($tPropriété['type_de_cours'])
		let ctrltypecours = document.querySelectorAll($tPropriété['Cours'])
        let noctrltypecours = 0;
		for (const elmCours of typeCours)
		{
			let bout = ctrltypecours[noctrltypecours++].querySelectorAll('.rad-cours')
	
			console.log(bout.length)

			let k =0;
			bout[0].checked = true;
			for (const bt of bout)
			{
				bt.value = k++;
				console.log(bt.value)
				bt.addEventListener('mousedown', function() {
					elmCours.style.transform = "translateX(" + (-this.value*100) + "vw)"
					console.log(elmCours.style.transform)
				})

			}
		}	
}())	