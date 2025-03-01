(function() {

    const tagsInput = document.querySelector('#tags_input');

    if(tagsInput) {

        const tagsDiv = document.querySelector('#tags');
        const tagsInputHidden = document.querySelector('[name="tags"]');

        let tags = [];

        // Recuperar el input oculto
        if(tagsInputHidden !== '') {
            tags = tagsInputHidden.value.split(','); // de string a array
            mostrarTags();
        }

        // Escuchar los cambios en el input
        tagsInput.addEventListener('keypress', guardarTag);
        
        function guardarTag(e) {
            
            if(e.keyCode === 44) {

                if(e.target.value.trim() === '' || e.target.value < 1) {
                    return;
                }

                e.preventDefault();
                
                tags = [...tags, e.target.value.trim()]; // copia de arreglo y agregando uno nuevo
                tagsInput.value = '';
                mostrarTags();                
            }
        }

        function mostrarTags() {
            tagsDiv.textContent = '';

            tags.forEach(tag => {
                const etiqueta = document.createElement('LI');
                etiqueta.classList.add('formulario__tag');
                etiqueta.textContent = tag;
                etiqueta.ondblclick = eliminarTag;
                tagsDiv.appendChild(etiqueta);
            });

            actualizarInputHidden();
        }

        function eliminarTag(e) { // a que le presionamos
            e.target.remove();
            tags = tags.filter(tag => tag !== e.target.textContent); // elimina al que se le dio el click
            actualizarInputHidden();
        }

        function actualizarInputHidden() {
            tagsInputHidden.value = tags.toString(); // rellenamos el valor del value como strings dentro del ""
        }
    }
})()