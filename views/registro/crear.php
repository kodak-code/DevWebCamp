<main class="registro">
    <h2 class="registro__heading"><?php echo $titulo; ?></h2>
    <p class="registro__descripcion">Elige tu plan</p>

    <div class="paquetes__grid">
        <div class="paquete">
            <h3 class="paquete__nombre">Pase Gratis</h3>
            <ul class="paquete__lista">
                <li class="paquete__elemento">Acceso Virtual a DevWebCamp</li>
            </ul>

            <p class="paquete__precio">$0</p>

            <form method="POST" action="/finalizar-registro/gratis">
                <input class="paquetes__submit" type="submit" value="Inscripción Gratis">
            </form>
        </div>

        <div class="paquete">
            <h3 class="paquete__nombre">Pase Presencial</h3>
            <ul class="paquete__lista">
                <li class="paquete__elemento">Acceso Presencial a DevWebCamp</li>
                <li class="paquete__elemento">Pase por 2 días</li>
                <li class="paquete__elemento">Acceso a talleres y conferencias</li>
                <li class="paquete__elemento">Acceso a las grabaciones</li>
                <li class="paquete__elemento">Camisa del Evento</li>
                <li class="paquete__elemento">Comida y Bebida</li>
            </ul>

            <p class="paquete__precio">$199</p>
            <a class="paquete__boton-paypal777">Ir a Conferencia</a>

            <!-- EL QUE NO FUNCA ACTUAL
             <div class="paquete__botonpaypal">
                <div id="paypal-container-6HP5PVS7ZNXLU"></div>
            </div> -->

            <!--  EL QUE NO FUNCA
             <div id="smart-button-container">
                <div style="text-align: center;">
                    <div id="paypal-button-container"></div>
                </div>
            </div> -->
        </div>

        <div class="paquete">
            <h3 class="paquete__nombre">Pase Virtual</h3>
            <ul class="paquete__lista">
                <li class="paquete__elemento">Acceso Virtual a DevWebCamp</li>
                <li class="paquete__elemento">Pase por 2 días</li>
                <li class="paquete__elemento">Acceso a talleres y conferencias</li>
                <li class="paquete__elemento">Acceso a las grabaciones</li>
            </ul>

            <p class="paquete__precio">$49</p>

        </div>
    </div>
</main>
<!-- PARA SALVAR EL ERROR DE PAYPAL ACTUAL DEL CURSO -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const botonConferencia = document.querySelector(".paquete__boton-paypal777");

        if (botonConferencia) {
            botonConferencia.addEventListener("click", function() {
                window.location.href = "http://localhost:3000/finalizar-registro/conferencias";
            });
        }
    });
</script>

<!-- ACTUAL.NO-FUNCA -->
<!-- 
<script src="https://www.paypal.com/sdk/js?client-id=BAAbIJnL7vBGae3X8qzXO3Fr6dTAlOf_ovLxD7Oh9qLfHKjzmYwjgHAxF8lgl0nDmLR66fevyNlpygxmjY&components=hosted-buttons&disable-funding=venmo&currency=USD"></script>
<script>
    paypal.HostedButtons({
        hostedButtonId: "6HP5PVS7ZNXLU",
    }).render("#paypal-container-6HP5PVS7ZNXLU")
</script> -->

<script src="https://www.paypal.com/sdk/js?client-id=BAAbIJnL7vBGae3X8qzXO3Fr6dTAlOf_ovLxD7Oh9qLfHKjzmYwjgHAxF8lgl0nDmLR66fevyNlpygxmjY&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>

<script>
    function initPayPalButton() {
        paypal.Buttons({
            style: {
                shape: 'rect',
                color: 'blue',
                layout: 'vertical',
                label: 'pay',
            },

            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        "description": "1",
                        "amount": {
                            "currency_code": "USD",
                            "value": 199
                        }
                    }]
                });
            },

            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {

                    const datos = new FormData();
                    datos.append('paquete_id', orderData.purchase_units[0].description);
                    datos.append('pago_id', orderData.purchase_units[0].payments.captures[0].id);

                    fetch('/finalizar-registro/pagar', {
                            method: 'POST',
                            body: datos
                        })
                        .then(respuesta => respuesta.json())
                        .then(resultado => {
                            if (resultado.resultado) {
                                actions.redirect('http://localhost:3000/finalizar-registro/conferencias');
                            }
                        })

                });
            },

            onError: function(err) {
                console.log(err);
            }
        }).render('#paypal-button-container');


        // Pase virtual
        paypal.Buttons({
            style: {
                shape: 'rect',
                color: 'blue',
                layout: 'vertical',
                label: 'pay',
            },

            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        "description": "2",
                        "amount": {
                            "currency_code": "USD",
                            "value": 49
                        }
                    }]
                });
            },

            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {

                    const datos = new FormData();
                    datos.append('paquete_id', orderData.purchase_units[0].description);
                    datos.append('pago_id', orderData.purchase_units[0].payments.captures[0].id);

                    fetch('/finalizar-registro/pagar', {
                            method: 'POST',
                            body: datos
                        })
                        .then(respuesta => respuesta.json())
                        .then(resultado => {
                            if (resultado.resultado) {
                                actions.redirect('http://localhost:3000/finalizar-registro/conferencias');
                            }
                        })

                });
            },

            onError: function(err) {
                console.log(err);
            }
        }).render('#paypal-button-container-virtual');

    }
    initPayPalButton();
</script>